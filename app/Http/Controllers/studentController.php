<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Response;

class studentController extends Controller
{
    public function index()
    {
        $entireTable = student::all();
        return view('index', ['student' => $entireTable]);
    }
    public function store(Request $request)
    {

        $validator = $request->validate(
            [
                'name' => 'required',
                'course' => 'required',
                'image' => 'required'
            ]
        );

        $file = $request->file('image')->extension();

        $imageName = time() . '.' . $file;

        $request->file('image')->move(public_path("studentImg"), $imageName);


        $studData = new student;

        $studData->name = $request->name;
        $studData->course = $request->course;
        $studData->image = $imageName;

        $studData->save();

        // if ($validator->fails()) {
        //     return response()->json(['msg' => $validator->errors()->toArray()]);
        // } else {
        //     try {
        //         return response()->json(['success' => true, 'msg' => 'student data added successfully!']);
        //     } catch (\Exception $e) {
        //         return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        //     }
        // }

    }
    public function edit()
    {

        print_r("Yo edit!");

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
