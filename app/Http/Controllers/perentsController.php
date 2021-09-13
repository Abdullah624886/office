<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parents;
use App\Models\subcategory;
use DB;

class perentsController extends Controller
{

    public function parentss(){
        return view('perents.perents');
    }
    public function store(Request $request){
     $parents =  new parents();
     $parents->father_name = $request->father_name;
     $parents->moher_name = $request->moher_name;
     $parents->save();

    $sub = new subcategory();
    $sub->name = $request->name;
    $sub->email = $request->email;
    $sub->phone = $request->phone;
    $sub->save();
    return back()->with('success','Image Upload successfully');

    }
}
