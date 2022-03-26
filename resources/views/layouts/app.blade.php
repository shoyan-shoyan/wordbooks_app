<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>タンシェル</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="css/styles.css" rel="stylesheet" /> -->
        <!-- Bootstrap core CSS -->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
        <!-- Material Design Bootstrap -->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles_bootstrap.css') }}">
    </head>
    <body id="page-top">
        @if (Auth::check())
            {{-- ナビゲーションバー --}}
            @include('commons.top_navbar')

            {{-- ナビゲーションバー --}}
            @include('commons.navbar')
        @else
            {{-- ナビゲーション --}}
            @include('commons.welcome_nav')
        @endif
        <main>
            <div id='app'>
                {{-- エラーメッセージ --}}
                @include('commons.error_messages')
                @yield('content')
            </div>
        </main>
        <!-- <footer class="footer"> -->
            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                <!-- © 2021 @sho_yan_osaka -->
            <!-- Copyright -->
        <!-- </footer> -->
        <!-- Footer-->
        <footer class="footer text-center">
            <!-- <div class="container px-4 px-lg-5"> -->
                <!-- <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                </ul> -->
                <div class="d-flex justify-content-center align-items-center">
                <p class="text-muted small mb-0">Copyright &copy; @sho_yan_osaka</p>
                <a class="social-link rounded-circle text-white  text-center m-2" href="https://twitter.com/sho_yan_osaka"><i class="icon-social-twitter"></i></a>
                </div>
            <!-- </div> -->
        </footer>

        <!-- JQuery -->
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        <!-- Bootstrap tooltips -->
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script> -->
        <!-- Bootstrap core JavaScript -->
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
        <!-- MDB core JavaScript -->
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script> -->

        <!-- <script src="{{ asset('/js/answer.js') }}"></script> -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('/js/scripts.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>

        </div>
    </body>
</html>