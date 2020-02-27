<table class="table table-sm mt-4">
    <thead>
    <tr>
        <th>No</th>
        <th>Item</th>
        <th class="text-right">@</th>
        <th class="text-right">Qty</th>
        <th class="text-right">Amount</th>
    </tr>
    </thead>
    <tbody>
    @foreach($order->items as $item)
        <tr>
            <td><i>{{ @++$i }}</i></td>
            <td>{{ $item->product->name }}</td>
            <td class="text-right">{{ currency($item->product->price) }}</td>
            <td class="text-right">{{ $item->quantity }}</td>
            <td class="text-right">{{ currency($item->amount) }}</td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th colspan="3"></th>
        <th class="text-right">{{ $order->items->sum('quantity') }}</th>
        <th class="text-right">{{ currency($order->items->sum('amount')) }}</th>
    </tr>
    </tfoot>
</table>

<h5>Payments</h5>
<table class="table">
    <thead>
    <tr>
        <th>No</th>
        <th>Date</th>
        <th>Reference</th>
        <th>Status</th>
        <th>Narration</th>
        <th class="text-right">Amount</th>
    </tr>
    </thead>
    @foreach($order->payments as $pay)
        <tr>
            <td><i>{{ @$i++ }}</i></td>
            <td>{{ $pay->created_at->format('M d y H:i') }}</td>
            <td>{{ $pay->reference  }}</td>
            <td><span class="status {{ $pay->status }}">{{ $pay->status }}</span></td>
            <td>{{ $pay->narration }}</td>
            <td class="text-right">{{ currency($pay->amount, true)  }}</td>
        </tr>
    @endforeach
    <tfoot>
    <tr>
        <th colspan="5"></th>
        <th class="text-right">{{ currency($order->payments->sum('amount'),true) }}</th>
    </tr>
    </tfoot>
</table>

<div>
    @if($order->status != 'paid' && $order->user_id==auth()->id())
        <a href="{{ url("profile/pay/$order->id") }}" class="btn btn-secondary">Pay Order</a>
{{--        <pay order="{{ $order }}" id="{{ $order->serial }}" amount="{{ $order->items->sum('amount') }}" user="{{ user() }}"></pay>--}}
    @endif
    <button class="btn btn-info">Print</button>
    <button class="btn btn-outline-dark">Download PDF</button>
</div>
