@extends('admin.ops.app')
@section('ops')
    <div class="content">
        <form class="form-inline float-right" action="#">
            <div class="input-group">
                <select>
                    <option>All</option>
                </select>
                <input type="text" class="form-control" placeholder="Search here...">
                <div class="input-group-append">
                    <button class="input-group-text">Go</button>
                </div>
            </div>
        </form>
        <h5>Merchants</h5>

        <table class="table table-striped mt-4">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Company</th>
                <th>Status</th>
                <th title="Products">Prods</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($merchants as $merchant)
                <tr>
                    <td><i>{{ @++$i }}</i></td>
                    <td><a href="{{ url("admin/ops/merchants/$merchant->id") }}">{{ $merchant->name }}</a></td>
                    <td>{{ $merchant->phone }}</td>
                    <td>{{ $merchant->company }}</td>
                    <td><span class="status {{ $merchant->status }}">{{ $merchant->status }}</span></td>
                    <td>{{ $merchant->products_count }}</td>
                    <td>
                        <a href="{{ url("admin/ops/merchants/$merchant->id") }}" class="btn btn-outline-info">More &raquo;</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $merchants->links() }}
    </div>
@endsection