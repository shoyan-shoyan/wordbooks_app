<div class="container px-4 px-lg-1">
            <div class="portfolio-item mb-3" href="#!">
                <div class="caption">
                    <div class="caption-content">
                        <div class="row">
                            <div class="h2"><i class="far fa-file-alt fa-fw"></i>{!! nl2br(e($wordbook->bookname)) !!}</div>
                            <div class="col">
                            <p class="mb-0 text-white-50">作成者： {!! link_to_route('users.show', $wordbook->user->name, ['user' => $wordbook->user->id]) !!}</p>
                            <p class="mb-0 text-white-50">単語数： {{ $count = \App\Word::where('wordbook_id', $wordbook->id)->count() }}</p>
                            <p class="text-white-50">posted at {{ $wordbook->created_at }}</p>
                            </div>
                            <div class="col">
                            <div class="btn-toolbar">
                                <!-- ユーザが作成した単語帳, もしくはフォロー対象のみ学習ボタンを表示 -->
                                @if (
                                    $wordbook->user_id == Auth::user()->id 
                                    or
                                    DB::table('user_follow')->where('user_id', Auth::user()->id)->where('follow_id', $wordbook->user_id)->exists()
                                )
                                    @if ($exists = \App\Word::where('wordbook_id', $wordbook->id)->exists())
                                        <div class="mb-1 mr-3">
                                            {!! link_to_route('learning.index', '学習へ', ['id' => $wordbook->id, 'question' => 'fix'],['class'=>'btn_02 text-decoration-none ']) !!}
                                        </div>
                                    @endif
                                @endif
                                
                                {{-- 単語帳詳細ボタン--}}
                                <div class="mb-1">
                                {!! link_to_route('wordbooks.show', '詳細へ', ['wordbook' => $wordbook->id], ['class' => 'btn_02 text-decoration-none']) !!}
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <!-- いいねアイコン表示 -->
                                <div class="col">
                                    <div class="pt-0 pb-2 pl-3">
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
                                <div class="col">
                                    @foreach($wordbook->tags as $tag)
                                        @if($loop->first)
                                            <div class="pt-0 pb-4 pl-3">
                                                <div class="line-height">
                                        @endif
                                            <a href="{{ route('tags.show', ['name' => $tag->name]) }}" class="tag-text border border-white p-1 mr-1 mt-1 text-white">
                                                {{ $tag->hashtag }}
                                            </a>
                                        @if($loop->last)
                                            </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @switch($num % 4)
                        @case(0)
                            <img class="img-fluid" src="{{ asset('/images/img/portfolio-1.jpg') }}" alt="..." />
                            @break
                        @case(1)
                            <img class="img-fluid" src="{{ asset('/images/img/portfolio-2.jpg') }}" alt="..." />
                            @break
                        @case(2)
                            <img class="img-fluid" src="{{ asset('/images/img/portfolio-3.jpg') }}" alt="..." />
                            @break
                        @case(3)
                            <img class="img-fluid" src="{{ asset('/images/img/portfolio-4.jpg') }}" alt="..." />
                            @break
                    @endswitch
            </div>
</div>