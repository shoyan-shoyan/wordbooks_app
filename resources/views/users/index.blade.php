@extends('layouts.app')

@section('content')
    {{-- ユーザ一覧 --}}
    @include('users.users')
    {!! link_to_route('top','TOPへ戻る') !!}
@endsection