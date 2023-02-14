<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutcardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aboutcards')->insert([
            'title' => 'Mission',
            'content' => 'We aim to be the first leading marketing agency in the Arabic world to help companies’ wheels move.',
        ]);
        DB::table('aboutcards')->insert([
            'title' => 'Vission',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
        DB::table('aboutcards')->insert([
            'title' => 'History',
            'content' => 'Success starts by a move. It all started in 2017 when our founders met and matched
             their mindsets together to get the wheels in motion. Then, they decided to make your wheels in motion
              through different marketing solutions. At the hands of a professional and experienced team of experts,
               we established our marketing agency 5 years ago, to be one of the leading agencies that serves in Egypt,
                UAE, Saudi Arabia, and other Arabic countries.',
        ]);
    }
}
