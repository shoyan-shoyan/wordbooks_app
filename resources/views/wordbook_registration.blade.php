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
        
        {!! Form::open(['route' => 'wordbooks.store']) !!}
    <div class="form-group">
        {!! Form::textarea('bookname', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::submit('単語帳登録', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}
        
        
        
@endsection