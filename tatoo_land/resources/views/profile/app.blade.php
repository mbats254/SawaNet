@extends('layouts.profile')
@section('content')
    @php $url = "profile" @endphp
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-3">
                <div style="position: sticky; top: 55px">
                    <div class="content">
                        <h5 class="mb-2">Account</h5>
                        <ul class="nav flex-column sidebar">
                            <li class="nav-item {{ request()->is("$url") ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url("$url") }}">
                                    <i data-feather="user"></i>My Account</a>
                            </li>
                            <li class="nav-item {{ request()->is("$url/orders*") ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url("$url/orders") }}">
                                    <i data-feather="shopping-cart"></i>My Orders</a>
                            </li>


                            <li class="nav-item {{ request()->is("$url/payments*") ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url("$url/payments") }}">
                                    <i data-feather="dollar-sign"></i>Payments</a>
                            </li>

                            @if(provider())
                                <li class="nav-item {{ request()->is("$url/services*") ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url("$url/services") }}">
                                        <i data-feather="clipboard"></i>Jobs</a>
                                </li>
                            @endif

                            <li class="nav-item {{ request()->is("$url/messages*") ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url("$url/messages") }}">
                                    <i data-feather="message-circle"></i>My Notifications</a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h5 class="mb-2">Settings</h5>
                        <ul class="nav flex-column sidebar">
                            <li class="nav-item {{ request()->is("$url/profile*") ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url("$url/profile") }}">
                                    <i data-feather="user"></i>My Profile</a>
                            </li>
                            {{--<li class="nav-item {{ request()->is("$url/settings") ? 'active' : '' }}">--}}
                            {{--<a class="nav-link" href="{{ url("$url/settings") }}">--}}
                            {{--<i data-feather="settings"></i>Settings</a>--}}
                            {{--</li>--}}
                            <li class="nav-item {{ request()->is("$url/password*") ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url("$url/password") }}">
                                    <i data-feather="eye"></i>Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#{{ url("$url/messages") }}">
                                    <i data-feather="message-square"></i>Notifications</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @include('includes.alerts')
                @yield('profile')
            </div>
        </div>
    </div>
@endsection
