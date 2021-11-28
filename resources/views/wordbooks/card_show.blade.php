<div class="container">
    <ul class="list-group list-group-flush">

            <div class="card bg-white">
                <div class="card-body">
                    <h4 class="card-title"><i class="far fa-file-alt fa-fw"></i> {!! nl2br(e($wordbook->bookname)) !!}</h4>
                    <p class="card-text small my-0">作成者：{!! link_to_route('users.show', $wordbook->user->name, ['user' => $wordbook->user->id]) !!}</p>
                    <p class="card-text small my-0">posted at {{ $wordbook->created_at }}</p>
                    <p class="card-text small mt-0">単語数： {{ $count = \App\Word::where('wordbook_id', $wordbook->id)->count() }}</p>

                    <div class="btn-toolbar">
                        @if ($exists = \App\Word::where('wordbook_id', $wordbook->id)->exists())
                            {!! link_to_route('learning.index', '学習へ', ['id' => $wordbook->id],['class'=>'btn btn-dark btn-sm mr-1']) !!}
                        @endif

                        
                        @if (Auth::id() == $wordbook->user_id)   
                            {{-- 単語登録ボタン --}}
                            {!! link_to_route('words.create', '単語登録へ', ['id' => $wordbook->id],['class'=>'btn btn-dark btn-sm mr-1']) !!}

                            {{-- 単語帳編集ボタン--}}
                            {!! link_to_route('wordbooks.edit', '単語帳編集', ['wordbook' => $wordbook->id],['class'=>'btn btn-dark btn-sm mr-1']) !!}

                            {{-- 投稿削除ボタンのフォーム --}}
                            {{-- モーダル表示ボタン --}}
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delModal" data-backdrop="false">Delete</button>
                            
                            {{-- モーダル画面 --}}
                            <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">削除確認画面</h4></h4>
                                            </div>
                                            <div class="modal-body">
                                                <label>単語帳を削除しますか？</label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">閉じる</button>
                                                <!-- <button type="button" class="btn btn-danger">削除</button> -->
                                                {!! Form::open(['route' => ['wordbooks.destroy', $wordbook->id], 'method' => 'delete']) !!}
                                                    {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endif
                    </div>
            </div>
            <!-- いいねアイコン表示 -->
            <div class="card-body pt-0 pb-2 pl-3">
                <div class="card-text">
                    <Wordbook-like
                        :initial-is-liked-by='@json($wordbook->isLikedBy(Auth::user()))'
                        :initial-count-likes='@json($wordbook->count_likes)'
                        :authorized='@json(Auth::check())'
                        endpoint="{{ route('wordbook.like', ['wordbook' => $wordbook]) }}"
                    >
                    </Wordbook-like>
                </div>
            </div>
            <!-- タグ表示 -->
            @foreach($wordbook->tags as $tag)
                @if($loop->first)
                    <div class="card-body pt-0 pb-4 pl-3">
                        <div class="card-text line-height">
                @endif
                    <a href="{{ route('tags.show', ['name' => $tag->name]) }}" class="border border-dark p-1 mr-1 mt-1 text-muted">
                        {{ $tag->hashtag }}
                    </a>
                @if($loop->last)
                    </div>
                    </div>
                @endif
            @endforeach

        </div>    

    </ul>
    <div class="m-3">
        <ul class="list-group info">
            <li class="list-group-item list-group-item-dark">単語一覧</li>

                @foreach($wordbook->words as $word)
                    <li class="list-group-item">{{ $word->content }}</li>
                @endforeach
        </ul>
    </div>
</div>