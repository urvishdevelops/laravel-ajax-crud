<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Response;

class studentController extends Controller
{
    public function form(Request $request)
    {
        echo '<pre>';
        print_r($_FILES);
        die;
       return response()->json(["res"=>"yay!"]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request )
    {
        $request->validate([
            'name' => 'required | max:255',
            'course' => 'required | max:255'
        ]);
    }
   
    public function edit($id)
    {
      return response()->json($id);

    }
    public function update()
    {
        return "Yo!";
    }
    public function delete()
    {
        return "Yo!";
    }
}
