<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Wordbook;

class BooksAllController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            
            // $wordbooks = wordbooks()->orderBy('created_at', 'desc')->paginate(10);
            $wordbooks = \App\Wordbook::orderBy('created_at', 'desc')->get();

            $data = [
                'wordbooks' => $wordbooks,
            ];
        }

        // Welcomeビューでそれらを表示
        return view('booksall', $data);
    }
}
