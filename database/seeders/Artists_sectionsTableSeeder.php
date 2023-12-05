<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Artists_sectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists_sections')->insert([
            [
                'artist_id' => '1',
                'section_id' => '1',
            ],
            [
                'artist_id' => '2',
                'section_id' => '2',
            ],
            [
                'artist_id' => '3',
                'section_id' => '3',
            ],
            [
                'artist_id' => '4',
                'section_id' => '3',
            ],
            [
                'artist_id' => '1',
                'section_id' => '4',
            ],
            [
                'artist_id' => '2',
                'section_id' => '5',
            ],
        ]);
    }
}
