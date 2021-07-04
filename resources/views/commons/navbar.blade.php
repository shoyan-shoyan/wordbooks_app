<header class="mb-4">
    <nav class="navbar navbar-dark bg-dark">
      <a href="{{ url('/') }}" class="navbar-brand">単語帳アプリ(仮)</a>
          <div class="btn-group">
        	<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        		メニュー
        		<span class="caret"></span>
        	</button>
        	<ul class="dropdown-menu dropdown-menu-right" role="menu">
        		<a class="dropdown-item" href="#">{!! link_to_route('users.index', 'ユーザ一覧') !!}</a>
        		<a class="dropdown-item" href="#">{!! link_to_route('users.followings', 'マイプロフィール', ['id' => Auth::id()]) !!}</a>
                <a class="dropdown-item" href="#">{!! link_to_route('logout.get', 'ログアウト') !!}</a>
        	</ul>

    </div>
    </nav>
</header>