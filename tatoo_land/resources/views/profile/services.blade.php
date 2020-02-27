@extends('profile.app')
@section('profile')
    <main class="content">
        <h5>Work Profile</h5>
        <hr>
        <table class="table table-borderless table-sm mb-4">
            <tr>
                <th>Full Name</th>
                <td>{{ $provider->name }}</td>
            </tr>
            <tr>
                <th>Company/Alias</th>
                <td>{{ $provider->alias }}</td>
            </tr>
            <tr>
                <th>Hourly Rate</th>
                <td>{{ currency($provider->rate) }}</td>
            </tr>
            <tr>
                <th>Account Status</th>
                <td><span class="status {{ $provider->status }}">{{ $provider->status }}</span></td>
            </tr>
        </table>

        <a href="{{ url("/home/apply/provider?edit=true") }}" class="btn btn-info float-right mb-2">Edit
            Profile &raquo;</a>
        <h5 class="mb-4">Specializations</h5>
        <div class="mb-3">
            @foreach($provider->categories as $cat)
                <button class="btn btn-sm btn-outline-info mr-1 mb-1">{{ $cat->name }}</button>
            @endforeach
        </div>
    </main>

    <main class="content">
        <h5>Jobs</h5>

        @if(count($hires) == 0)
            <div class="alert alert-danger mt-3">
                No job requests
            </div>
        @else

            <table class="table mt-3">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>From</th>
                    <th>Date From</th>
                    <th>Date To</th>
                    <th>Status</th>
                    <th>Notes</th>
                </tr>
                </thead>
            </table>
        @endif
    </main>

@endsection