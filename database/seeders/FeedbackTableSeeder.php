<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback')->insert([
           'name' => 'Darrell Steward',
           'job_title' => 'Founder of (Rirax)',
           'content' => 'Motion Round was very diligent, polite and extremely customer oriented. I think Monika will
                         go far with that attitude and ...he is such a honest, decent and reliable.',
           'image' => 'testi-1.png',
        ]);
        DB::table('feedback')->insert([
           'name' => 'Floyd Miles',
           'job_title' => 'CEO of (Orix)',
           'content' => 'Motion Round was very diligent, polite and extremely customer oriented. I think Monika will
                         go far with that attitude and ...he is such a honest, decent and reliable.',
           'image' => 'testi-2.jpg',
        ]);
        DB::table('feedback')->insert([
           'name' => 'Albert Flores',
           'job_title' => 'Founder of (Rirax)',
           'content' => 'Motion Round was very diligent, polite and extremely customer oriented. I think Monika will
                         go far with that attitude and ...he is such a honest, decent and reliable.',
           'image' => 'testi-3.png',
        ]);
        DB::table('feedback')->insert([
           'name' => 'Dianne Russell',
           'job_title' => 'CEO of (Orix)',
           'content' => 'Motion Round was very diligent, polite and extremely customer oriented. I think Monika will
                         go far with that attitude and ...he is such a honest, decent and reliable.',
           'image' => 'testi-4.jpg',
        ]);
        DB::table('feedback')->insert([
           'name' => 'Jerome Bell',
           'job_title' => 'CEO of (Orix)',
           'content' => 'Motion Round was very diligent, polite and extremely customer oriented. I think Monika will
                         go far with that attitude and ...he is such a honest, decent and reliable.',
           'image' => 'testi-5.jpg',
        ]);
        DB::table('feedback')->insert([
           'name' => 'Floyd Miles',
           'job_title' => 'CEO of (Orix)',
           'content' => 'Motion Round was very diligent, polite and extremely customer oriented. I think Monika will
                         go far with that attitude and ...he is such a honest, decent and reliable.',
           'image' => 'testi-6.jpg',
        ]);
    }
}
