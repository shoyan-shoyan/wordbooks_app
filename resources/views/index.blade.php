@extends('layouts.app')

@section('content')
    <p class="h1 text-center mb-3">Home</p>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="mb-3">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="my-1">
                                @if(empty($user->img_name))
                                    <!-- <img src="/storage/images/user_image.PNG" class="img-thumbnail" width="70" height="70"> -->
                                    <img src="{{ asset('/images/user_image.PNG') }}" class="img-thumbnail" width="70" height="70">
                                @else 
                                    <!-- <img src="/storage/images/{{$user->img_name}}" class="img-thumbnail" width="70" height="70"> -->
                                    <img src="data:image/png;base64,<?= $user->img_name ?>" class="img-thumbnail" width="70" height="70">
                                @endif
                            </div>
                            <div class="align-self-baseline mx-2">
                                ようこそ、{{ Auth::user()->name }}さん
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mb-2">
                        <div class="col mb-1">
                            <!-- Largeサイズ以下でテキスト非表示 -->
                            <a href="{{ route('wordbooks.create') }}" class="btn_03 mb-1"><i class="fas fa-pencil-alt m-2"></i><div class="d-none d-lg-block">新規作成</div></a>
                        </div>
                        <div class="col mb-1">
                            <!-- Largeサイズ以下でテキスト非表示 -->
                            <a href="/all" class="btn_03"><i class="far fa-folder-open m-2"></i> <div class="d-none d-lg-block">全単語帳</div></a>
                        </div>
                    </div>
                </div>

                <div class="d-none d-lg-block">
                    <p class="text-black-50"><small>[新規作成]から単語帳を作成できます。</br>作成した単語帳に単語(問題と解答)を登録することで学習を開始できます。</small></p>
                    <p class="text-black-50"><small>[全単語帳]では他のユーザが作成した単語帳すべてが閲覧できます。</small></p>
                </div>
            </div>
                <div class="col-lg-1">
                </div>
            <div class="col-lg-6">
                    <?php $num = 0 ?>
                    @foreach ($wordbooks as $wordbook)
                        <?php $num++ ?>
                        @include('wordbooks.card',['num' => $num])
                    @endforeach

                    {{ $wordbooks->links() }}
            </div>
        </div>
    </div>
@endsection