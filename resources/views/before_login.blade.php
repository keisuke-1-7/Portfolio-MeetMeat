@extends('layouts.app')

@section('content')
    <main>
        <div class="row before_login_top">
            <div class="before_login_left col-md-6 col-sm-12 col-xs-12">
                <h1 class="before_login_title">
                    肉が食いたい...
                </h1>
                <p class="before_login_text">
                    MeetMeat　ー肉と出会うー<br>
                    あなたの欲望通りの肉を提供します
                </p>
            </div>
            <div class="before_login_right col-md-6 col-sm-12 col-xs-12 text-center">
                <img class="top_meat_image" src="{{ asset('/meet_images/meat_main.jpg') }}" alt="">
            </div>
        </div>
        <div class="container mt-5 text-center">
            <span class="before_login_subtitle">高級肉専門 ショッピングサイト</span>
        </div>

        <div class="login-link row mt-5">
            <div class="login-link-content col-md-6 col-sm-12 col-xs-12 text-center">
                <h4>アカウントをお持ちでない方はこちら</h4>
                <div class="mt-3">
                {!! link_to_route('signup', '新規登録', [], ['class' => 'btn btn-border']) !!}
                </div>
            </div>
            <div class="login-link-content col-md-6 col-sm-12 col-xs-12 text-center ">
                <h4>すでにアカウントをお持ちの方はこちら</h4>
                <div class="mt-3">
                {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-border']) !!}
                </div>
            </div>
        </div>

        <div class="before_login_concept">
            Concept
        </div>

        <div class="container justify-content-center text-center before_login_container" >
            <div class="row before_login_concept_content mt-5">
                <div class="col-md-6 col-sm-12 col-xs-12">
                        <img class="home_logo col-md-8 col-sm-7 col-xs-7 p-0" src="{{ asset('/meet_images/meet_logo.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="home-right col-md-12 col-sm-12 col-xs-12">
                        <h2 class="mt-5">コロナ渦での<br><br>生産者と消費者をつなぐ</h2>
                    </div>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-md-6 col-sm-12 col-xs-12">
                        <img class="before_login_photo mb-5" src="{{ asset('/meet_images/meat_1.jpg') }}" alt="">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="home-right">
                        <h3>高級肉の行き先</h3>
                        <h5 class="mt-5 before_login_concept_text">
                            飲食店に卸すことができない生産者を救いたい。
                            現在、高級肉の行き先がなく、給食場にA5ランクの牛肉が回っています。
                            これは明らかなニーズの不一致です。
                            高級肉の行き先を確保しつつ、できる限り適正価格で販売できれば生産者を救えるのではと考えました。
                        </h5>
                    </div>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="home-right">
                        <h3>コロナ渦での消費者の鬱憤</h3>
                        <h5 class="mt-5 mb-5 before_login_concept_text">
                            生産者を救いたい反面、世の人たちは身動きが取れずに鬱憤が溜まっていると考えました。
                            そんな消費者たちが「少しくらいは家で贅沢したい」という欲求を満たせるサイトを目指します。
                            <br>MeetMeatはそんな「苦しい生産者」と「贅沢したい消費者」のニーズがマッチするようなショッピングサイトです。
                        </h5>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="before_login_photo" src="{{ asset('/meet_images/meat_2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </main>
@endsection