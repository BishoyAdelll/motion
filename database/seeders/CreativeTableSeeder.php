<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreativeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('creatives')->insert([
            'content' => 'We deploy world-class <b>Creative Design team</b> on demand.
                                    that can design, build, ship and
                                    scale your vision in the most efficient way.',
            'video_id' => 'https://www.youtube.com/watch?v=PO_fBTkoznc',
            'video_title' => 'Play Take a look behind the scenes',
            'first_card_title' => '100%',
            'first_card_subtitle' => 'Client Setisfaction',
            'first_card_icon' => 'flaticon-satisfaction',
            'second_card_title' => '1200+',
            'second_card_subtitle' => 'Complete Project',
            'second_card_icon' => 'flaticon-clipboard',
            'third_card_title' => '1800+',
            'third_card_subtitle' => 'Design Resource',
            'third_card_icon' => 'flaticon-setting',
        ]);
    }
}
