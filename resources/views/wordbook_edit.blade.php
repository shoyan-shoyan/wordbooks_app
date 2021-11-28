@extends('layouts.app')

@section('content')

    <div class="container">
    <p class="h1 text-center">単語帳の編集</p>
    {!! Form::open(['route' => ['wordbooks.update', $wordbook->id],'method' => 'PATCH']) !!}

        <div class="form-group">
            <div>
                {!! Form::textarea('bookname', $wordbook->bookname, ['class' => 'form-control', 'rows' => '2']) !!}
            </div>
            <div class="mt-1">
                <wordbook-tags-input 
                    :initial-tags='@json($tagNames ?? [])'
                    :autocomplete-items='@json($allTagNames ?? [])'
                >               
                </wordbook-tags-input>
            </div>
            <div class="d-flex justify-content-between">
                {!! Form::submit('更新する', ['class' => 'btn btn-dark btn-sm mt-2']) !!}
                {{-- 戻るボタン --}}
                <div class="btn btn-light btn-sm">
                    <a class="text-dark" href="{{ $url = url()->previous() }}" >戻る</a>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
    



    </div>
@endsection