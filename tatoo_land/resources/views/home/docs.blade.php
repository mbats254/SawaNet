@extends('layouts.home')
@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="content">
                        <h4>Menu</h4>
                        <ul class="nav flex-column">
                            @foreach($menu as $key =>  $value)
                                <li class="nav-item {{ request()->is("docs/$key*") ? 'active' : '' }}">
                                    <a class="nav-link {{ request()->is("docs/$key*") ? 'active' : '' }}" href="{{ url("docs/$key") }}">{{ $value }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="content">
                        <h3>API Docs - <span class="text-muted">{{ ucfirst($tab) }}</span></h3>
                        <br>
                        {!! $contents !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
