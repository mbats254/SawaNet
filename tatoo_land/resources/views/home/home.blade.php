@extends('home.app')
@section('home')
    <div class="border rounded p-3 mb-2 bg-white">
        <div class="mb-4">
            <a href="{{ url('home/apply/merchant') }}" class="btn btn-info">Sell on {{ env('APP_NAME') }}</a>
            {{-- @if(!provider())
                <a href="{{ url('home/apply/provider') }}" class="btn btn-outline-dark">
                    Become A Service Provider
                </a>
            @endif --}}
            @auth
                {{-- <a href="{{ url('profile') }}" class="btn btn-outline-info float-right">My Account</a> --}}
            @else
                <a href="{{ url('login') }}" class="btn btn-outline-dark float-right">Login</a>
            @endauth
        </div>
        <hr style="border-top: 1px dotted #ddd">
        <all-categories></all-categories>
    </div>

    <products type="all"></products>
@endsection
