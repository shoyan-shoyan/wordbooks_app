<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body">
        {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
        {{-- <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt=""> --}}
        <img src="/storage/images/{{$img_name}}">
        <!-- 自己紹介文の表示 -->
        <div>
            {{ $user -> self_introduction }}
        </div>
    </div>
    <div class="card-footer">
        {!! link_to_route('users.edit', '情報を編集', ['user' => $user->id],['class'=>'btn btn-primary btn-sm mr-1 fas fa-edit fa-2x']) !!}
    </div>
</div>
{{-- フォロー／アンフォローボタン --}}
@include('user_follow.follow_button')