@extends('admin.ops.app')
@section('ops')
    <div class="content">
        <h5>Job Requests</h5>

        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Created</th>
                <th>Client</th>
                <th>Provider</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobs as $job)
                <tr>
                    <td><i>{{ @++$i }}</i></td>
                    <td>{{ $job->created_at->format('M d,y') }}</td>
                    <td>{{ $job->user->name ?? '-:-' }}</td>
                    <td>{{ $job->provider->alias}}</td>
                    <td>{{ $job->from_date }}</td>
                    <td>{{ $job->to_date }}</td>
                    <td><span class="status {{ $job->status }}">{{ $job->status }}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection