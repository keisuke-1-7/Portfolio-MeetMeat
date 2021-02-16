@extends('layouts.app')

@section('content')
    <main>
        <div class="before_login_top">
            <div class="before_login_left">
                <h1 class="before_login_title">
                    肉が食いたい...
                </h1>
                <p class="before_login_text">
                    MeetMeat　ー肉と出会うー<br>
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

        <div class="before_login_concept w-25">
            Concept
        </div>

        <div class="container justify-content-center" >
            <div class="row mt-5 mb-5">
                <div class="col-md-6">
                    <div class="">
                        <img class="home_logo" src="{{ asset('/meet_images/meet_logo.png') }}" alt="">
                    </div>    
                </div>
                <div class="col-md-6">
                    <div class="home-right col-md-12">
                        <h2 class="mt-5">コロナ渦での<br><br>生産者と消費者をつなぐ</h2>
                    </div>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-md-6">
                        <img class="before_login_photo" src="{{ asset('/meet_images/meat_1.jpg') }}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="home-right col-md-12">
                        <h3>高級肉の行き先</h3>
                        <h5 class="mt-5 before_login_concept_text">
                            飲食店に卸すことができない生産者を救いたい。
                            現在、高級肉の行き先がなく、給食場にA5ランクの牛肉が回っています。
                            これは明らかなニーズの不一致です。
                            まず高級肉の行き先を確保しつつ、できる限り適正価格で販売できれば生産者を救えるのではと考えました。
                        </h5>
                    </div>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-md-6">
                    <div class="home-right col-md-12">
                        <h3>コロナ渦での消費者の鬱憤</h3>
                        <h5 class="mt-5 before_login_concept_text">
                            生産者を救いたい反面、世の人たちは身動きが取れずに鬱憤が溜まっていると考えました。
                            そんな消費者たちが「少しくらいは家で贅沢したい」という欲求を満たせるサイトを目指します。
                            <br>MeetMeatはそんな「苦しい生産者」と「贅沢したい消費者」のニーズがマッチするようなショッピングサイトです。
                        </h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="before_login_photo" src="{{ asset('/meet_images/meat_2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </main>
@endsection