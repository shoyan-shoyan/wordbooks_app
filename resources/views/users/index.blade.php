@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h1 text-center">Users</p>


        {{-- ユーザ一覧 --}}
        @include('users.users')
        {!! link_to_route('top','TOPへ戻る', [], ['class' => 'btn btn-light btn-sm px-3']) !!}
</div>
@endsection