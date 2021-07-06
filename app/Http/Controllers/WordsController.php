<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
//作成したバリデーションを使用する
use App\Http\Requests\ValidateRequest;

class WordsController extends Controller
{
    public function index($id)
    {
        $data = [];

            $book = \App\Wordbook::find($id);

            $words = $book->words()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'book' => $book,
                'words' => $words,
            ];

        // Wordビューでそれらを表示
        return view('word', $data);
    }
    
    public function store(ValidateRequest $request)
    {
        
        if (\Auth::check()) {

            $book = $request->wordbook_id;
            $user = \App\Wordbook::find($book)->user_id;
            
            if (\Auth::id() === $user) {
                $word = new Word;
                $word->wordbook_id = $request->wordbook_id;
                $word->content = $request->content;
                $word->answer = $request->answer;
                $word->save();
            }
    
            // 前のURLへリダイレクトさせる
            return back();
        }
        return view('welcome');
    }
    
    public function create($id)
    {
        $data = [];
        if (\Auth::check()) {
                
                $book = \App\Wordbook::find($id);
                $user = $book->user_id;
                
                if (\Auth::id() === $user) {
                    $words = $book->words()->orderBy('created_at', 'desc')->paginate(10);
        
                    $data = [
                        'words' => $words,
                    ];
        
                    $wordbook_id = $id;
                    return view('word_registration', $data)->with('wordbook_id', $wordbook_id);
                }
                return redirect('/');
                
        }
        return view('welcome');
    }
    
    public function destroy($id)
    {
        // idの値で投稿を検索して取得
        $word = \App\Word::findOrFail($id);
        $wordbook = \App\Wordbook::findOrFail($word->wordbook_id);
        
        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $wordbook->user_id) {
            $word->delete();
        }

        // 前のURLへリダイレクトさせる
        return back();
    }
    
}
