<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Wordbook;


class LearningsController extends Controller
{
    public function index($id)
    {
        $data = [];
        

            $book = \App\Wordbook::find($id);
    
            $words = $book->words()->orderBy('created_at', 'desc')->paginate(10);
            
            
            
            //セッションに何問目、英語、日本語をループさせて全部入れる
            // key→何問目 value→"英語,日本語"
            foreach($words as $key => $word) {
                session([$key => $word->content .','. $word->answer ]);
            }

        $num = 0;
        // セッションから一つのデータを取得する
        $value = session($num);
        
        // dd($value);

        // $data = $this->next();
        $data = [
            'value' => $value,
        ];
        //ビューに1問目を渡す

        // Wordビューでそれらを表示
        return view('learning', $data)->with('id', $id)->with('num', $num);

    }
    
    public function next($id, $num)
    {
        // num 問目を加算
        ++$num;
        
        // dd($key);
        // セッションから一つのデータを取得する
        $value = session($num);

            //  dd($value);
        //ビューにn問目を渡す
        $data = [
            'value' => $value,
        ];
        
        return view('learning', $data)->with('id', $id)->with('num', $num);
    }
}
