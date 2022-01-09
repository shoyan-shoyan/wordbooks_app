<?php

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
        $this->call([
            UsersTableSeeder::class,
            WordbooksTableSeeder::class,
            WordTableSeeder::class,
            TagTableSeeder::class,
            WordbookTagTableSeeder::class,
        ]);
    }
}
