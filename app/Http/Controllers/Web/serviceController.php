<?php

namespace App\Http\Controllers\Web;
use App\Models\service;
use App\Http\Controllers\Controller;

class serviceController extends Controller
{
    public function index(){
        $services=service::all();
            return view('web.services.service',['services' =>$services]);
    }
    public function show($id){
        $service=service::find($id);
        return view('web.services.singleService',['service' =>$service]);
    }
}
