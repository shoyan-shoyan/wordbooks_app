@extends('layouts.app')

@section('content')

    <div class="container">
                
        @foreach ($wordbooks as $wordbook)
            <li class="media mb-3">
                <div class="media-body">
                    <div class="card bg-light" style="width:300px;">
                        <div class="card-body">
                            {{-- 投稿内容 --}}

                                {!! nl2br(e($wordbook->bookname)) !!}
                                <p class="card-text small my-0">作成者：{!! link_to_route('users.show', $wordbook->user->name, ['user' => $wordbook->user->id]) !!}</p>
                                <p class="card-text small mt-0">posted at {{ $wordbook->created_at }}</p>
                                {!! link_to_route('word.index', '単語一覧へ', ['id' => $wordbook->id],['class'=>'btn btn-primary btn-sm mr-1']) !!}
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </div>
@endsection