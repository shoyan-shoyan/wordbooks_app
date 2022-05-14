@extends('layouts.app')
@section('content')
    <div class="container">
        @if(empty($message))
            <p class="h1 text-center mb-3">{{ $count - $quizu_index }}問目</p>
            <div>
                <div class="card tborder border-dark mt-3 mb-3">
                    <div class="card-body">
                        <h1 class="text-center">{!! nl2br(htmlspecialchars($mondai)) !!}</h1>
                    </div>
                </div>                
                <div class="my-2 mb-3">
                    <slider 
                        v-bind:answer-text='@json( htmlspecialchars($answer)  )'
                        next-quiz="{{ route('learning.next', ['id' => $id,  'count' => $count, 'quizu_index' => $quizu_index]) }}"       
                        >
                    </slider>
                </div>
                {{-- 次へボタン --}}

                    <div class=" d-flex justify-content-between">
                        <div>
                            {!! link_to_route('learning.next','次へ',['id' => $id,  'count' => $count, 'quizu_index' => $quizu_index],['class'=>'btn_gen btn btn-dark btn-sm mt-2']) !!}
                        </div>
                        {{-- ランダム出題ボタン --}}
                        <div>
                            {!! link_to_route('learning.index', 'ランダムで出題', ['id' => $id, 'question' => 'rand'],['class'=>'btn_gen btn btn-dark btn-sm mt-2']) !!}
                        </div>  
                        <div>
                            {{-- 戻るボタン --}}
                            {!! link_to_route('top','TOPへ戻る',[],['class'=>'btn btn-light btn-sm text-decoration-none']) !!}
                        </div>
                    </div>

            </div>
        @else
            <div>
                <div class="mb-3">
                    <h3>{{ $message }}</h3>
                </div>
                <div class=" d-flex ">
                        {!! link_to_route('learning.index', '最初から学習', ['id' => $id],['class'=>'btn_gen btn btn-dark btn-sm mr-1']) !!}
                        {!! link_to_route('top','TOPへ戻る',[],['class'=>'btn btn-light btn-sm ']) !!}
                </div>
            </div>
        @endif
    </div>



@endsection

