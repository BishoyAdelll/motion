<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Creative;
use App\Models\Feedback;
use App\Models\Hero;
use App\Models\Newsletter;
use App\Models\Project;
use App\Models\Service;
use App\Models\Services_section;
use App\Models\Social;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $data['hero'] = Hero::all()->first();
        $data['socials'] = Social::all();
        $data['creative'] = Creative::all()->first();
        $data['clients'] = Client::all();
        $data['services_section'] = Services_section::all()->first();
        $data['services'] = Service::all()->take(4);
        $data['projects'] = Project::all()->take(4);
        $data['feedbacks'] = Feedback::all();
        $data['blogs'] = Blog::all()->take(2);

        return view('web.pages.home',$data);
    }
    public function newsletter(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
        ]);

        Newsletter::insert($data);


        return redirect()->back();
    }

}
