@extends('layouts.app')

@section('content')

  <div class="container">
    {!! Form::open(['route' => ['users.update', $user->id],'method' => 'PATCH','files' => true]) !!}
    <div class="form-group">
      <div>
      自己紹介文
      {!! Form::textarea('self_introduction', $user->self_introduction, ['class' => 'form-control', 'rows' => '2']) !!} 
      </div>
      <div>
      プロフィール画像選択
      {!! Form::file('img_name') !!}
      </div>
      <div>
      {!! Form::submit('更新する', ['class' => 'btn btn-primary btn-block']) !!} 
      </div>
    </div>

    {!! Form::close() !!}

    <div>
        {!! link_to_route('users.show', '戻る', ['user' => $user->id]) !!}
    </div>

  </div>      

@endsection