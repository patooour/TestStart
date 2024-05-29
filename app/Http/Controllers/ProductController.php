<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProductView($id){


        $Product = Product::find($id);

        $topsales = OrderDetail::groupBy('product_id')
            ->select('product_id' , DB::raw('SUM(amount) as k'))
            ->orderBy('k','DESC')
            ->skip(0)->take(10)
            ->get()
            ->pluck('product_id')
             ->toArray();

        $topsalesProducts = Product::find($topsales);



        return view('ProductView',['product'=>$Product , 'topSalesProducts'=>$topsalesProducts]);
    }

    public function addItemToCart(Request $request){


        $pid = $request->get('pid');

      $product =   Product::find($pid);
        $user = Auth::user();

        $uncompletedOrder = Order::where('user_id' , '=',$user->id)
            ->where('is_completed','=',false)
            ->orderby('created_at','DESC')
            ->first();

        if (!$uncompletedOrder || $uncompletedOrder == null){
            $uncompletedOrder = new Order();
            $uncompletedOrder->user_id = $user->id;
            $uncompletedOrder->name = '';
            $uncompletedOrder->address = '';
            $uncompletedOrder->phoneNumber = '';
            $uncompletedOrder->email = '';
            $uncompletedOrder->save();

        }
        // find the item in the order detail
            $item = OrderDetail::where('product_id','=',$product)
                ->where('order_id','=',$uncompletedOrder->id)
                ->first();

        if (!$item || $item == null){
            $item = new OrderDetail();
            $item->product_id = $pid;
            $item->order_id = $uncompletedOrder->id;
            $item->amount = 1;
            $item->price = $product->price;
            $item->discount = $product->discount;
            $item->save();
        } else {
            $item->amount += 1;
            $item->save();

        }
return redirect()->back();
    }

    public function getCartView(){


        $user = Auth::user();

        $uncompletedOrder = Order::where('user_id' , '=',$user->id)
            ->where('is_completed','=',false)
            ->orderby('created_at','DESC')
            ->first();



        if (!$uncompletedOrder || $uncompletedOrder == null){
            $details = null ;
        }else{
            $details = $uncompletedOrder->details;
        }
        return view('myCart',
            ['details'=>$details]);
    }
}
