@extends('layouts.app')

@section('content')

    <div class="container">
        @include('wordbooks.card_show')

    {{-- 戻るボタン --}}
        <div class="btn btn-light btn-sm">
            <a href="{{ $url = url()->previous() }}" >戻る</a>
        </div>
    </div>
@endsection