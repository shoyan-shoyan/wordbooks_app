<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body">
        <img src="{{$img_name}}" width="200" height="200">
        <!-- 自己紹介文の表示 -->
        <div>
            {{ $user -> self_introduction }}
        </div>
    </div>
    @if (Auth::id() == $user->id)
    <div class="card-footer">
        {!! link_to_route('users.edit', '情報を編集', ['user' => $user->id],['class'=>'btn btn-outline-dark btn-sm fas fa-edit fa-2x']) !!}
    </div>
    @endif
</div>
{{-- フォロー／アンフォローボタン --}}
@include('user_follow.follow_button')