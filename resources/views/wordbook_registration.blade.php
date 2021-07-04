@extends('layouts.app')

@section('content')

    <div class="container">

    </div>
        
    {!! Form::open(['route' => 'wordbooks.store']) !!}
        <div class="form-group">
            {!! Form::textarea('bookname', null, ['class' => 'form-control', 'rows' => '2']) !!}
            {!! Form::submit('単語帳登録', ['class' => 'btn btn-primary btn-block']) !!}
        </div>
    {!! Form::close() !!}
        
    {{-- 戻るボタン --}}
    <div class="btn btn-light btn-sm">
        {!! link_to_route('top','戻る') !!}
    </div>
@endsection