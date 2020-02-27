@extends('admin.ops.app')
@section('ops')
    <div class="content">
        <h5>Admin Dashboard</h5>
        <hr>
        <div class="d-flex justify-content-between flex-wrap text-center">
            <a href="{{ url('admin/ops/merchants') }}">
                <b class="h1">{{ $merchants }}</b><br>
                <small class="text-muted font-weight-bold">MERCHANTS</small>
            </a>
            <a href="{{ url('admin/ops/providers') }}">
                <b class="h1">{{ $providers }}</b><br>
                <small class="text-muted font-weight-bold">WORKERS</small>
            </a>
            <a href="{{ url('admin/ops/orders') }}">
                <b class="h1">{{ $orders }}</b><br>
                <small class="text-muted font-weight-bold">ORDERS</small>
            </a>
            <a href="{{ url('admin/ops/products') }}">
                <b class="h1">{{ $products }}</b><br>
                <small class="text-muted font-weight-bold">PRODUCTS</small>
            </a>
            <a href="{{ url('admin/messages') }}">
                <b class="h1">{{ $messages }}</b><br>
                <small class="text-muted font-weight-bold">NOTIFICATIONS</small>
            </a>
        </div>
    </div>
@endsection