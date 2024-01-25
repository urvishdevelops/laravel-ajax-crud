<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\File;

class studentController extends Controller
{
    public function form(Request $request, $id)
    {

        if ($request->hasFile('image')) {

            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;

            $uploadDirectory = 'uploads';

            $uploadPath = public_path($uploadDirectory);

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0777, true, true);
            }

            $request->file('image')->move($uploadPath, $imageName);
            $imagePath = $uploadDirectory . '/' . $imageName;
        }

        $student = new Student;

        $student->name = $request->name;
        $student->course = $request->course;
        // $student->image = $imageName;
        $student->save();

        return response()->json(['res' => "student created Successfully!", "id" => $id]);   
    }
    public function studentdata()
    {
        $student = Student::all();

        $tbody = "";

        foreach ($student as $key => $value) {
            $tbody .= "<tr>";
            $tbody .= "<td>$value[id]</td>";
            $tbody .= "<td>$value[name]</td>";
            $tbody .= "<td>$value[course]</td>";
            $tbody .= '<td><img src="' . asset('uploads/' . $value['image']) . '" alt="Not Found!" style="max-height: 50px;"></td>';
            $tbody .= "<td><a href='edit/$value[id]' class='btn btn-warning edit'>Edit</a> | <a href='$value[id]/delete' class='btn btn-danger delete''>Delete</a>";
            $tbody .= "</tr>";
        }

        return response()->json($tbody);

    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | max:255',
            'course' => 'required | max:255',
            'image' => 'required'
        ]);
    }

    public function edit($id)
    {
        $studData = Student::find($id);

        // return response()->json($studData);

        return view('form', ['studData' => $studData]);
    }
    public function update()
    {

    }
    public function delete()
    {
        return "Yo!";
    }
}
