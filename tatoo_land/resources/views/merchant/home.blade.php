@extends('merchant.app')
@section('merchant')
    <main class="content">
        <h5>Merchant Dashboard</h5>
        <hr>
        <div class="d-flex justify-content-between flex-wrap text-center">
            <a href="{{ url('merchant/orders') }}">
                <b class="h1">{{ $orders }}</b><br>
                <small class="text-muted font-weight-bold">ORDERS</small>
            </a>
            <a href="{{ url('merchant/products') }}">
                <b class="h1">{{ $products }}</b><br>
                <small class="text-muted font-weight-bold">PRODUCTS</small>
            </a>
            <a href="{{ url('merchant/messages') }}">
                <b class="h1">{{ $messages }}</b><br>
                <small class="text-muted font-weight-bold">NOTIFICATIONS</small>
            </a>
        </div>
    </main>
@endsection