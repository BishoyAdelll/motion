<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();

        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'sometimes',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')){
            $file1 = $request->file('image');
            $filename1 = time() . '.' . $file1->getClientOriginalExtension();
            $file1->move(public_path('front/assets/img/service'), $filename1);
            $data['image'] = $filename1;
        }
        if($request->hasFile('icon')){
            $file2 = $request->file('icon');
            $filename2 = time() . '.' . $file2->getClientOriginalExtension();
            $file2->move(public_path('front/assets/img/service'), $filename2);
            $data['icon'] = $filename2;
        }

        Service::create($data);

        return redirect(route('services.index'))->with('msg','Service Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);

        return view('admin.services.edit', compact('service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'sometimes',
            'icon' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')){
            $file1 = $request->file('image');
            $filename1 = time() . '.' . $file1->getClientOriginalExtension();
            $file1->move(public_path('front/assets/img/service'), $filename1);
            $data['image'] = $filename1;
        }
        if($request->hasFile('icon')){
            $file2 = $request->file('icon');
            $filename2 = time() . '.' . $file2->getClientOriginalExtension();
            $file2->move(public_path('front/assets/img/service'), $filename2);
            $data['icon'] = $filename2;
        }

        $service->update($data);

        return redirect(route('services.index'))->with('msg','Service Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Service::find($id);
        $item->delete();

        return redirect(route('services.index'))->with('msg','Service Deleted Successfully');

    }
}
