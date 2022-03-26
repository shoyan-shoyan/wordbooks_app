<!-- Navigation-->
<a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"><a href="{{ url('/') }}">タンシェル</a></li>
        <li class="sidebar-nav-item"><a href="{{ route('users.index') }}">ユーザ一覧</a></li>
        <li class="sidebar-nav-item"><a href="{{ route('users.show', ['user' => Auth::id()]) }}">マイプロフィール</a></li>
        <li class="sidebar-nav-item"><a href="{{ route('wordbooks.favorite') }}">お気に入り</a></li>
        <li class="sidebar-nav-item"><a href="{{ route('logout.get') }}">ログアウト</a></li>
    </ul>
</nav>
