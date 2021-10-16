<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Wordbook;

class BooksAllController extends Controller
{
    public function index(Request $request)
    {
        // 検索キーワードを代入
        $keyword = $request->input('keyword');

        $query = Wordbook::query();
        
        
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
        
            if (!empty($keyword)) {
                $query->where('bookname', 'LIKE', "%$keyword%");
            }
        
            $wordbooks = $query->orderBy('created_at', 'desc')->get();

            $data = [
                'wordbooks' => $wordbooks,
                'keyword' => $keyword,
            ];
        }

        // Welcomeビューでそれらを表示
        return view('booksall', $data);
    }
}
