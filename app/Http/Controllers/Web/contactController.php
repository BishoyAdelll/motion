<?php

namespace App\Http\Controllers\Web;
use App\models\Contact;
use App\Http\Controllers\Controller;

class contactController extends Controller
{
    public function index(){
        return view('web.contact.contact');
    }
    public function store (){
        $contact=new Contact();
        $contact->name =request('name');
        $contact->phone =request('phone');
        $contact->email =request('email');
        $contact->service =request('service');
        $contact->message =request('message');
        $contact->save();
//
        return back();
    }
}
