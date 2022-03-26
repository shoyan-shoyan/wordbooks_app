<!-- Navigation-->
<a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <!-- パスワードリセット画面 -->
        @if(Request::routeIs('password.request') || Request::routeIs('signup.get'))
            <li class="sidebar-brand"><a href="{{ url('/') }}">タンシェル</a></li>
        @else
            <li class="sidebar-brand"><a href="#page-top">タンシェル</a></li>
            <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
            <li class="sidebar-nav-item"><a href="#about">About</a></li>
            <li class="sidebar-nav-item"><a href="#services">Services</a></li>
            <li class="sidebar-nav-item"><a href="#login">Login</a></li>
        @endif
    </ul>
</nav>