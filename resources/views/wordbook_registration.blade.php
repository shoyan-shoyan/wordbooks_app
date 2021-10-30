@extends('layouts.app')

@section('content')

    <div class="container">


        
    {!! Form::open(['route' => 'wordbooks.store']) !!}
        <div class="form-group">
            {!! Form::textarea('bookname', null, ['class' => 'form-control', 'rows' => '2']) !!}


                <wordbook-tags-input
                    :autocomplete-items='@json($allTagNames ?? [])'
                >
                </wordbook-tags-input>

            {!! Form::submit('単語帳登録', ['class' => 'btn btn-primary btn-block']) !!}
        </div>
    {!! Form::close() !!}
    


    {{-- 戻るボタン --}}
        <div class="btn btn-light btn-sm">
                <a href="{{ $url = url()->previous() }}" >戻る</a>
        </div>

    </div>
@endsection