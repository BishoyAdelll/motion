<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $about = About::all()->first();

        return view('admin.about.index', compact('about'));

    }

    public function update(Request $request, About $about)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')){
            $file1 = $request->file('image');
            $filename1 = time() . '.' . $file1->getClientOriginalExtension();
            $file1->move(public_path('front/assets/img/about'), $filename1);
            $data['image'] = $filename1;
        }

        $about->update($data);

        return back()->with('msg','About us Page Updated Successfully');

    }

}
