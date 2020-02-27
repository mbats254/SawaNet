@extends('admin.ops.app')
@section('ops')
    <div class="content">
        <h5>Payments</h5>

        <table class="table mt-4">
            <thead>
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>User</th>
                <th>Order</th>
                <th>Status</th>
                <th>Reference</th>
                <th>Narration</th>
                <th class="text-right">Amount</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments as $pay)
                <tr>
                    <td><i>{{ @++$i }}</i></td>
                    <td>{{ $pay->created_at->format('M d,y') }}</td>
                    <td>{{ $pay->order->user->name}}</td>
                    <td><a href="{{ url("admin/ops/orders/$pay->order_id") }}">{{ $pay->order->serial}}</a></td>
                    <td><span class="status {{ $pay->status }}">{{ $pay->status }}</span></td>
                    <td>{{ $pay->reference }}</td>
                    <td>{{ $pay->narration }}</td>
                    <td class="text-right">{{ $pay->amount }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection