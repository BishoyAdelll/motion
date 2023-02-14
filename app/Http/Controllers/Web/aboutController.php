<?php

namespace App\Http\Controllers\Web;
use App\models\About;
use App\Http\Controllers\Controller;
use App\Models\Aboutcard;
use App\Models\Team;

class aboutController extends Controller
{
    public function index(){
        $about = About::first();
        $teams = Team::all();
        $cards = Aboutcard::all();

        return view('web.about.about',[
            'about'=>$about,
            'teams'=>$teams,
            'cards'=>$cards,
        ]);
    }
}
