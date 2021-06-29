@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="p-3 mb-2 bg-secondary text-white">
            <h1 class="text-center">単語帳アプリ（仮）</h1>
        </div>
    </div>
                
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
                            {!! link_to_route('word.index', '単語一覧へ', ['id' => $wordbook->id]) !!}
                        </p>
                    </div>

                </div>
            </li>
        @endforeach
        

@endsection