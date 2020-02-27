@extends('profile.app')
@section('profile')
    <main class="content">
        <h5>My Account</h5>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <h5>{{ user()->name }}</h5>
                <b>E-Mail</b> : {{ user()->email }} <br>
                <b>Phone</b> : {{ user()->phone }} <br>
                <b>National ID</b> : {{ user()->idno }} <br>
                <br>
                <a href="{{ url('profile/profile') }}" class="btn btn-outline-info">Edit Account &raquo;</a>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-between flex-wrap text-center">
                    <a href="{{ url('profile/orders') }}">
                        <b class="h1">02</b><br>
                        <small class="text-muted font-weight-bold">ORDERS</small>
                    </a>
                    <a href="{{ url('profile/messages') }}">
                        <b class="h1">18</b><br>
                        <small class="text-muted font-weight-bold">NOTIFICATIONS</small>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection