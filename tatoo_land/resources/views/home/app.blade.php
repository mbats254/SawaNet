@extends('layouts.home')
@section('content')
    <div class="container wrapper">
        @includeWhen(request()->is('/','home'),'home.carousel')

        <div class="row">
            <div class="col-md-3">
                <div style="position: sticky; top: 60px">
                    <side-categories></side-categories>
                    <merchants></merchants>
                </div>
            </div>
            <div class="col-md-9">
                @yield('home')
            </div>
        </div>
    </div>
@endsection
