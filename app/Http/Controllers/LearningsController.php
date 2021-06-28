<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Wordbook;


class LearningsController extends Controller
{
    public function index(Request $request)
    {
        

            $book = \App\Wordbook::find($request->id);
    
            $words = $book->words()->orderBy('created_at', 'desc')->paginate(10);
            
            $count = $words->count();
            
            if($count === 0){
                dd($test = "登録単語がありません。");
            }
            
            //セッションに何問目、英語、日本語をループさせて全部入れる
            // key→何問目 value→"英語,日本語"
            foreach($words as $key => $word) {
                session([$key => $word->content .','. $word->answer ]);
            }

        // 現在何問目か
            // if (is_null($request->next_pos))
            // {
                // 指定が無ければ1問目とする
                // $count -1 問目
                $quizu_index = $count-1;
            // }
            // else
            // {
            //     $quizu_index = $request->next_pos;
            // }
            
            // $next_pos = (int)$quizu_index + 1;
            



        // セッションから一つのデータを取得する
        $mondai_string = session()->get($quizu_index);
        
        $mondai_array = explode(",", $mondai_string);
        //ビューに1問目を渡す

        // Wordビューでそれらを表示
        return view('learning', [
            'id' => $request->id,
            'count' => $count,
            'quizu_index' => $quizu_index,
            'mondai' => $mondai_array[0],
            'answer' => $mondai_array[1]
        ]);
        

    }
    
    public function next(Request $request)
    {
        // $quizu_index 問目を加算
        $quizu_index = $request->quizu_index;

        --$quizu_index;

        
        if($quizu_index >= 0){
            
            $mondai_string = session()->get($quizu_index);
            $mondai_array = explode(",", $mondai_string);
            
            return view('learning', [
                'id' => $request->id,
                'quizu_index' => $quizu_index,
                'count' => $request->count,
                'mondai' => $mondai_array[0],
                'answer' => $mondai_array[1]
            ]);
        }else{
                dd($test = "問題がありません。");
        }

        
    }
}
