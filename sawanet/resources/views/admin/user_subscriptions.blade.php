@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Users And Their Subscriptions') }}</h3>
                            </div>

                             <div class="col-4 text-right">
                                <a href="{{ route('add.customer.subscription') }}" class="btn btn-sm btn-primary">{{ __('Add Customer Subscription') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                        <th></th>
                                        <th scope="col">User`s Name</th>
                                        <th scope="col">User`s Phone Number</th>
                                        <th scope="col">Package Name</th>
                                        <th scope="col">Amount Paid</th>
                                        <th scope="col">Duration of Subscription</th>
                                        <th scope="col">Date Due</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                            </thead>
                            <tbody>
                                    @foreach($user_subscriptions as $subscription => $values)
                                    <tr>
                                     <td>{{ @++$i }}</td>
                                      <td>{!! $values->user_name !!}</td>
                                      @php
                                      $package_details = App\Subscription::find($values->package_id);
                                      $user_details = App\User::find($values->user_id);
                                      $date2 = date('d');
                                      $format_date = date_format($values->updated_at,'d');
                                        // Formulate the Difference between two dates
                                      $diff = abs($format_date - $date2);

                                      @endphp
                                      <td>{!! $user_details->contact !!}</td>
                                      <td>{!! $package_details->name !!}</td>
                                      {{-- {!! $values->updated_at !!} --}}
                                      @if($values->amount_paid !== null)
                                      <td>{!! $values->amount_paid !!}</td>
                                      @else
                                      <td style="color:red">No Payments Made</td>
                                      @endif
                                      @if($values->duration_of_subscription !== null)
                                      <td>{!! $values->duration_of_subscription !!}</td>
                                      @else
                                      <td style="color:red">No Payments Made</td>
                                      @endif
                                      @if($diff > 0)
                                      <td style="color:red">( Payments due on the {!! $format_date !!} of the month)</td>
                                      <td><a href="{{ route('send.payment.notification',[$values->uniqid]) }}" class="btn btn-primary">Send Payment Notification</a></td>
                                      <td><a href="{{ route('enter.payment.details',[$values->uniqid]) }}" class="btn btn-primary">Enter Payment Details</a></td>
                                      @else
                                      <td>Date {!! $format_date !!} of the month</td>

                                        @endif

                                    </tr>
                                    @endforeach
                                    {{-- @foreach($) --}}

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">

                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

