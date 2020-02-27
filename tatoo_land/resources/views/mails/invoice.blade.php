@extends('layouts.mail')
@section('mail')
    <h4>Hello {{ $order->user->name }}!</h4>
    <p>Your order is ready!</p>
    <h3>{{ $order->serial }}</h3>

    <table class="table mt-4">
        <thead class="bg-info text-white">
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
    </table>

    <div class="border rounded p-4">
        <h3>Payment Methods</h3>
        <p>You can pay your order either by <b>credit card</b> or <b>MPESA</b></p>

        <br>
        <h4>Credit Card</h4>
        <a href="{{ url("profile/orders/$order->id?pay=true") }}" class="btn btn-info btn-sm w-25">Pay With Card</a>
        <br>
        <br>

        <h4>Lipa Na Mpesa</h4>
        <ul>
            <li>Select Lipa na M-PESA</li>
            <li>Select Pay Bill</li>
            <li>Enter Business No as <b>xxxx</b></li>
            <li>Account No as <b>{{ $order->serial }}</b></li>
            <li>Enter the Amount.</li>
            <li>Enter your PIN and Send.</li>
        </ul>
    </div>
@endsection
