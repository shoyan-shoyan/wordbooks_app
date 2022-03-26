@extends('layouts.app')

@section('content')

    <div class="container">
        <p class="h1 text-center mb-3">詳細</p>
        @include('wordbooks.card_show')

    {{-- 戻るボタン --}}
        <div class="btn btn-light btn-sm">
            <a class="text-decoration-none" href="{{ $url = url()->previous() }}" >戻る</a>
        </div>
    </div>
    
@endsection