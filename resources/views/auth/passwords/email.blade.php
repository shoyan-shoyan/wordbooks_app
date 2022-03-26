@extends('layouts.app')
@section('content')
<div class="d-flex align-items-center passreset bg-primary text-white">
  <div class="container">
    <h2 class="mb-4 text-center">パスワード再設定</h2>
    <div class="text-center col-sm-6 offset-sm-3">
      @if (session('status'))
        <div class="card-text alert alert-success">
          {{ session('status') }}
        </div>
      @endif  
        <form method="POST" action="{{ route('password.email') }}">
          @csrf
          <div class="md-form mb-3">
            <input class="form-control" type="text" id="email" name="email" placeholder="メールアドレス" required>
          </div>
          <div>
            <button class="btn btn-dark btn-xl" type="submit">メール送信</button>
          </div>
        </form>
    </div>
  </div>
</div>
@endsection
