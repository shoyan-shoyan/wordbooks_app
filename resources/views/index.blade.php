@extends('layouts.app')

@section('content')

    <div class="container">
    　<p class="h1 text-center">Home</p>

        <div class="card bg-white mb-3">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="my-1">
                        @if(empty($user->img_name))
                            <img src="/storage/images/user_image.PNG" class="img-thumbnail" width="70" height="70">
                        @else 
                            <img src="/storage/images/{{$user->img_name}}" class="img-thumbnail" width="70" height="70">
                        @endif
                    </div>
                    <div>
                        <div class="align-self-baseline mx-2">
                            ようこそ、{{ Auth::user()->name }}さん
                        </div>
                    

                        <div class="d-flex flex-row">
                            <a href="{{ route('wordbooks.create') }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i> 新規作成</a>
                            <a href="/all" class="btn btn-outline-dark btn-sm"><i class="far fa-folder-open"></i> 全単語帳</a>
                        </div>
            
                    </div>
                </div>
            </div>
        </div>
                @foreach ($wordbooks as $wordbook)
                    @include('wordbooks.card')
                @endforeach

    </div>
@endsection