<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\View;
// use Illuminate\Support\Facades;
// use Illuminate\Support\ServiceProvider;
// use Illuminate\View\View;

class UserController extends Controller
{
    public function index(){
        $array = ['index1','index2','index3'];
        return view('index')->with('array1',$array);
    }
    // return redirect()->route('gallery');

    public function gallery(){
        $array = ['gallery1','gallery2','gallery3'];
        return view('gallery',['array' => $array]);
    }

    public function about(){
        $no = 10;
        return view('about')->with('number',$no);
    }

    public function contactUs(){
        return view('contact_us');
    }
    public function contactUsGetName($name){
        return view('contact_us')->with('name',$name);
    }

    public function login(){
        return view('login');
    }

    public function passingName($id){
        return view('login')->with(['id' => $id]);
    }

    public function insertData(Request $request){
        return redirect()->route('getName.contact_us',[$request->name]);
        // return view('contact_us');
    }

}

// ->with('success', 'item created')
