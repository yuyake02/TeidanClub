<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '一太郎',
                'email' => 'ichitaro@gmail.com',
                'password' => 'ichitaro01',
            ],
            [
                'name' => '二太郎',
                'email' => 'nitaro@gmail.com',
                'password' => 'nitaro02',
            ],
            [
                'name' => '三太郎',
                'email' => 'santaro@gmail.com',
                'password' => 'santaro03',
            ],
        ]);
    }
}
