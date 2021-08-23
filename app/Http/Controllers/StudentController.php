<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function student(){
        return view('student.student');
    }

    public function store(Request $request){
        $student = new student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $image=$request->file('image');
        if ($image){
            $ext=$image->getClientOriginalName();
            $upload_path='upload/image/';
            $image_url=$upload_path.$ext;
            $success=$image->move($upload_path,$ext);
            $student['image']=$image_url;  
        } 
        // return response()->json($student);
        $student->save();
        return back()->with('success','Image Upload successfully');

    }
}
