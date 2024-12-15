<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){
        return view('front.home');
    }

    public function about(){

        $a = 3;
        $b = 5;
        if($a == 3){
            $about = "about is test";
        }

        return view('front.about', compact(['about']));
    }
}