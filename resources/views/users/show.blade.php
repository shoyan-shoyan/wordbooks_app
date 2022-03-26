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