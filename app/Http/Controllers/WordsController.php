<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

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
    
    public function store(Request $request)
    {


        // $request->wordbook()->words()->create([
        //     'content' => $request->content,
        //     'answer' => $request->answer,
        //     'wordbook_id' => 1
        // ]);
        
        
        $word = new Word;
        $word->wordbook_id = $request->wordbook_id;
        $word->content = $request->content;
        $word->answer = $request->answer;
        $word->save();

        // 前のURLへリダイレクトさせる
        return back();
    }
    
    public function create($id)
    {
        $data = [];

            $book = \App\Wordbook::find($id);

            $words = $book->words()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                //'book' => $book,
                'words' => $words,
            ];

        $wordbook_id = $id;
        // return view('word_registration', $data, compact('wordbook_id'));
        return view('word_registration', $data)->with('wordbook_id', $wordbook_id);
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
