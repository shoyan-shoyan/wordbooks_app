@extends('layouts.app')

@section('content')
<p class="h1 text-center mb-3">新規作成</p>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-8">
                {!! Form::open(['route' => 'wordbooks.store']) !!}
                    <div class="form-group">
                        <div>
                            {!! Form::textarea('bookname', null, ['class' => 'form-control', 'rows' => '2','placeholder'=>'単語帳の名前を入力してください']) !!}
                        </div>
                        <div class="mt-2 mb-3">
                            <wordbook-tags-input
                                :autocomplete-items='@json($allTagNames ?? [])'
                            >
                            </wordbook-tags-input>
                        </div>
                        <div class="d-flex justify-content-between">
                            {!! Form::submit('単語帳登録', ['class' => 'btn_gen btn btn-dark btn-sm mt-2']) !!}
                            {{-- 戻るボタン --}}
                            <div class="btn btn-light btn-sm">
                                    <a class="text-decoration-none" href="{{ url('/') }}">戻る</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection