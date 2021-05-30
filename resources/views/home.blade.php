@extends('layouts.app')

@section('content')
    <main class="container position-absolute" style="top: 50%;left: 50%;transform: translate(-50%, -50%);">
        <div class="" >
            <div class="row">
                <div class="home-left col-md-6 col-sm-12 col-xs-12 text-center">
                    <img class="home_logo col-md-8 col-sm-7 col-xs-5 p-0" src="{{ asset('/meet_images/meet_logo.png') }}" alt="">
                </div>
                <div class="home-right col-md-6 col-sm-12 col-xs-12">
                    <h3>ご利用ありがとうございます</h3>
                    <h3 class="mt-5">今食べたいお肉と出会いましょう</h3>
                    <div class="text-center">
                        {!! link_to_route('show', 'お肉と出会う', [], ['class' => 'btn btn-border home-button']) !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection