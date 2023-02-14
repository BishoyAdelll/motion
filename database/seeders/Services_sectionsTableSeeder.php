<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Services_sectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_sections')->insert([
          'title' => 'What We Do?',
            'subtitle' => 'Experts in every aspect lifecycle',
            'button_title' => 'View All Services',
            'button_url' => '#',
        ]);
    }
}
