@extends('layouts.app')
@section('content')
  <div class="d-flex align-items-center passreset bg-primary text-white">
    <div class="container">
      <div class="row">
        <h2 class="mb-4 text-center">新しいパスワードを設定</h2>
        <div class="text-center col-sm-6 offset-sm-3">

          <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="email" value="{{ $email }}">
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="md-form mb-2">
              <label for="password">新しいパスワード</label>
              <input class="form-control" type="password" id="password" name="password" required>
            </div>

            <div class="md-form mb-2">
              <label for="password_confirmation">新しいパスワード(再入力)</label>
              <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <div>
              <button class="btn btn-dark btn-xl" type="submit">送信</button> 
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection