<?php

use Illuminate\Database\Seeder;

class WordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert([
            [
            'wordbook_id' => 5,
            'content' => 'りんご',
            'answer' => 'apple',
            ],[
            'wordbook_id' => 5,
            'content' => 'オレンジ',
            'answer' => 'orange',
            ],[
            'wordbook_id' => 5,
            'content' => 'バナナ',
            'answer' => 'banana',
            ],[
            'wordbook_id' => 5,
            'content' => 'イチゴ',
            'answer' => 'strawberry',
            ],[
            'wordbook_id' => 5,
            'content' => '木イチゴ',
            'answer' => 'raspberry',
            ],[
            'wordbook_id' => 5,
            'content' => 'グレープフルーツ',
            'answer' => 'grapefruit',
            ],[
            'wordbook_id' => 5,
            'content' => 'さくらんぼ',
            'answer' => 'cherry',
            ],[
            'wordbook_id' => 5,
            'content' => 'パイナップル',
            'answer' => 'pineapple',
            ],[
            'wordbook_id' => 5,
            'content' => 'ぶどう',
            'answer' => 'grape',
            ],[
            'wordbook_id' => 5,
            'content' => 'マンゴー',
            'answer' => 'mango',
            ],[
            'wordbook_id' => 5,
            'content' => '桃',
            'answer' => 'peach',
            ],[
            'wordbook_id' => 5,
            'content' => 'ゆず',
            'answer' => 'yuzu',
            ],[
            'wordbook_id' => 5,
            'content' => 'レモン',
            'answer' => 'lemon',
            ]
        ]);
    }
}
