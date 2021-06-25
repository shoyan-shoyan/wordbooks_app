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
        $wordbook_id = $id;
        return view('word_registration', compact('wordbook_id'));
    }
}
