@extends('profile.app')
@section('profile')
    <main class="content">
        <h5>Pay Order {{ $order->serial }}</h5>
        <b>Amount: </b> {{ currency($order->items->sum('amount')) }}

        <hr>

        <card order="{{ $order }}"></card>
{{--        @if(session()->has('response'))--}}
{{--            <div class="alert alert-success">--}}
{{--                <p class="font-weight-bold">{{ @session('response')->remarks }}</p>--}}
{{--                <p>--}}
{{--                    <b>Reference: </b> {{ @session('response')->reference }}<br>--}}
{{--                    <b>Amount: </b> {{ currency(@session('response')->amount) }}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        @else--}}
{{--            <form method="post" action="">--}}
{{--                @csrf--}}
{{--                <div class="form-group row">--}}
{{--                    <div class="offset-3 col-md-6">--}}
{{--                        <h5>Card Payment</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group row">--}}
{{--                    <label class="col-md-3 col-form-label text-md-right">Card Number</label>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <input type="number" name="card" class="form-control" placeholder="Card Number">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group row">--}}
{{--                    <label class="col-md-3 col-form-label text-md-right">Owners Name</label>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <input type="text" name="name" class="form-control" placeholder="Holders name">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group row">--}}
{{--                    <label class="col-md-3 col-form-label text-md-right">Expiration Month</label>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <input type="number" name="month" placeholder="Month" class="form-control" min="1" max="31">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group row">--}}
{{--                    <label class="col-md-3 col-form-label text-md-right">Expiration Year</label>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <input type="number" name="year" placeholder="Year" class="form-control" min="1" max="12">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group row">--}}
{{--                    <label class="col-md-3 col-form-label text-md-right">Security CVV</label>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <input type="number" name="cvv" placeholder="Month" class="form-control">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group row">--}}
{{--                    <div class="offset-3 col-md-6">--}}
{{--                        <button class="btn btn-secondary">Checkout</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        @endif--}}

    </main>
@endsection
