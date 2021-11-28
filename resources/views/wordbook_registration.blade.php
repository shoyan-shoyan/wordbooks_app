@extends('layouts.app')

@section('content')
<p class="h1 text-center">新規作成</p>
    <div class="container">
        {!! Form::open(['route' => 'wordbooks.store']) !!}
            <div class="form-group">
                <div>
                    {!! Form::textarea('bookname', null, ['class' => 'form-control', 'rows' => '2','placeholder'=>'単語帳の名前を入力してください']) !!}
                </div>
                <div class="mt-1">
                    <wordbook-tags-input
                        :autocomplete-items='@json($allTagNames ?? [])'
                    >
                    </wordbook-tags-input>
                </div>
                <div class="d-flex justify-content-between">
                {!! Form::submit('単語帳登録', ['class' => 'btn btn-dark btn-sm mt-2']) !!}

                {{-- 戻るボタン --}}
                    <div class="btn btn-light btn-sm px-3">
                            <a class="text-dark" href="{{ url('/') }}">戻る</a>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
        



    </div>
@endsection