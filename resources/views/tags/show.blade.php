@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card bg-light mb-3">
      <div class="card-body">
        <h2 class="h4 card-title m-0">{{ $tag->hashtag }}</h2>
        <div class="card-text text-right">
          {{ $tag->wordbooks->count() }}件
        </div>
      </div>
    </div>


  @foreach($tag->wordbooks as $wordbook)
      @include('wordbooks.card')
  @endforeach

  </div>
@endsection