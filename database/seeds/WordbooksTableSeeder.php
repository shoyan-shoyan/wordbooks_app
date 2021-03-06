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
            [
            'id' => 1,
            'user_id' => 2,
            'bookname' => '英単語(果物) 和 ー> 英',
            ],[
            'id' => 2,
            'user_id' => 2,
            'bookname' => '簿記用語(3級)',
            ]
        ]);
    }
}
