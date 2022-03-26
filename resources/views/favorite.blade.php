@extends('layouts.app')

@section('content')
<p class="h1 text-center mb-3">お気に入り</p>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <?php $num = 0 ?>
                @foreach ($wordbooks as $wordbook)
                    <?php $num++ ?>
                    @include('wordbooks.card')
                @endforeach

                {{ $wordbooks->links() }}
            </div>
        </div>
    </div>
@endsection