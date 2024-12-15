<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //a method to return a view
    public function showWelcome()
    {
        return view('welcome'); // This will load the welcome.blade.php view
    }

    // Another method that passes data to the view
    public function showMessage()
    {
        $message = "This is a message from the controller.";
        return view('message', compact('message'));
    }
}
