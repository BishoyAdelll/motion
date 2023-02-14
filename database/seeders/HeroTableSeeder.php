<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroes')->insert([
            'title' => 'We make things look good',
            'subtitle' => 'At Motion Round we specialize in designing, building, shipping and scaling beautiful, usable products with blazing-fast efficiency',
            'button1Title' => 'Visit Case Studies',
            'button1URL' => '#',
            'button2Title' => 'About Motion Round',
            'button2URL' => '#',
            'image' => 'shape-1.png',

        ]);
    }
}
