@extends('layouts.app')

@section('content')

    <div class="container">

    {!! Form::open(['route' => ['wordbooks.update', $wordbook->id],'method' => 'PATCH']) !!}

        <div class="form-group">
            {!! Form::textarea('bookname', $wordbook->bookname, ['class' => 'form-control', 'rows' => '2']) !!}

                <wordbook-tags-input 
                    :initial-tags='@json($tagNames ?? [])'
                    :autocomplete-items='@json($allTagNames ?? [])'
                >               
                </wordbook-tags-input>

            {!! Form::submit('更新する', ['class' => 'btn btn-primary btn-block']) !!}
        </div>
    {!! Form::close() !!}
    


    {{-- 戻るボタン --}}
    <div class="btn btn-light btn-sm">
        {!! link_to_route('top','戻る') !!}
    </div>
    </div>
@endsection