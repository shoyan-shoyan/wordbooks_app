@extends('layouts.app')

@section('content')
    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1">タンシェル</h1>
            <h3 class="mb-5"><em>単語を作ってシェアする</em></h3>
            <div><a class="btn btn-primary btn-xl mb-2" href="#about">詳細はこちら</a></div>
            <div><a class="btn btn-primary btn-xl" href="#login">ログインする</a></div>
        </div>
    </header>
    <!-- About-->
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2>タンシェルは、</h2><h2>無料で利用できる暗記学習支援サービスです。</h2>
                    <p class="lead mb-1">
                        タンシェルでは、オリジナルの単語帳（暗記ノート）がパソコンやスマートフォンから作成できます。
                    </p>
                    <p class="lead mb-5">そして、作成した単語帳は他人と共有することができます。
                    </p>
                    <a class="btn btn-dark btn-xl" href="#services">サービス内容</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="content-section bg-primary text-white text-center" id="services">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h3 class="text-secondary mb-0">Services</h3>
                <h2 class="mb-5">What We Offer</h2>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-book-open"></i></span>
                    <h4><strong>Making</strong></h4>
                    <p class="text-faded mb-0">暗記学習したい単語や用語が入った単語帳を好きなように作成できます。</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-pencil"></i></span>
                    <h4><strong>Study</strong></h4>
                    <p class="text-faded mb-0">作成した単語帳はいつでも好きなときにパソコン、スマートフォンから学習できます。</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-share"></i></span>
                    <h4><strong>Share</strong></h4>
                    <p class="text-faded mb-0">作成した単語帳は他人とシェアできます。他人が作った単語帳を学習することができます。</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-diamond"></i></span>
                    <h4><strong>Charge</strong></h4>
                    <p class="text-faded mb-0">サービスはすべて無料で利用できます。</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Callout-->
    <section class="callout">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mx-auto mb-1">
                始めるには
            </h2>
            <h2 class="mx-auto mb-1">
                アカウントを
            </h2>
            <h2 class="mx-auto mb-5">
                作成しましょう！
            </h2>
            <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/theme/stylish-portfolio/">作成</a>
        </div>
    </section>
    <!-- Call to Action-->
    <section class="content-section bg-primary text-white" id="login">
        <!-- <div class="container px-4 px-lg-5 text-center"> -->
            <h2 class="mb-4 text-center">ログイン</h2>
            <!-- <a class="btn btn-xl btn-light me-4" href="#!">Click Me!</a> -->
            <!-- <a class="btn btn-xl btn-dark" href="#!">Look at Me!</a> -->
        <!-- </div> -->



        <div class="container">
            <!-- <div class="login card light mt-5"> -->
                <!-- <div class="card-body row"> -->
                    <div class="text-center col-sm-6 offset-sm-3">
                        {!! Form::open(['route' => 'login.post']) !!}
                        <form method="" action="">
                            <div class="form-group"> 
                                {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'Email']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::password('password', ['class' => 'form-control','placeholder'=>'password']) !!}
                            </div>
                            <div>
                                {!! Form::submit('ログイン', ['class' => 'btn btn-dark btn-xl']) !!}
                            </div>
                        {!! Form::close() !!}
                        </form>
                        <!-- <div> -->
                            <!-- <a href="" class="mt-2 text-center font-small text-white">パスワードを忘れた方</a> -->
                            <!-- <p class="mt-2 text-center font-small ">パスワードを忘れた方 <a href="" class="text-dark">こちらから</a></p> -->
                        <!-- </div> -->
                    </div>
                <!-- </div> -->
            <!-- </div> -->
            <!-- {{-- ユーザ登録ページへのリンク --}} -->

            <!-- <p class="mt-2 text-muted text-center font-small">新規会員登録は{!! link_to_route('signup.get', 'こちらから', null, ['class' => 'text-dark']) !!}</p> -->
                                            <p class="mt-2 text-center font-small ">パスワードを忘れた方 <a href="{{ route('password.request') }}" class="text-dark">こちらから</a></p>
            <p class="mt-2 text-center font-small ">新規会員登録は {!! link_to_route('signup.get', 'こちらから', null, ['class' => 'text-dark']) !!}</p>
        </div>
    </section>



    <!-- <div class="container">
        <div class="login card light mt-5">    
            <div class="card-body row">
                <div class="text-center col-sm-6 offset-sm-3">
        
                    {!! Form::open(['route' => 'login.post']) !!}
                        <div class="form-group ">

                            {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'Email']) !!}
                        </div>
        
                        <div class="form-group">

                            {!! Form::password('password', ['class' => 'form-control','placeholder'=>'password']) !!}
                        </div> -->
                        <!-- <div class="d-grid gap-2 col-6 mx-auto"> -->
                        <!-- <div >
                            {!! Form::submit('ログイン', ['class' => 'btn btn-dark btn-block btn-sm']) !!}
                        </div>

                    {!! Form::close() !!}

                    <div>
                        <a href="{{ route('password.request') }}" class="card-text">パスワードを忘れた方</a>
                    </div>
                </div>
            </div>
        </div> -->

    
        {{-- ユーザ登録ページへのリンク --}}
        <!-- <p class="mt-2 text-muted text-center font-small">新規会員登録は {!! link_to_route('signup.get', 'こちらから', null, ['class' => 'text-dark']) !!}</p>
    </div> -->
@endsection

