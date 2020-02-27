@extends('layouts.admin')
@section('content')
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-3">
                <div style="position: sticky; top: 60px">
                    <div class="content">
                        <h5 class="mb-2">Operations</h5>
                        @php $url = 'admin/ops' @endphp
                        <ul class="nav flex-column sidebar">
                            <li class="nav-item {{ request()->is("$url", 'admin') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ "$url" }}"><i data-feather="airplay"></i>Dashboards</a>
                            </li>
                            <li class="nav-item @if(request()->is("$url/merchants")) active @endif">
                                <a class="nav-link" href="{{ url("$url/merchants") }}"><i data-feather="users"></i>Merchants</a>
                            </li>
                            <li class="nav-item {{ request()->is("$url/orders*") ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url("$url/orders") }}"><i data-feather="shopping-cart"></i>Orders</a>
                            </li>
                            <li class="nav-item {{ request()->is("$url/payments*") ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url("$url/payments") }}"><i data-feather="dollar-sign"></i>Payments</a>
                            </li>
                            <li class="nav-item {{ request()->is("$url/providers*") ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url("$url/providers") }}">
                                    <i data-feather="users"></i>Service Providers</a>
                            </li>
                            <li class="nav-item {{ request()->is("$url/jobs*") ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url("$url/jobs") }}">
                                    <i data-feather="list"></i>Jobs</a>
                            </li>
                            <li class="nav-item {{ request()->is("$url/products*") ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url("$url/products") }}"><i data-feather="folder"></i>Products</a>
                            </li>
                            <li class="nav-item {{ request()->is("$url/messages*") ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url("$url/messages") }}"><i data-feather="message-square"></i>Notifications</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @yield('ops')
            </div>
        </div>
    </div>
@endsection