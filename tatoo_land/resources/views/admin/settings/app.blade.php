@extends('layouts.admin')
@section('content')
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-3">
                <div style="position: sticky; top: 55px">
                    <div class="content">
                        <h5 class="mb-2">Settings</h5>
                        @php $url ='admin/settings' @endphp
                        <ul class="nav flex-column sidebar">
                            <li class="nav-item @if(request()->is($url)) active @endif">
                                <a class="nav-link" href="{{ url("$url") }}"><i data-feather="settings"></i>Preferences</a>
                            </li>
                            <li class="nav-item @if(request()->is("$url/users*")) active @endif">
                                <a class="nav-link" href="{{ url("$url/users") }}"><i data-feather="users"></i>Users</a>
                            </li>
                            <li class="nav-item @if(request()->is("$url/categories*")) active @endif">
                                <a class="nav-link" href="{{ url("$url/categories") }}"><i data-feather="folder"></i>Categories</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @include('includes.alerts')
                @yield('settings')
            </div>
        </div>
    </div>
@endsection