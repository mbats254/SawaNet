@extends('layouts.home')
@section('content')
    <div class="container wrapper">
        <view-product product_id="{{ $product_id }}"></view-product>

        <similar-products product_id="{{ $product_id }}"></similar-products>
    </div>
@endsection
