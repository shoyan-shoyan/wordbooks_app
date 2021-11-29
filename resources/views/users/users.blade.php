@if (count($users) > 0)
    <ul class="list-unstyled">
        @foreach ($users as $user)
        <div class="card bg-white mb-3">
            <div class="card-body">
                <li class="media">
                        <div class="my-1">
                            @if(empty($user->img_name))
                                <img src="/storage/images/user_image.PNG" class="img-thumbnail" width="70" height="70">
                            @else 
                                <img src="/storage/images/{{$user->img_name}}" class="img-thumbnail" width="70" height="70">
                            @endif
                        </div>
                        <div class="ml-1">
                            <div>
                                {{ $user->name }}
                            </div>
                            <div>
                                {{-- ユーザ詳細ページへのリンク --}}
                                <p>{!! link_to_route('users.show', 'プロフィールへ', ['user' => $user->id]) !!}</p>
                            </div>
                        </div>
                </li>
            </div>
        </div>
        @endforeach
    </ul>
@endif
