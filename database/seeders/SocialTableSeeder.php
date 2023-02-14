<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            'title' => 'facebook',
            'icon' => 'fab fa-facebook-f',
            'url' => '#',
        ]);

        DB::table('socials')->insert([
            'title' => 'youtube',
            'icon' => 'fab fa-youtube',
            'url' => '#',
        ]);
        DB::table('socials')->insert([
            'title' => 'twitter',
            'icon' => 'fab fa-twitter',
            'url' => '#',
        ]);
        DB::table('socials')->insert([
            'title' => 'behance',
            'icon' => 'fab fa-behance',
            'url' => '#',
        ]);
    }
}
