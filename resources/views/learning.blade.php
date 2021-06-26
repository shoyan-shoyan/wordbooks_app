@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="p-3 mb-2 bg-secondary text-white">
            <h1 class="text-center">単語帳アプリ（仮）</h1>
        </div>
    </div>

        <div>
            ユーザ名:{{ Auth::user()->name }}
        </div>
        
        @php
            $words = explode(",", $value);
            $content = $words[0];
            $answer = $words[1];
            echo $content;
            echo $answer;
        @endphp
        

        
    {{-- 次へボタン --}}
    <div class="btn btn-light btn-sm">
         {!! link_to_route('learning.next','次へ',['id' => $id, 'num' => $num] ) !!}
    </div>

@endsection