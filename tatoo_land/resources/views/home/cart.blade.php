@extends('layouts.home')
@section('content')
    <div class="container wrapper">
        @guest
            <div class="alert alert-warning">
                Please <a href="{{ url("login") }}">login</a> or
                <a href="{{ url('register') }}">register</a> to checkout
            </div>
        @endguest

        <shopping-cart auth="{{ auth()->id() }}"></shopping-cart>
    </div>
@endsection
