<ul class="list-group list-group-flush">
    <li class="list-group-item">
        <div class="card bg-light">
            <div class="card-body">
                <h4 class="card-title"><i class="far fa-file-alt fa-fw"></i> {!! nl2br(e($wordbook->bookname)) !!}</h4>
                <p class="card-text small my-0">作成者：{!! link_to_route('users.show', $wordbook->user->name, ['user' => $wordbook->user->id]) !!}</p>
                <p class="card-text small my-0">posted at {{ $wordbook->created_at }}</p>
                <p class="card-text small mt-0">単語数： {{ $count = \App\Word::where('wordbook_id', $wordbook->id)->count() }}</p>

                  <div class="btn-toolbar">
                      @if ($exists = \App\Word::where('wordbook_id', $wordbook->id)->exists())
                          {!! link_to_route('learning.index', '学習へ', ['id' => $wordbook->id],['class'=>'btn btn-primary btn-sm mr-1']) !!}
                      @endif

                      
                    {{-- 単語帳詳細ボタン--}}
                    {!! link_to_route('wordbooks.show', '詳細へ', ['wordbook' => $wordbook->id],['class'=>'btn btn-primary btn-sm mr-1']) !!}


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
    </li>
</ul>