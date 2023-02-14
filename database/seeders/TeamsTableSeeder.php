<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => 'Mohamed Ali',
            'job_title' => 'CEO',
            'image' => 'pmi0Iy9tS9zKBGPmPoWj_.png',
        ]);
        DB::table('teams')->insert([
           'name' => 'Taha Eldesouki',
           'job_title' => 'Head Of Art',
           'image' => 'GH5VcZZMgddL9gmsURDn.png',
        ]);
        DB::table('teams')->insert([
           'name' => 'Enass Abdallah',
           'job_title' => 'Content Creator',
           'image' => 'i5RH77abTIGx75oiY2lk.png',
        ]);
        DB::table('teams')->insert([
           'name' => 'Manar',
           'job_title' => 'Community Manager',
           'image' => 'Hvypw8fszjT4ed9vS6qD.png',
        ]);
        DB::table('teams')->insert([
           'name' => 'Mohamed Foly',
           'job_title' => 'Runner',
           'image' => 'JosUXjjdCMo0UgmxqUGR.png',
        ]);
        DB::table('teams')->insert([
           'name' => 'Noura Alshayea',
           'job_title' => 'Account executive',
           'image' => 'nNWsUixzTHfUAkGs8gWt.png',
        ]);
        DB::table('teams')->insert([
           'name' => 'Dina',
           'job_title' => 'Illustration Artist',
           'image' => 'HbqqQvJEjX6pUxdcy334.png',
        ]);
    }
}
