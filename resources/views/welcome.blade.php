@extends('layouts.app')

@section('content')

        <div class="center jumbotron">
            <div class="text-center">
                <h1>単語帳アプリ（仮）</h1>
                {{-- ユーザ登録ページへのリンク --}}
                 {{-- {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!} --}}
            </div>
        </div>
        
    <div class="text-center">
        <h1>ログイン</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            {{-- ユーザ登録ページへのリンク --}}
            <p class="mt-2">新規会員登録は {!! link_to_route('signup.get', 'こちらから') !!}</p>
        </div>
    </div>

    @if (Auth::check())
        {{ Auth::user()->name }}
        <p>ログイン中</p>
        {!! link_to_route('logout.get', 'ログアウト') !!}
        {!! link_to_route('users.index', 'ユーザー一覧', [], ['class' => 'nav-link']) !!}
        {!! link_to_route('users.show', 'マイプロフィール', ['user' => Auth::id()]) !!}
        
        
        @foreach ($wordbooks as $wordbook)
            <li class="media mb-3">
                <div class="media-body">
                    <div>
                        {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                        {!! link_to_route('users.show', $wordbook->user->name, ['user' => $wordbook->user->id]) !!}
                        <span class="text-muted">posted at {{ $wordbook->created_at }}</span>
                    </div>
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">{!! nl2br(e($wordbook->bookname)) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
        
        
    @else
        <p>ログインしていません</p>
    @endif
@endsection