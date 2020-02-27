@extends('layouts.app')
@section('navbar')
    <li class="nav-item @if(request()->is('admin/ops*')) active @endif">
        <a class="nav-link" href="{{ url('admin/ops') }}">Operations</a>
    </li>
    <li class="nav-item @if(request()->is('admin/reports*')) active @endif">
        <a class="nav-link" href="{{ url('admin/reports') }}">Reports</a>
    </li>
    <li class="nav-item @if(request()->is('admin/settings*')) active @endif">
        <a class="nav-link" href="{{ url('admin/settings') }}">Settings</a>
    </li>
    <li class="nav-item @if(request()->is('admin/audit*')) active @endif">
        <a class="nav-link" href="{{ url('admin/audit') }}">Audit</a>
    </li>
@stop
@section('content')
    @yield('admin')
@endsection