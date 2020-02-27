@extends('admin.ops.app')
@section('ops')
    <div class="content">
        <h5>Orders</h5>

        <table class="table table-striped mt-4">
            <thead>
            <tr>
                <th>No</th>
                <th>Serial</th>
                <th>Date</th>
                <th>User</th>
                <th>Status</th>
                <th class="text-right">Items</th>
                <th class="text-right">Amount</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($orders as $order)
                <tr>
                    <td><i>{{ @++$i }}</i></td>
                    <td><a href="#">{{ $order->serial }}</a></td>
                    <td>{{ $order->created_at->format('M d, H:i') }}</td>
                    <td>{{ @$order->user->name }}</td>
                    <td><span class="status {{ $order->status }}">{{ $order->status }}</span></td>
                    <td class="text-right"><i>{{ $order->items->count() }}</i></td>
                    <td class="text-right">{{ currency($order->items->sum('amount')) }}</td>
                    <td class="text-right">
                        <a href="{{ url("admin/ops/orders/$order->id") }}" class="btn btn-outline-info">View &raquo;</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No orders yet</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection