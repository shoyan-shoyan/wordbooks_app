<?php

use Illuminate\Database\Seeder;

class WordbookTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wordbook_tag')->insert([
            [
            'wordbook_id' => 1,
            'tag_id' => 1,
            ],[
            'wordbook_id' => 1,
            'tag_id' => 2,
            ],[
            'wordbook_id' => 2,
            'tag_id' => 3,
            ]
        ]);
    }
}
