<header class="mb-4">
    <nav class="navbar navbar-dark bg-dark">
      <a href="{{ url('/') }}" class="navbar-brand">単語帳アプリ(仮)</a>
				<div class="btn-group">
						<button 
							type="button" 
							class="btn btn-light dropdown-toggle" 
							data-toggle="dropdown" 
							aria-expanded="false"
						>
							メニュー
							<!-- <span class="caret"></span> -->
						</button>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							<li><a class="dropdown-item" href="{{ route('users.index') }}">ユーザ一覧</a></li>
							<li><a class="dropdown-item" href="{{ route('users.show', ['user' => Auth::id()]) }}">マイプロフィール</a></li>
							<li><a class="dropdown-item" href="{{ route('logout.get') }}">ログアウト</a></li>
						</ul>
				</div>
    </nav>

		
</header>
