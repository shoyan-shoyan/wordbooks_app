@extends('layouts.app')
@section('content')
<div class="d-flex align-items-center signup bg-primary text-white">
    <div class="container">
    <h2 class="mb-4 text-center">ユーザー登録</h2>

            <div class="text-center col-sm-6 offset-sm-3">

                    {!! Form::open(['route' => 'signup.post']) !!}
                        <div class="form-group">
                            {{-- {!! Form::label('name', 'Name') !!} --}}
                            {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Name']) !!}
                        </div>
        
                        <div class="form-group">
                            {{-- {!! Form::label('email', 'Email') !!} --}}
                            {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'Email']) !!}
                        </div>
        
                        <div class="form-group">
                            {{-- {!! Form::label('password', 'Password') !!} --}}
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder'=>'Password']) !!}
                        </div>
        
                        <div class="form-group">
                            {{-- {!! Form::label('password_confirmation', 'Confirmation') !!} --}}
                            {!! Form::password('password_confirmation', ['class' => 'form-control','placeholder'=>'Confirmation']) !!}
                        </div>
                        <div >
                            {!! Form::submit('登録', ['class' => 'btn btn-dark btn-xl']) !!}
                     {!! Form::close() !!}
                            <button type="button" class='btn btn-light btn-sm px-2' onclick="history.back()">戻る</button>
                        </div>
                </div>
            </div>
    </div>
@endsection