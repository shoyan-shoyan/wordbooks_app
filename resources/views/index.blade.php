@extends('layouts.app')

@section('content')

    <div class="container">

        <div>
            ようこそ、{{ Auth::user()->name }}さん
        </div>

        <div class="btn-toolbar m-1">
            <a href="/wordbook_registration" class="btn btn-primary mr-1">単語帳登録</a>
            <a href="/all" class="btn btn-primary">すべての単語帳へ</a>
        </div>

            @foreach ($wordbooks as $wordbook)
                <li class="media mb-3">
                <div class="card bg-light" style="width:300px;">
                        {{-- <img class="card-img-top" src="#" alt="Card image"> --}}
                        <div class="card-body">
                            <h4 class="card-title">{!! nl2br(e($wordbook->bookname)) !!}</h4>
                            <p class="card-text small my-0">作成者：{!! link_to_route('users.show', $wordbook->user->name, ['user' => $wordbook->user->id]) !!}</p>
                            <p class="card-text small mt-0">posted at {{ $wordbook->created_at }}</p>
                                        
                                <div class="btn-toolbar">
                                    
                                   
                                    @if ($exists = \App\Word::where('wordbook_id', $wordbook->id)->exists())
                                        {!! link_to_route('learning.index', '学習へ', ['id' => $wordbook->id],['class'=>'btn btn-primary btn-sm mr-1']) !!}
                                    @endif
                                    
                                    
                                    @if (Auth::id() == $wordbook->user_id)   
                                        {{-- 単語登録ボタン --}}
                                        {!! link_to_route('words.create', '単語登録へ', ['id' => $wordbook->id],['class'=>'btn btn-primary btn-sm mr-1']) !!}
                    
                                        {{-- 投稿削除ボタンのフォーム --}}
                                        {!! Form::open(['route' => ['wordbooks.destroy', $wordbook->id], 'method' => 'delete']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    @endif
                                </div>
                        </div>
                </div>
                </li>
            @endforeach
    </div>
@endsection