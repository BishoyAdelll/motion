<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
           'title' => 'How to add a count up animation the webflow site.',
           'subtitle' => 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast',
           'content' => 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast',
           'image' => 'blog-1.jpg',
           'author' => 'Admin',
        ]);
        DB::table('blogs')->insert([
           'title' => 'How to grow your business with Motion Round digital solution.',
           'subtitle' => 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast',
           'content' => 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast',
           'image' => 'blog-2.jpg',
           'author' => 'Admin',
        ]);
    }
}
