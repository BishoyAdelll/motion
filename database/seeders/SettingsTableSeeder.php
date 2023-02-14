<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'site_name' => ' Motion Round.',
            'site_email' => 'hello@motionround.com',
            'site_address' => '210 T , Hdayq Elahram , Giza , Egypt',
            'site_phone' => '00201098936104 - +966 115 206079',
            'logo' => 'logo.png',
            'footer_title' => "More than 10 years in the game and we're  just getting started. 🤝",
            'footer_btn_title' => 'Available for new Project',
            'footer_btn_url' => '/contact',
            'terms_url' => '/terms',
            'policy_url' => '/policy',
        ]);
    }
}
