<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(8);

        return view('web.portfolio.portfolio',['projects' => $projects]);
    }
    public function show($id){
        $project=project::find($id);
            return view ('web.portfolio.singlePortfolio',['project'=>$project]);
    }

}
