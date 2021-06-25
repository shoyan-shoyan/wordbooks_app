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
        
        
        @foreach ($words as $word)
            <li class="media mb-3">
                <div class="media-body">
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">{!! nl2br(e($word->content)) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach

@endsection