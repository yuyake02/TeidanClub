<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            [
                'article_id' => '1',
                'order' => '1',
                'type' => 'image',
                'title' => 'ワンピース1',
                'image' => '',
                'desc' => 'ワンピース1の説明',
                'data' => 'ワンピース1の本文    ',
            ],
            [
                'article_id' => '1',
                'order' => '2',
                'type' => 'image',
                'title' => '鬼滅の刃1',
                'image' => '',
                'desc' => '鬼滅の刃1の説明',
                'data' => '鬼滅の刃1の本文    ',
            ],
            [
                'article_id' => '1',
                'order' => '3',
                'type' => 'image',
                'title' => 'デスノート1',
                'image' => '',
                'desc' => 'デスノート1の説明',
                'data' => 'デスノート1の本文    ',
            ],
            [
                'article_id' => '2',
                'order' => '1',
                'type' => 'image',
                'title' => 'ワンピース2',
                'image' => '',
                'desc' => 'ワンピース2の説明',
                'data' => 'ワンピース2の本文    ',
            ],
            [
                'article_id' => '3',
                'order' => '1',
                'type' => 'text',
                'title' => '鬼滅の刃2',
                'image' => '',
                'desc' => '鬼滅の刃2の説明',
                'data' => '鬼滅の刃2の本文    ',
            ],

        ]);
    }
}
