<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
           'title' => 'Ideation & Evaluation',
           'subtitle' => 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast
At Motion Round we specialize in designing, building, shipping and scaling...',
            'content' => null,
            'icon' => 'service-1.png',
            'image' => null,
        ]);
        DB::table('services')->insert([
           'title' => 'Design, Development',
           'subtitle' => 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast
At Motion Round we specialize in designing, building, shipping and scaling...',
            'content' => null,
            'icon' => 'service-2.png',
            'image' => null,
        ]);
        DB::table('services')->insert([
           'title' => 'Online Marketing',
           'subtitle' => 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast
At Motion Round we specialize in designing, building, shipping and scaling...',
            'content' => null,
            'icon' => 'service-3.png',
            'image' => null,
        ]);
        DB::table('services')->insert([
           'title' => 'Online Marketing',
           'subtitle' => 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast
At Motion Round we specialize in designing, building, shipping and scaling...',
            'content' => null,
            'icon' => 'service-3.png',
            'image' => null,
        ]);
    }
}
