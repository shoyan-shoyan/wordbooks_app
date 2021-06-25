<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordbooksController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            // ユーザの投稿の一覧を作成日時の降順で取得
            $wordbooks = $user->wordbooks()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'wordbooks' => $wordbooks,
            ];
        // Welcomeビューでそれらを表示
        return view('index', $data);
        }
        return view('welcome');

    }
    
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'bookname' => 'required|max:50',
        ]);

        // 認証済みユーザ（閲覧者）の投稿として作成（リクエストされた値をもとに作成）
        $request->user()->wordbooks()->create([
            'bookname' => $request->bookname,
        ]);

        // 前のURLへリダイレクトさせる
        //return back();
        return view('word_registration');
    }
    
    public function destroy($id)
    {
        // idの値で投稿を検索して取得
        $wordbook = \App\Wordbook::findOrFail($id);

        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $wordbook->user_id) {
            $wordbook->delete();
        }

        // 前のURLへリダイレクトさせる
        return back();
    }
}
