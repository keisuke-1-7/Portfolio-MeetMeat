@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <h2>商品情報</h2>
            <div class="row">
                <div class="col-md-6 iteminfo-main">
                    <div class="">
                        <img class="mt-5 ml-3" src="{{ $product->product_image }}" alt="" width="90%" height="auto">
                    </div>
                </div>
                <div class="col-md-6 iteminfo-main">
                    <div class="">
                        <h3>
                            @if(isset($product->product_name))
                                {{ $product->product_name }}
                            @endif
                        </h3>
                        <div class="row">
                            <div class="col-sm mt-5">
                                <div class="iteminfo-text">
                                    <p>商品カテゴリー:　
                                    <span class="iteminfo-text-font">
                                        @if(isset($category_name->category_name))
                                            {{ $category_name->category_name }}
                                        @endif
                                    </span>
                                    </p>
                                    <p>商品説明:</p>
                                    <p class="iteminfo-text-font ml-3">
                                        @if(isset($product->description))
                                            {{ $product->description }}
                                        @endif
                                    </p>
                                    <br>
                                    <p>価格:　
                                    <span class="iteminfo-text-font">
                                        @if(isset($product->price))
                                            {{ $product->price }}
                                        @endif
                                        円
                                    </span>
                                    </p>
                                </div>
                                {!! Form::open(['route' => 'addcart']) !!}

                                {{ Form::hidden('users_id', $user->id) }}

                                {{ Form::hidden('products_id', $product->id) }}

                                <div class="form-group row justify-content-center mt-5">
                                    <label class="col-form-label">購入個数</label>
                                    <div>
                                        <input type="number" class="inputNumber form-control" value="1" name="product_quantity"
                                            id="prodqty">
                                    </div>
                                    <label class="col-form-label">個</label>
                                    <div class="col-sm-auto">
                                        {!! Form::submit('カートへ', ['class' => 'btn btn-primary']) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection