@extends('layouts.app')

@section('content')
    <main>
        <div class="before_login_top">
            <div class="before_login_left">
                <h1 class="before_login_title">
                    肉が食いたい...
                </h1>
                <p class="before_login_text">
                    MeetMeat　ー肉に出会うー<br>
                    あなたの欲望通りの肉を提供します
                </p>
            </div>
            <img class="d-block mx-auto w-50 float-right" src="{{ asset('/meet_images/meat_main.jpg') }}" alt="">
        </div>
        <div class="container mt-5 text-center">
            <span class="before_login_subtitle">高級肉専門 ショッピングサイト</span>
        </div>

        <div class="login-link row justify-content-center mt-5">
            <div class="col-3 text-center">
                <h4>まだアカウントを<br>お持ちでない方はこちら</h4>
                <div class="mt-5">
                {!! link_to_route('signup', '新規登録', [], ['class' => 'btn btn-border']) !!}
                </div>
            </div>
            <div class="col-3 text-center">
                <h4>すでにアカウントを<br>お持ちの方はこちら</h4>
                <div class="mt-5">
                {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-border']) !!}
                </div>
            </div>
        </div>
    </main>
@endsection