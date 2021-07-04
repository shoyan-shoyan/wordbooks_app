@extends('layouts.app')

@section('content')
    
    <div class="container">
        
        <div>
            <label>{{ $count - $quizu_index }}問目</label>
            <div class="card bg-light">
                <div class="card-body">
                    <h1 class="text-center">{{ $mondai }}</h1>
                </div>
            </div>
            <div class="my-2">
                <input type="button" class="btn btn-primary btn-lg btn-block py-1" id="answerButton" value="解答" onclick="OnButtonClick();">
                <h3 class="text-center border rounded  py-1" id="answerText" style="display:none;">{{ $answer }}</h3>
            </div>
            
            {{-- 次へボタン --}}
            <div>
                 {!! link_to_route('learning.next','次へ',['id' => $id,  'count' => $count, 'quizu_index' => $quizu_index],['class'=>'btn btn-light btn-sm btn-block']) !!}
            </div>
        </div>
        
        {{-- 戻るボタン --}}
        <div class="text-right">
            <div class="btn btn-light btn-sm mt-2">
                {!! link_to_route('top','TOPへ戻る') !!}
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/answer.js') }}"></script>


@endsection

