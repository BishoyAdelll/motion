<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services_section;
use Illuminate\Http\Request;

class ServicesSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section = Services_section::all()->first();

        return view('admin.services_section.index', compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services_section  $services_section
     * @return \Illuminate\Http\Response
     */
    public function show(Services_section $services_section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services_section  $services_section
     * @return \Illuminate\Http\Response
     */
    public function edit(Services_section $services_section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'button_title' => 'required',
            'button_url' => 'required',
        ]);

        Services_section::where('id',$id)->update($data);

        return back()->with('msg','Section Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services_section  $services_section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services_section $services_section)
    {
        //
    }
}
