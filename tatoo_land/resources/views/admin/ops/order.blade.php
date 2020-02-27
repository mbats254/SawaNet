@extends('admin.ops.app')
@section('ops')
    <div class="content">
           <span class="status {{ $order->status }} float-right"
                 style="font-size: 22px !important;">{{ ucfirst($order->status) }}</span>
        <h5>Order {{ $order->serial }}</h5>

        @include('includes.order')
    </div>
@endsection