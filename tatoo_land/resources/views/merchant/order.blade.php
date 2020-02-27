@extends('merchant.app')
@section('merchant')
    <main class="content">
        <h5>Order {{ $order->serial }}</h5>

        <span class="status {{ $order->status }} float-right"
              style="font-size: 22px !important;">{{ ucfirst($order->status) }}</span>

        <i data-feather="phone"></i> {{ @$order->user->phone }} <br>
        <i data-feather="mail"></i> {{ @$order->user->email }} <br>

        @include('includes.order')
    </main>
@endsection
