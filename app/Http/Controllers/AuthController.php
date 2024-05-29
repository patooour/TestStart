<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function getLoginView(){

        if (Auth::check()){
            return redirect()->back();
        }
            return view('login');


    }

    public function doLogin(Request $request){


        $rules = [
            'username'=> 'required|min:3|max:60',
            'password'=> 'required|min:6|max:110',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return redirect()->back()
                    ->withInput($request->all())
                    ->withErrors($validator->errors()->all());
        }
        $username = $request->get('username');
        $password = $request->get('password');

       $result =  Auth::attempt(['username'=>$username , 'password'=>$password]);

        if ($result){
            return redirect('/category');
        }else{
            return redirect()
                ->back()->with(['error'=>'login failed try again']);
        }
    }

    public function doLogout(){
        Auth::logout();

        return redirect('login');
    }

    public function getRegisterView(){

        if (Auth::check()){
            return redirect()->back();
        }
        return view('register');
    }

    public function doRegister(Request $request){


        $rules = [
            'firstName'=> 'required|min:3|max:60',
            'lastName'=> 'required|min:3|max:60',
            'email'=> 'required|email|min:6|max:125|unique:users,email',
            'password'=> 'required|min:6|max:125',
            'username'=> 'required|min:3|max:60|unique:users,username',
        ];

        $validator = Validator::make($request->all() , $rules);

        if ($validator->fails()){
            return redirect()->back()->withInput($request->all())
                ->withErrors($validator->errors()->all());
        }


      $newUser = new User();
      $newUser->first_name = $request->get('firstName');
      $newUser->last_name = $request->get('lastName');
      $newUser->email = $request->get('email');
      $newUser->password = bcrypt($request->get('password'));
      $newUser->username = $request->get('username');
      $newUser->save();

        $result =  Auth::attempt(['username'=>$newUser->username , 'password'=>$request->get('password')]);

        return redirect('/category');

    }
}
