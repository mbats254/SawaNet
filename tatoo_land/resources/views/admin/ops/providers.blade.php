@extends('admin.ops.app')
@section('ops')
    <div class="content">
        <form class="form-inline float-right" action="#">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search here...">
                <div class="input-group-append">
                    <button class="input-group-text">Go</button>
                </div>
            </div>
        </form>
        <h5>Service Providers</h5>

        <table class="table table-striped mt-4">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Status</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($providers as $prov)
                <tr>
                    <td><i>{{ @++$i }}</i></td>
                    <td>{{ $prov->name }}</td>
                    <td>{{ $prov->phone }}</td>
                    <td>{{ $prov->email }}</td>
                    <td><span class="status {{ $prov->status }}">{{ $prov->status }}</span></td>
                    <td>
                        <a href="#" class="btn btn-outline-info">More &raquo;</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection