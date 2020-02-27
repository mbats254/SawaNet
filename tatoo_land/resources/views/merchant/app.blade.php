@extends('layouts.merchant')
@section('content')
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-3">
                <div style="position: sticky; top: 55px">
                    <div class="content">
                        @php $url = "merchant" @endphp
                        <h5 class="mb-2">Dashboard</h5>
                        <ul class="nav flex-column sidebar">
                            <li class="nav-item @if(request()->is("$url")) active @endif">
                                <a class="nav-link" href="{{ url($url) }}"><i data-feather="airplay"></i>Home</a>
                            </li>
                            <li class="nav-item @if(request()->is("$url/products*")) active @endif">
                                <a class="nav-link" href="{{ url("$url/products") }}"><i data-feather="clipboard"></i>Products</a>
                            </li>
                            <li class="nav-item @if(request()->is("$url/orders*")) active @endif">
                                <a class="nav-link" href="{{ url("$url/orders") }}"><i data-feather="shopping-cart"></i>Orders</a>
                            </li>
                            <li class="nav-item @if(request()->is("$url/payments*")) active @endif">
                                <a class="nav-link" href="{{ url("$url/payments") }}"><i data-feather="dollar-sign"></i>Payments</a>
                            </li>
                            <li class="nav-item @if(request()->is("$url/account*")) active @endif">
                                <a class="nav-link" href="{{ url("$url/account") }}"><i data-feather="user"></i>Account</a>
                            </li>
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ url("home/apply/merchant?edit=true") }}"><i--}}
                                            {{--data-feather="settings"></i>Settings</a>--}}
                            {{--</li>--}}
                            <li class="nav-item @if(request()->is("$url/notifications*")) active @endif">
                                <a class="nav-link" href="{{ url("$url/notifications") }}"><i
                                            data-feather="message-square"></i>Notifications</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @include('includes.alerts')
                @yield('merchant')
            </div>
        </div>
    </div>
@endsection