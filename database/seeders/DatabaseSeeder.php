<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdminsTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(Artists_sectionsTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(SnsaccountsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
