@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h1 text-center">Users</p>

        <!--↓↓ 検索フォーム ↓↓-->
        <div class="mb-2">
            <form class="row d-flex justify-content-center align-items-center" action="{{url('/users')}}">
              <div class="form-group mb-0">
                <input type="text" name="keyword" value="{{$keyword}}" class="form-control" placeholder="ユーザ検索">
              </div>
              <input type="submit" value="検索" class="btn btn-dark btn-sm mr-1">
            </form>
        </div>

        {{-- ユーザ一覧 --}}
        @include('users.users')
        {{ $users->links() }}
        {!! link_to_route('top','TOPへ戻る', [], ['class' => 'btn btn-light btn-sm px-3 mb-5']) !!}

</div>
@endsection