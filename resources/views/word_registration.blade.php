@extends('layouts.app')

@section('content')
    {{ $wordbook_id }}
    <div class="container">
        <div class="p-3 mb-2 bg-secondary text-white">
            <h1 class="text-center">単語帳アプリ（仮）</h1>
        </div>
    </div>

        <div>
            ユーザ名:{{ Auth::user()->name }}
        </div>
        
        {!! Form::open(['route' => 'words.store']) !!}
    <div class="form-group">
        単語
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2']) !!}
        解答
        {!! Form::textarea('answer', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::hidden('wordbook_id', $wordbook_id) !!}
        {!! Form::submit('単語登録', ['class' => 'btn btn-primary btn-block']) !!}

    </div>
        {!! Form::close() !!}
        
    @foreach ($words as $word)
        <li class="media mb-3">
            <div class="media-body">
                <div>
                    {{-- 投稿内容 --}}
                    {{ $word->id }}
                    <p class="mb-0">{!! nl2br(e($word->content)) !!}</p>
                    <p class="mb-0">{!! nl2br(e($word->answer)) !!}</p>
                </div>
            </div>
            {{-- 単語削除ボタンのフォーム --}}
 
        </li>
                   {!! Form::open(['route' => ['words.destroy', $word->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
    @endforeach
        
        
@endsection