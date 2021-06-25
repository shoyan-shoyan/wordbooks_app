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
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::textarea('answer', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::hidden('wordbook_id', $wordbook_id) !!}
        {!! Form::submit('単語登録', ['class' => 'btn btn-primary btn-block']) !!}
        
    </div>
{!! Form::close() !!}
        
        
        
@endsection