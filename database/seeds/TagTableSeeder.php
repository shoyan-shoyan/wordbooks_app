<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
            'id' => 1,
            'name' => '英語',
            ],[
            'id' => 2,
            'name' => '英単語',
            ],[
            'id' => 3,
            'name' => '簿記',
            ]
        ]);
    }
}
