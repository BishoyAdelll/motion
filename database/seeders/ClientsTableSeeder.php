<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert(['image' => 'brand-1.png']);
        DB::table('clients')->insert(['image' => 'brand-2.png']);
        DB::table('clients')->insert(['image' => 'brand-3.png']);
        DB::table('clients')->insert(['image' => 'brand-4.png']);
        DB::table('clients')->insert(['image' => 'brand-5.png']);
        DB::table('clients')->insert(['image' => 'brand-6.png']);
    }
}
