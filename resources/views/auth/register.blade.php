@extends('layouts.app')

@section('content')
    <div class="container">
    　<p class="h1 text-center">ユーザー登録</p>
        <div class="card bg-white mb-3">
            <!-- <div class="text-center card-header text-white bg-primary mb-3">
                <h3>ユーザー登録</h3>
            </div> -->
        
            <div class="card-body row">
                <div class="col-sm-6 offset-sm-3 text-center">
        
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
                            {!! Form::submit('登録', ['class' => 'btn btn-dark btn-block btn-sm']) !!}
                     {!! Form::close() !!}
                            <button type="button" class='btn btn-light btn-sm px-3' onclick="history.back()">戻る</button>
                        </div>
                </div>
            </div>
            <!-- <div class="row offset-3 mt-3"> -->

        </div>    
    </div>
@endsection