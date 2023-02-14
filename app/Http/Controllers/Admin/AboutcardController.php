<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aboutcard;
use Illuminate\Http\Request;

class AboutcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Aboutcard::all();

        return view('admin.about_cards.index', compact('cards'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.about_cards.create');
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
            'content' => 'required',
        ]);


        Aboutcard::create($data);

        return redirect(route('aboutcards.index'))->with('msg','Card Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aboutcard  $aboutcard
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutcard $aboutcard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutcard  $aboutcard
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutcard $aboutcard)
    {

        return view('admin.about_cards.edit', compact('aboutcard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutcard  $aboutcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutcard $aboutcard)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);


        $aboutcard->update($data);

        return redirect(route('aboutcards.index'))->with('msg','Card Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutcard  $aboutcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutcard $aboutcard)
    {
        $aboutcard->delete();

        return redirect(route('aboutcards.index'))->with('msg','Card Deleted Successfully');
    }
}
