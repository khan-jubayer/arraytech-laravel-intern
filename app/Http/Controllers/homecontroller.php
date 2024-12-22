<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function about(){

        $a = 3;
        $b = 5;
        if($a == 3){
            $about = "about is test";
        }

        return view('frontend.about', compact(['about']));
    }

    public function root(){
        return view('form');
    }

    public function submit(Request $request){

        $data = new test(); //app/Models/test.php

        //save data
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        $data->save();

        //after save data return to the previous page
        return redirect('show-data');
        
    }

    public function show_data(){

        $data1 = test::latest()->take(5)->get();
        return view('show_data', compact('data1'));
    }

    public function edit_data($id){

        $edit = test::find($id);

        return view('edit_data', compact(['edit']));

    }

    public function update($id, Request $request){

        $updated_data = test::find($id);

        $updated_data->name = $request->input('name');
        $updated_data->email = $request->input('email');
        $updated_data->phone = $request->input('phone');
        $updated_data->address = $request->input('address');

        $updated_data->save();

        return redirect('show-data');
    }

    public function delete_data($id){

        $delete_data = test::find($id);
        $delete_data->delete();

        return redirect('show-data');
    }
}