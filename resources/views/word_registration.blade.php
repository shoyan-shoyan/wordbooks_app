@extends('layouts.app')

@section('content')

    <div class="container">
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
        
        {{-- 他の単語一覧 --}}
        <div class="row">
            @foreach ($words as $word)
            <div class="col-10">
            <div class="card">
                <li class="list-unstyled">
                    <div class="media-body">
                        <div>
                            {{-- 投稿内容 --}}
                            <div class="card-body bg-light py-1">
                                <p class="mb-0 text-break">{!! nl2br(e($word->content)) !!}</p>
                            </div>
                            <div class="card-body py-1">
                                <p class="my-0 text-break">{!! nl2br(e($word->answer)) !!}</p>
                            </div>
                        </div>
                    </div>
                    
         
                </li>
                </div>
            </div>
                            {{-- 単語削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['words.destroy', $word->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                            
            @endforeach
            
        </div>
    
        {{-- 戻るボタン --}}
        @if (
            strpos($url = $url = url()->previous(), '/wordbooks/create') !== false 
            or
            strpos($url = $url = url()->previous(), '/words/create') !== false 
        )
             <div class="btn btn-light btn-sm">
                {!! link_to_route('top','TOPへ戻る') !!}
            </div>
        @else
            <div class="btn btn-light btn-sm">
                <a href="{{ $url = url()->previous() }}" >戻る</a>
            </div>
        @endif

    </div>
@endsection