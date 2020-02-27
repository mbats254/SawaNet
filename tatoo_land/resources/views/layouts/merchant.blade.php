@extends('layouts.app')
@section('navbar')
    <li class="nav-item">
        <a class="nav-link" href="{{ url('home') }}">Home</a>
    </li>
@stop
@section('content')
    @yield('merchant')
@endsection