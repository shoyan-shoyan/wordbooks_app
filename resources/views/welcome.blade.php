@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center m-2">
                <img src="{{ asset('/images/logo.png') }}" alt="ロゴ" class="img-fluid">
        </div>
        
        
        <div class="login card bg-light">

        
            <div class="card-body row">
                <div class="col-sm-5 offset-sm-3">
        
                    {!! Form::open(['route' => 'login.post']) !!}
                        <div class="form-group">
                          {{--  {!! Form::label('email', 'Email') !!} --}}
                            {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'Email']) !!}
                        </div>
        
                        <div class="form-group">
                            {{-- {!! Form::label('password', 'Password') !!} --}}
                            {!! Form::password('password', ['class' => 'form-control','placeholder'=>'password']) !!}
                        </div>
        
                        {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    
        {{-- ユーザ登録ページへのリンク --}}
        <p class="mt-2">新規会員登録は {!! link_to_route('signup.get', 'こちらから') !!}</p>
    </div>
@endsection