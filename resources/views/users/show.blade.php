@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
            <div class="text-right mt-2">
                {!! link_to_route('top','TOPへ戻る') !!}
            </div>
        </aside>


        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            
        @foreach ($wordbooks as $wordbook)
            @include('wordbooks.card')
        @endforeach
        {{ $wordbooks->links() }}
        </div>

        
    </div>
@endsection