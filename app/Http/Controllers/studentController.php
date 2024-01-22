<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
        return view('index');
    }
    public function create(){
      return view('create');
    }
    public function store(request $request){
        echo '<pre>';
        print_r($request->all());
        die; 
    }
    public function update(){
        return "Yo!";
    }
    public function delete(){
        return "Yo!";
    }
}
