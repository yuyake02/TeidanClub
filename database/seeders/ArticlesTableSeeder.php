<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'vol' => '001',
                'title' => 'ジャンプ1月号',
                'image' => 'ジャンプ1',
            ],
            [
                'vol' => '002',
                'title' => 'ジャンプ2月号',
                'image' => 'ジャンプ2',
            ],
            [
                'vol' => '003',
                'title' => 'ジャンプ3月号',
                'image' => 'ジャンプ3',
            ],
        ]);
    }
}
