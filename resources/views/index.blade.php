@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="p-3 mb-2 bg-secondary text-white">
            <h1 class="text-center">単語帳アプリ（仮）</h1>
        </div>
    </div>

        <div>
            ユーザ名:{{ Auth::user()->name }}
        </div>
        <div>
            <a href="/wordbook_registration">新規単語帳登録へ</a>
            {{-- <a href="/word_registration">単語登録へ</a> --}}
        </div>
        <div>
            <a href="/all">全単語帳一覧へ</a>
        </div>
        <p>ログイン中</p>
        {!! link_to_route('logout.get', 'ログアウト') !!}
        {!! link_to_route('users.index', 'ユーザー一覧', [], ['class' => 'nav-link']) !!}
        {{-- {!! link_to_route('users.show', 'マイプロフィール', ['user' => Auth::id()]) !!} --}}
        {!! link_to_route('users.followings', 'マイプロフィール', ['id' => Auth::id()]) !!}
                
        @foreach ($wordbooks as $wordbook)
            <li class="media mb-3">
                <div class="media-body">
                    <div>
                        {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                        {!! link_to_route('users.show', $wordbook->user->name, ['user' => $wordbook->user->id]) !!}
                        <span class="text-muted">posted at {{ $wordbook->created_at }}</span>
                    </div>
                    
                    
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">
                            {!! nl2br(e($wordbook->bookname)) !!}
                            
                        </p>
                    </div>
                    <div>
                        
                            {{-- 学習ボタン --}}
                            <div class="btn btn-light btn-sm">
                                {!! link_to_route('learning.index', '学習へ', ['id' => $wordbook->id]) !!}
                            </div>
                        @if (Auth::id() == $wordbook->user_id)   
                            {{-- 単語登録ボタン --}}
                            <div class="btn btn-light btn-sm">
                                {!! link_to_route('words.create', '単語登録へ', ['id' => $wordbook->id]) !!}
                            </div>
                            
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['wordbooks.destroy', $wordbook->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
        

@endsection