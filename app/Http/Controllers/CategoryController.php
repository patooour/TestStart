<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{


    public function index()
    {
/*        $products = Product::skip(0)->take(20)->get();*/

        $topsales = OrderDetail::groupBy('product_id')
            ->select('product_id', DB::raw('SUM(amount) as k'))
            ->orderby('k','desc')
            ->skip(0)->take(10)
            ->get()
            ->pluck('product_id')
            ->toArray();

        $products = Product::find($topsales);

        return view('home' , compact('products'));
    }
}
