@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <aside class="col-sm-4">
                {{-- ユーザ情報 --}}
                @include('users.card')
                
                <div class="text-right mt-2">
                    {!! link_to_route('top','TOPへ戻る', [], ['class'=>'text-decoration-none']) !!}
                </div>
            </aside>
            <div class="col-sm-8">
                {{-- タブ --}}
                @include('users.navtabs')
                {{-- ユーザ一覧 --}}
                @include('users.users')
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection