@extends('layouts.app')

@section('content')

    <div class="container">
      <p class="h1 text-center">Search</p>
      
        <!--↓↓ 検索フォーム ↓↓-->
        <div class="mb-2">
            <form class="row d-flex justify-content-center align-items-center" action="{{url('/all')}}">
              <div class="form-group mb-0">
                <input type="text" name="keyword" value="{{$keyword}}" class="form-control" placeholder="単語帳の名前">
              </div>
              <input type="submit" value="検索" class="btn btn-dark btn-sm mr-1">
            </form>
        </div>
        
        @foreach ($wordbooks as $wordbook)
            @include('wordbooks.card')
        @endforeach
    </div>
@endsection