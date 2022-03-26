
<ul class="nav nav-tabs nav-justified mb-3">

    {{-- 単語帳一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('users.show', ['user' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.show') ? 'active' : '' }}">
            単語帳
            <div>
                <span class="badge">{{ $user->wordbooks_count }}</span>
            </div>
        </a>
    </li>
    {{-- フォロー一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('users.followings', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.followings') ? 'active' : '' }}">
            フォロー
            <div>
                <span class="badge">{{ $user->followings_count }}</span>
            </div>
        </a>
    </li>
    {{-- フォロワー一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('users.followers', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.followers') ? 'active' : '' }}">
            フォロワー
            <div>
                <span class="badge">{{ $user->followers_count }}</span>
            </div>
        </a>
    </li>
</ul>
