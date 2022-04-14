@extends('layouts.app')

@section('content')
<p class="h1 text-center mb-3">Users</p>
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <!--↓↓ 検索フォーム ↓↓-->
      <div class="mb-2">
          <form name="a_form" class="row d-flex justify-content-center align-items-center" action="{{url('/users')}}">
            <div class="form-group mb-2">
              <input type="text" name="keyword" value="{{$keyword}}" class="form-control" placeholder="ユーザ検索">
            </div>
            <div>
              <a href="#" class="btn_03 btn-sm mr-1" onclick="document.a_form.submit();"><i class="fa fa-search m-2"></i>検索</a>
            </div>
          </form>
      </div>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col"> 
      {{-- ユーザ一覧 --}}
      @include('users.users')

      {{ $users->links() }}
      
      <div class="btn btn-light btn-sm">
        {!! link_to_route('top','TOPへ戻る', [], ['class' => 'text-decoration-none']) !!}
      </div>
    </div>
  </div>
</div>
@endsection