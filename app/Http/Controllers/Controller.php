<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Social;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $setting = Setting::all()->first();
        $socials = Social::all();

        View::share('setting', $setting);
        View::share('socials', $socials);
    }

}
