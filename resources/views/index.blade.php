@extends('layouts.app')

@section('content')

    <div class="container">

        <div>
            ようこそ、{{ Auth::user()->name }}さん
        </div>

        <div class="btn-toolbar m-1">
            <a href="{{ route('wordbooks.create') }}" class="btn btn-primary mr-1"><i class="fas fa-pencil-alt"></i> 単語帳登録</a>
            <a href="/all" class="btn btn-primary"><i class="far fa-folder-open"></i> すべての単語帳へ</a>
        </div>

            @foreach ($wordbooks as $wordbook)
                @include('wordbooks.card')
            @endforeach

    </div>
@endsection