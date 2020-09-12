@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Confirm Payment Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Confirm Payments') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='{{ route('payments.confirmation.post') }}'>
                                    @csrf
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('User Name') }}</label>
                                <input type="text" name="user_name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="User`s Name" value="{!! $user_details->name !!}" readonly autofocus>
                                </div>

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('User`s Contact') }}</label>
                                <input type="text" name="user_contact"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="User`s Contact" value="{!! $user_details->contact !!}" readonly autofocus>
                                </div>

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Package Name') }}</label>
                                <input type="text" name="package_name"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Package Name" value="{!! $package_details->name !!} Package ({!! $package_details->internet_speeds !!} at {!! $package_details->price !!})" readonly autofocus>
                                </div>
                                <input type="hidden" name="subscription_id" value="{!! $user_subscription->id !!}">
                                <input type="hidden" name="package_id" value="{!! $package_details->id !!}">

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Amount Paid(ksh)') }}</label>
                                <input type="number" name="amount_paid" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Amount paid by customer i.e. 1500" value="" required autofocus>
                                </div>

                                    <input type="submit" class="btn btn-success mt-4" value="Submit">

                                </form>
                             </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
$(document).ready(function(){
   $('#image').on("change", function(){
     $('.should_appear').fadeIn();
   });
});

</script>
        @include('layouts.footers.auth')
    </div>
@endsection






