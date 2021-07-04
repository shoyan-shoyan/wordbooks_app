@extends('layouts.app')

@section('content')

    <div class="container">

        @foreach ($words as $word)
        <div class="card">
            <li class="media">
                <div class="media-body">
                    <div>
                        {{-- 投稿内容 --}}
                        <div class="card-body bg-light py-1">
                            <p class="mb-0">{!! nl2br(e($word->content)) !!}</p>
                        </div>
                        <div class="card-body py-1">
                            <p class="my-0">{!! nl2br(e($word->answer)) !!}</p>
                        </div>
                    </div>
                </div>
            </li>
        </div>
        @endforeach
    </div>
@endsection