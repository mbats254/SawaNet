@extends('layouts.home')
@section('content')
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-7">
              <merchant-products merchant_id="{{ $merchant->id }}"></merchant-products>
            </div>

            <div class="col-md-5">
                <main class="content">
                    <button class="float-right text-success btn btn-outline-success btn-sm">
                        <i data-feather="check-circle" class="text-success"></i>Verified
                    </button>
                    <h4 class="font-weight-bolder">{{ $merchant->company }}</h4>
                    <br>
                    <div class="d-flex">
                        <div style="flex: 1">
                            <img src="{{ url('images/avatar.jpg') }}" style="height: 75px; border-radius: 50%">
                        </div>
                        <div style="flex: 2">
                            <b>Summary</b>
                            <p class="text-muted">{{ $merchant->about }}</p>
                            <p class="small">
                                <i v-for="j in 5" data-feather="star"
                                   style="color:orange; margin-right: 0;height: 12px"></i>
                                ({{ random_int(10, 1000) }})
                            </p>
                        </div>
                    </div>

                    <table class="table table-borderless table-sm mb-4">
                        <tr>
                            <th>Name</th>
                            <td>{{ $merchant->name }}</td>
                        </tr>
                        <tr>
                            <th>Successful Sales</th>
                            <td><span class="status active">200+</span></td>
                        </tr>
                    </table>
                </main>
                <rate-merchant merchant_id="{{ $merchant->id }}"></rate-merchant>
                <merchant-reviews merchant_id="{{ $merchant->id }}"></merchant-reviews>
            </div>
        </div>
    </div>
@endsection
