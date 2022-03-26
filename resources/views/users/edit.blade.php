@extends('layouts.app')

@section('content')
<p class="h1 text-center mb-3">プロフィール編集</p>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col col-lg-8">
        {!! Form::open(['route' => ['users.update', $user->id],'method' => 'PATCH','files' => true]) !!}
        <div class="form-group">
          <div>
            {!! Form::textarea('self_introduction', $user->self_introduction, ['class' => 'form-control', 'rows' => '2']) !!} 
          </div>
          <div class="py-3">
            <image-preview>
            </image-preview>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              {!! Form::submit('更新する', ['class' => 'btn_gen btn btn-dark btn-sm mt-2']) !!} 
            </div>
            <div class="btn btn-light btn-sm">
              {!! link_to_route('users.show', '戻る', ['user' => $user->id],['class' => 'text-decoration-none']) !!}
            </div>
          </div>
        </div>
        {!! Form::close() !!}
      </div>  
    </div>  
  </div>      

@endsection