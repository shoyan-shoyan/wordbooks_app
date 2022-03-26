@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col col-lg-3">
        <div class="card bg-light mb-3">
          <div class="card-body">
            <h2 class="h1 text-center card-title m-0">{{ $tag->hashtag }}</h2>
            <div class="card-text text-right">
              {{ $tag->wordbooks->count() }}件
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1">
      </div>
      <div class="col">
        <?php $num = 0 ?>
        @foreach($tag->wordbooks as $wordbook)
          <?php $num++ ?>
          @include('wordbooks.card')
        @endforeach
      </div>
    </div>
  </div>
@endsection