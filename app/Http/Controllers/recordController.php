<?php

namespace App\Http\Controllers;

use App\Models\record;
use Illuminate\Http\Request;

class recordController extends Controller
{

    public function store(Request $request)
    {
        //validate
        $request->validate([
           'f_name'=>'required',
           'l_name'=>'required',
            'email'=>'required',
            'position'=>'required',

        ]);
        //create a new record
//        record::create($request->all());
        $record=new record();
        $record->f_name =request('f_name');
        $record->l_name =request('l_name');
        $record->email =request('email');
        $record->position =request('position');
        $record->date =request('date');
        $record->budget =request('budget');
        $record->business =request('business');
        $record->industry =request('industry');
        $record->comments =request('comments');
        $record->about =request('about');
        $record->name_program =$request->brands;
//        foreach ($request->brands as $key=>$name) {
//            $record->name_program =$request->brands[$key];
//        }
        $record->save();
        // redirect and send message
        return redirect()->route('home')->with('success','record created successfully');
    }


}
