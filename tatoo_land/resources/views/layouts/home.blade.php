@extends('layouts.app')
@section('navbar')
    <li class="nav-item @if(request()->is('/', 'home', 'home/dealer*', 'home/apply*', 'home/category*', 'home/cart*', 'docs*')) active @endif">
        <a class="nav-link" href="{{ url('home') }}">Home</a>
    </li>
    <li class="nav-item @if(request()->is('home/product*')) active @endif">
        <a class="nav-link" href="{{ route('all.properties') }}">Properties</a>
    </li>
    <!-- <li class="nav-item @if(request()->is('home/merchants*')) active @endif">
        <a class="nav-link" href="{{ url('home/merchants') }}">Merchants</a>
    </li> -->
    <!-- <li class="nav-item @if(request()->is('home/providers*')) active @endif">
        <a class="nav-link" href="{{ url('home/providers') }}">Workers</a>
    </li> -->
<!-- {{--    <li class="nav-item">--}}
{{--        <a class="nav-link" target="_blank" href="http://35.196.29.3/soko-mkopo/register">Trade Finance</a>--}}
{{--    </li>--}} -->
    <!-- <li class="nav-item @if(request()->is('home/faqs*')) active @endif">
        <a class="nav-link" href="{{ url('home/faqs') }}">FAQs</a>
    </li> -->
@stop
@section('content')
    @yield('content')
@endsection
