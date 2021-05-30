@extends('layouts.app')

@section('content')

<main>
    <div class="page-header mt-5 text-center">
        <h3>ユーザ情報</h3>
    </div>

    {!! Form::open(['route' => 'user_info']) !!}
    <div class="row mt-5 mb-5">
        <div class="col-sm-6 mx-auto">

            <div class="mb-4">
                <p class="contents user-info-text">ユーザID : {{$user->id}}</p>
            </div>

            <div class="mb-4">
                <p class="contents user-info-text">氏名 : {{$user->last_name}} {{$user->first_name}}</p>
            </div>

            <div class="mb-4">
                <p class="contents user-info-text">郵便番号 : {{$user->zipcode}}</p>
            </div>

            <div class="mb-4">
                <p class="contents user-info-text" id="content-address">
                            住所 : {{$user->prefecture}}{{$user->municipality}}{{$user->address}}{{$user->apartments}}
                        </p>
            </div>

            <div class="mb-4">
                <p class="contents user-info-text">メールアドレス : {{$user->email}}</p>
            </div>

            <div class="mb-4">
                <p class="contents user-info-text">電話番号 : {{$user->phone_number}}</p>
            </div>

            <div class="text-center mt-5">
                {!! link_to_route('user_edit', '修正/退会する', [], ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</main>
@endsection