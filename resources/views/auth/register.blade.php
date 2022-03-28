@extends('layouts.app')
@section('content')

<div class="d-flex align-items-center signup bg-primary text-white">
    <div class="container">
    <h2 class="mb-4 text-center">ユーザー登録</h2>

            <div class="text-center col-sm-6 offset-sm-3">

                    {!! Form::open(['route' => 'signup.post']) !!}
                        <div class="form-group">
                            {{-- {!! Form::label('name', 'Name') !!} --}}
                            {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'ユーザ名']) !!}
                        </div>
        
                        <div class="form-group">
                            {{-- {!! Form::label('email', 'Email') !!} --}}
                            {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'メールアドレス']) !!}
                        </div>
        
                        <div class="form-group">
                            {{-- {!! Form::label('password', 'Password') !!} --}}
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder'=>'パスワード']) !!}
                        </div>
        
                        <div class="form-group">
                            {{-- {!! Form::label('password_confirmation', 'Confirmation') !!} --}}
                            {!! Form::password('password_confirmation', ['class' => 'form-control','placeholder'=>'パスワード確認入力']) !!}
                        </div>
                        <div class="m-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agreementModal">
                            利用規約
                            </button>
                            /
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#privacypolicyModal">
                            プライバシーポリシー
                            </button>
                        </div>
                        <div class="form-check m-3">
                          <input class="form-check-input" type="checkbox" value="" id="acceptchk">
                          <label class="form-check-label" for="acceptchk">
                            利用規約/プライバシーポリシーに同意する
                          </label>
                        </div>

                        <div >
                            {!! Form::submit('登録', ['id' => 'reg_btn','class' => 'btn btn-dark btn-xl', 'disabled']) !!}
                     {!! Form::close() !!}
                            <button type="button" class='btn btn-light btn-sm px-2' onclick="history.back()">戻る</button>
                        </div>
                </div>
            </div>
    </div>




<!-- Modal 利用規約-->
<div class="modal fade" id="agreementModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">利用規約</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @include('auth.agreement.agreement')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal プライバシーポリシー-->
<div class="modal fade" id="privacypolicyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">プライバシーポリシー</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @include('auth.agreement.privacypolicy')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection