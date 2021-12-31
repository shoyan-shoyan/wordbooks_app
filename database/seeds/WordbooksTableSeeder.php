<?php

use Illuminate\Database\Seeder;

class WordbooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wordbooks')->insert([
            'id' => 5,
            'user_id' => 1,
            'bookname' => '英単語(果物) 和 ー> 英',
        ]);
    }
}
