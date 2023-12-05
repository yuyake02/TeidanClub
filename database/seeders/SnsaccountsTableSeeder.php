<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SnsaccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('snsaccounts')->insert([
            [
                'artist_id' => '2',
                'type' => 'x',
                'url' => 'https://x.com/Gotouge_Kimetsu?s=20',
            ],
            [
                'artist_id' => '2',
                'type' => 'instagram',
                'url' => 'https://www.instagram.com/ufotable_inc/',
            ],
        ]);
    }
}
