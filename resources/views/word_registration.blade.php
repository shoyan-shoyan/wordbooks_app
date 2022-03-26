@extends('layouts.app')

@section('content')
<p class="h1 text-center mb-3">単語登録</p>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-8">
                {!! Form::open(['route' => 'words.store']) !!}
                <div class="form-group">
                    <div class="my-2">
                        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2', 'placeholder'=>'単語(問題)を入力してください']) !!}
                    </div>
                    <div class="my-2">
                        {!! Form::textarea('answer', null, ['class' => 'form-control', 'rows' => '2', 'placeholder'=>'解答を入力してください']) !!}
                    </div>
                    {!! Form::hidden('wordbook_id', $wordbook_id) !!}
                    {!! Form::submit('単語登録', ['class' => 'btn_gen btn btn-dark btn-sm mt-2']) !!}
                    {!! Form::close() !!}
                    </div>      

                {{-- 他の単語一覧 --}}
                <!-- <div class="container"> -->
                    <div class="row d-flex justify-content-between">
                        @foreach ($words as $word)
                        <div class="col-8">
                            <div class="card mb-3">
                                <li class="list-unstyled">
                                    <div class="media-body">
                                        <div>
                                            {{-- 投稿内容 --}}
                                            <div class="card-body py-1 word-q ">
                                                <p class="mb-0 text-break">{!! nl2br(e($word->content)) !!}</p>
                                            </div>
                                            <div class="card-body py-1 word-a">
                                                <p class="my-0 text-break">{!! nl2br(e($word->answer)) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>

                        <div class="col">
                            {{-- 単語削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['words.destroy', $word->id], 'method' => 'delete']) !!}
                                {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </div>                
                        @endforeach
                    </div>

                {{ $words->links() }}

                {{-- 戻るボタン --}}
                @if (
                    strpos($url = $url = url()->previous(), '/wordbooks/create') !== false 
                    or
                    strpos($url = $url = url()->previous(), '/words/create') !== false 
                )
                    <div class="btn btn-light btn-sm mt-2">
                        {!! link_to_route('top','TOPへ戻る',[],['class'=>'text-decoration-none']) !!}
                    </div>
                @else
                    <div class="btn btn-light btn-sm mt-2">
                        <a class="text-decoration-none" href="{{ $url = url()->previous() }}" >戻る</a>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
@endsection