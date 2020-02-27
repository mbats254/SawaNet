@extends('merchant.app')
@section('merchant')
    <main class="content">
        <h5>Merchant Profile</h5>
        <hr>
        <table class="table table-borderless table-sm mb-4">
            <tr>
                <th>Full Name</th>
                <td>{{ $merchant->name }}</td>
            </tr>
            <tr>
                <th>Company</th>
                <td>{{ $merchant->company }}</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>{{ $merchant->location }}</td>
            </tr>
            <tr>
                <th>Account Status</th>
                <td><span class="status {{ $merchant->status }}">{{ $merchant->status }}</span></td>
            </tr>
            <tr>
                <th>Physical Address</th>
                <td>{{ $merchant->address }}</td>
            </tr>
        </table>
        <a href="{{ url("home/apply/merchant?edit=true") }}" class="btn btn-info">Edit Profile &raquo;</a>
    </main>
@endsection