<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {
        $setting = Setting::all()->first();

        return view('admin.settings.index', compact('setting'));

    }

    public function update(Request $request, Setting $setting)
    {
        $data = $request->validate([
            'site_name' => 'required',
            'site_email' => 'required',
            'site_address' => 'required',
            'site_phone' => 'required',
            'logo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'footer_title' => 'required',
            'footer_btn_title' => 'required',
            'footer_btn_url' => 'required',
            'terms_url' => 'required',
            'policy_url' => 'required',
        ]);

        if($request->hasFile('logo')){
            $file1 = $request->file('logo');
            $filename1 = time() . '.' . $file1->getClientOriginalExtension();
            $file1->move(public_path('front/assets/img/motion round'), $filename1);
            $data['logo'] = $filename1;
        }

        $setting->update($data);

        return back()->with('msg','Site Settings Updated Successfully');

    }

}
