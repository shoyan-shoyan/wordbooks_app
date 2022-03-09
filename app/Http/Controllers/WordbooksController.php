<?php

namespace App\Http\Controllers;

use App\Wordbook;
use App\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use App\Word;

//例外処理用
use Illuminate\Database\Eloquent\ModelNotFoundException;
//作成したバリデーションを使用する
use App\Http\Requests\ValidateRequest;

class WordbooksController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            // ユーザの投稿の一覧を作成日時の降順で取得
            $wordbooks = $user->feed_wordbooks()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'wordbooks' => $wordbooks,
            ];
        // Welcomeビューでそれらを表示
        return view('index', $data);
        }
        return view('welcome');

    }
    public function show($id)
    {
        $wordbook = Wordbook::with('tags',"words")->findOrFail($id);
        $tagNames = $wordbook->tags->map(function($tag){
            return['text' => $tag->name ];
        });

        $allTagNames = Tag::all()->map(function($tag){
            return['text' => $tag->name];
        });

        return view('wordbook_show', [
            'wordbook'=> $wordbook,
            'tagNames'=> $tagNames,
            'allTagNames' => $allTagNames,
            'words'=>$wordbook->words,
            ]);
    }
    public function create()
    {
        $allTagNames = Tag::all()->map(function($tag){
            return['text' => $tag->name];
        });

        return view('wordbook_registration',[
            'allTagNames' => $allTagNames,
        ]);
    }
    
    public function store(ValidateRequest $request)
    {
        $wordbook = new Wordbook();

        // 認証済みユーザ（閲覧者）の投稿として作成（リクエストされた値をもとに作成）
        //タグの作成のため$wordbookへ代入
        $wordbook = $request->user()->wordbooks()->create([
            'bookname' => $request->bookname,
        ]);

        //タグの作成
        $request->tags->each(function($tagName)use($wordbook){
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $wordbook->tags()->attach($tag);
        });

        // CSRFトークンを再生成して、二重送信対策
        $request->session()->regenerateToken();

        //単語帳を登録したら単語登録画面へリダイレクトさせる
        return redirect()->route('words.create',[
            'id' => $wordbook->id,
        ]);

    }
    
    public function edit($id)
    {
        $wordbook = Wordbook::with('tags')->findOrFail($id);
        $tagNames = $wordbook->tags->map(function($tag){
            return['text' => $tag->name ];
        });

        $allTagNames = Tag::all()->map(function($tag){
            return['text' => $tag->name];
        });

        return view('wordbook_edit', [
            'wordbook'=> $wordbook,
            'tagNames'=> $tagNames,
            'allTagNames' => $allTagNames,
            ]);
    }

    public function update(ValidateRequest $request, $id)
    {
        if (\Auth::check()) {
            $wordbook = Wordbook::find($id);
            $user = \App\Wordbook::find($id)->user_id;

            if (\Auth::id() === $user) {

                $wordbook->bookname = $request->input('bookname');
                $wordbook->save();

                $wordbook->tags()->detach();
                //タグの作成
                $request->tags->each(function($tagName)use($wordbook){
                    $tag = Tag::firstOrCreate(['name' => $tagName]);
                    $wordbook->tags()->attach($tag);
                });

                return redirect('/');
            } 
        }
        return view('welcome');

    }

    public function destroy($id)
    {
        // idの値で投稿を検索して取得
        $wordbook = \App\Wordbook::findOrFail($id);
        
        // Wordモデルから紐づく単語を抽出する。見つからない場合は例外処理
        try {
            
            $words = \App\Word::where('wordbook_id', $wordbook->id)->get();
            
            foreach($words as $word) {
                if (\Auth::id() === $wordbook->user_id) {
                    $word->delete();
                }
            }
        }catch (ModelNotFoundException $e) {
            return redirect('/');
        }
        
        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $wordbook->user_id) {
            $wordbook->delete();
        }

        // 前のURLへリダイレクトさせる
        return redirect('/');
    }
    public function like(Request $request, Wordbook $wordbook)
    {
        $wordbook->likes()->detach($request->user()->id);
        $wordbook->likes()->attach($request->user()->id);

        return [
            'id' => $wordbook->id,
            'countLikes' => $wordbook->count_likes,
        ];
    }

    public function unlike(Request $request, Wordbook $wordbook)
    {
        $wordbook->likes()->detach($request->user()->id);

        return [
            'id' => $wordbook->id,
            'countLikes' => $wordbook->count_likes,
        ];
    }

    public function favorite(Request $request, Wordbook $wordbook)
    {
        $user = \Auth::user();
        $wordbooks = $user->user_likes()->paginate(10);

        $data = [
            'wordbooks' => $wordbooks,
        ];
        return view('favorite', $data);
    }
}
