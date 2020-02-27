@extends('profile.app')
@section('profile')
    <main class="content">
        <div class="row">
            <div class="col-md-6">
                <h5>{{ user()->name }}</h5>
                <i data-feather="phone"></i> {{ user()->phone }} <br>
                <i data-feather="mail"></i> {{ user()->email }} <br>

            </div>
            <div class="col-md-6 text-right">
                <h5>INVOICE {{ $order->serial }}</h5>
                <b>Date :</b> {{ $order->created_at->format('M d, Y') }} <br>
                <b>Total Amount :</b> {{ currency($order->items->sum('amount')) }}<br>
                <br>
                <span class="status {{ $order->status }}"
                      style="font-size: 28px !important;">{{ ucfirst($order->status) }}</span>
            </div>
        </div>
        @include('includes.order')
    </main>
@endsection