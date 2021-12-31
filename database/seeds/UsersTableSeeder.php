<?php

use Illuminate\Database\Seeder;

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
            'name' => 'tansheru_user',
            'email' => 'tansheru@tansheru.com',
            'password' => Hash::make('password123'),
            ],[
            'name' => Str::random(10),
            'email' => Str::random(10).'@test.com',
            'password' => Hash::make('password123'),
            ],[
            'name' => 'testuser01',
            'email' => 'test@test.com',
            'password' => Hash::make('password123'),
            ],[
            'name' => 'testuser02',
            'email' => 'test2@test.com',
            'password' => Hash::make('password123'),
            ],[
            'name' => 'testuser03',
            'email' => 'test3@test.com',
            'password' => Hash::make('password123'),
            ]
        ]);
    }
}
