<header class="mb-4">
    <nav class="navbar navbar-dark bg-dark">
      <a href="{{ url('/') }}" class="navbar-brand">タンシェル</a>
			
				<div class="btn-group">
						<a 
							class="nav-link dropdown-toggle white-text" 
							id="navbarDropdownMenuLink-4" 
							data-toggle="dropdown"
          		aria-haspopup="true" 
							aria-expanded="false">

							<i class="fas fa-bars white-text"></i>
						</a>

						<div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
							<a class="dropdown-item" href="{{ route('users.index') }}">ユーザ一覧</a>
							<a class="dropdown-item" href="{{ route('users.show', ['user' => Auth::id()]) }}">マイプロフィール</a>
							<a class="dropdown-item" href="{{ route('logout.get') }}">ログアウト</a>
 		       </div>
				</div>
    </nav>

		
</header>
