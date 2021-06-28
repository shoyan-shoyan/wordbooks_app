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

        <label>【{{ $count - $quizu_index }}問目】</label>
        <br>
        <label>問題ー{{ $mondai }}</label>
        <br>
        <label>答えー{{ $answer }}</label>
        <br>
        

    {{-- 次へボタン --}}
    <div class="btn btn-light btn-sm">
         {!! link_to_route('learning.next','次へ',['id' => $id,  'count' => $count, 'quizu_index' => $quizu_index] ) !!}
    </div>        

    {{-- 戻るボタン --}}
    <div class="btn btn-light btn-sm">
        {!! link_to_route('top','戻る') !!}
    </div>      
@endsection