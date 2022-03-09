@extends('layouts.app')

@section('content')

    <div class="container">
      <p class="h1 text-center">お気に入り</p>
      

        
        @foreach ($wordbooks as $wordbook)
            @include('wordbooks.card')
        @endforeach

        {{ $wordbooks->links() }}
    </div>
@endsection