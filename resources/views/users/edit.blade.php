@extends('layouts.app')

@section('content')

  <div class="container">
    <p class="h1 text-center">自己紹介の編集</p>
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
          {!! Form::submit('更新する', ['class' => 'btn btn-dark btn-sm mt-2']) !!} 
        </div>

        <div>
          {!! link_to_route('users.show', '戻る', ['user' => $user->id],['class' => 'btn btn-light btn-sm px-3']) !!}
        </div>
      </div>
    </div>

    {!! Form::close() !!}



  </div>      

@endsection