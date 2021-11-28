@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="login card light mt-5">
            <div class="text-center">
                    <img src="{{ asset('/images/logo.png') }}" alt="ロゴ" class="img-fluid">
            </div>
        
            <div class="card-body row">
                <div class="text-center col-sm-6 offset-sm-3">
        
                    {!! Form::open(['route' => 'login.post']) !!}
                        <div class="form-group ">

                            {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'Email']) !!}
                        </div>
        
                        <div class="form-group">

                            {!! Form::password('password', ['class' => 'form-control','placeholder'=>'password']) !!}
                        </div>
                        <!-- <div class="d-grid gap-2 col-6 mx-auto"> -->
                        <div >
                            {!! Form::submit('ログイン', ['class' => 'btn btn-dark btn-block btn-sm']) !!}
                        </div>

                    {!! Form::close() !!}

                    <div>
                        <a href="{{ route('password.request') }}" class="card-text">パスワードを忘れた方</a>
                    </div>
                </div>
            </div>
        </div>

    
        {{-- ユーザ登録ページへのリンク --}}
        <p class="mt-2 text-muted text-center font-small">新規会員登録は {!! link_to_route('signup.get', 'こちらから', null, ['class' => 'text-dark']) !!}</p>
    </div>
@endsection

