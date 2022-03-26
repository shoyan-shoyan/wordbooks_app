@extends('layouts.app')

@section('content')
<p class="h1 text-center mb-3">Search</p>
    <div class="container">        
      <div class="row">
        <div class="col-lg-3">
          <!--↓↓ 検索フォーム ↓↓-->
          <div class="mb-2">
              <form name="a_form" class="row d-flex justify-content-center align-items-center" action="{{url('/all')}}">
                <div class="form-group mb-2">
                  <input type="text" name="keyword" value="{{$keyword}}" class="form-control" placeholder="単語帳の名前">
                  </div>
                <!-- <input type="submit" value="検索" class="btn btn-dark btn-sm mr-1"> -->
                <div>
                <a href="#" class="btn_03 btn-sm mr-1" onclick="document.a_form.submit();"><i class="fa fa-search m-2"></i>検索</a>
                </div>  

              </form>
          </div>
        </div>
        <div class="col-lg-1">
                </div>
        <div class="col">
          <?php $num = 0 ?>
          @foreach ($wordbooks as $wordbook)
              <?php $num++ ?>
              @include('wordbooks.card',['num' => $num])
          @endforeach

          {{ $wordbooks->links() }}
        </div>
      </div>
    </div>
@endsection