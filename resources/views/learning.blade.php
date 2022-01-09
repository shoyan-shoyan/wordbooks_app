@extends('layouts.app')

@section('content')
    
    <div class="container">
        @if(empty($message))
        <p class="h1 text-center">{{ $count - $quizu_index }}問目</p>
            <div>
                <div class="card tborder border-dark mt-3 mb-3">
                    <div class="card-body">
                        <h1 class="text-center">{{ $mondai }}</h1>
                    </div>
                </div>
                <div class="my-2">
                    <button type="button" class="btn btn-dark btn-lg btn-block py-1" id="answerButton" onclick="OnButtonClick();">解答</button>
                    <h3 class="text-center border rounded  py-1" id="answerText" style="display:none;">{{ $answer }}</h3>
                </div>
                
                {{-- 次へボタン --}}

                <div class="row d-flex justify-content-between">
                    <div>
                        {!! link_to_route('learning.next','次へ',['id' => $id,  'count' => $count, 'quizu_index' => $quizu_index],['class'=>'btn btn-outline-dark btn-sm ']) !!}
                    </div>
                    {{-- ランダム出題ボタン --}}
                    <div>
                        {!! link_to_route('learning.index', 'ランダムで出題', ['id' => $id, 'question' => 'rand'],['class'=>'btn btn-outline-dark btn-sm']) !!}
                        </div>  
                        <div>
                         {{-- 戻るボタン --}}
                        {!! link_to_route('top','TOPへ戻る',[],['class'=>'btn btn-light btn-sm ']) !!}
                    </div>
                </div>
            </div>
        @else
            <div>
                <h5>{{ $message }}</h5>
                <div>
                        {!! link_to_route('learning.index', '最初から学習', ['id' => $id],['class'=>'btn btn-dark btn-sm mr-1']) !!}
                        {!! link_to_route('top','TOPへ戻る',[],['class'=>'btn btn-light btn-sm ']) !!}
                </div>
            </div>
        @endif
    </div>
    <script src="{{ asset('/js/answer.js') }}"></script>


@endsection

