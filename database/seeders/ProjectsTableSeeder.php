<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
           'title' => 'Web Application Design',
           'subtitle' => 'At Motion Round we specialize in designing, building, shipping...',
           'image' => 'brand-1.jpg',
           'content' => '',
           'url' => '#',
        ]);
        DB::table('projects')->insert([
           'title' => 'Globar Art Deisgn',
           'subtitle' => 'At Motion Round we specialize in designing, building, shipping...',
           'image' => 'brand-2.jpg',
           'content' => '',
           'url' => '#',
        ]);
        DB::table('projects')->insert([
           'title' => 'Modern Branding Design',
           'subtitle' => 'At Motion Round we specialize in designing, building, shipping...',
           'image' => 'brand-2.jpg',
           'content' => '',
           'url' => '#',
        ]);
    }
}
