<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            [
                'name' => '尾田栄一郎',
                'image' => 'eiichirou_oda.jpeg',
                'desc' => 'ワンピースを描いています',
                'category' => 'Painter',
            ],
            [
                'name' => '吾峠呼世晴',
                'image' => 'koyoharu_gotouge.jpeg',
                'desc' => '鬼滅の刃を描いています',
                'category' => 'Painter',
            ],
            [
                'name' => '大場つぐみ',
                'image' => 'tugumi_ooba.jpeg',
                'desc' => 'デスノートを描いています',
                'category' => 'Painter',
            ],
            [
                'name' => '小畑健',
                'image' => 'ken_obata.jpeg',
                'desc' => 'バクマン。を描いています',
                'category' => 'Painter',
            ],
        ]);
    }
}
