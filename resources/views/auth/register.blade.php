@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-light mt-5">
            <div class="text-center card-header text-white bg-primary mb-3">
                <h3>Sign up</h3>
            </div>
        
            <div class="card-body row">
                <div class="col-sm-6 offset-sm-3">
        
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
        
                        {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                    </div>
                </div>
        </div>
            <div class="row">
                <div class="col-6 offset-3 mt-3">
                    <button type="button" class='btn btn-secondary btn-block' onclick="history.back()">戻る</button>
                </div>
            </div>    
    </div>
@endsection