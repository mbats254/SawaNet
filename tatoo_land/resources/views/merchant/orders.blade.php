@extends('merchant.app')
@section('merchant')
    <main class="content">
        <h5>Orders</h5>

        <table class="table mt-4">
            <thead>
            <tr>
                <th>No</th>
                <th>Serial</th>
                <th>User</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Items</th>
                <th>Status</th>
                <th>Amount</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($orders as $order)
                <tr>
                    <td><i>{{ @++$i }}</i></td>
                    <td>{{ $order->serial }}</td>
                    <td>{{ @$order->user->name }}</td>
                    <td>{{ @$order->user->phone }}</td>
                    <td>{{ $order->created_at->format('M d, H:i') }}</td>
                    <td>{{ $order->items->count() }}</td>
                    <td><span class="status {{ $order->status }}">{{ $order->status }}</span></td>
                    <td>{{ currency($order->items->sum('amount')) }}</td>
                    <td>
                        <a href="{{ url("merchant/orders/$order->id") }}" class="btn btn-outline-info">View &raquo;</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No orders yet</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </main>
@endsection