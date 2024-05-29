<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{


    public function getView1(){
        return 'hellllloz 1';
    }

    public function getView2(){
        return 'hellllloz2';
    }

    public function getView3(){
        return 'hellllloz3';
    }

    public function getView4(){
        return 'hellllloz4';
    }
}
