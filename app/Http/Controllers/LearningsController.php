<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Wordbook;


class LearningsController extends Controller
{
    public function index(Request $request)
    {
            //データベースに指定の単語帳が存在するかチェック
            $exists = \App\Wordbook::where('id', $request->id)->exists();
            
            
            if($exists) {
                    
                
                $book = \App\Wordbook::find($request->id);
                $words = $book->words()->orderBy('created_at', 'desc')->paginate(10);
                $count = $words->count();
                
                // 単語が登録されていない場合の条件分岐
                if($count === 0){
                    return view('learning', [
                        'message' => '登録単語がありません。'
                    ]);
                }
                    
                //セッションに何問目、英語、日本語をループさせて全部入れる
                // key→何問目 value→"英語,日本語"
                foreach($words as $key => $word) {
                    session([$key => $word->content .','. $word->answer ]);
                }
    
                // 現在何問目か
                        $quizu_index = $count-1;
        
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
                    'answer' => $mondai_array[1],
                    //'message' => $message,
                ]);
            
            }
            return redirect('/');
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
                // すべての単語が完了した場合のメッセージ
                return view('learning', [
                    'message' => 'すべての単語を学習しました。'
                ]);
        }
    }
}
