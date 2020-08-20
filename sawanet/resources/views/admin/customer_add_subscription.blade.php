@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Customer Subscription Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Subscription Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='{{ route('post.customer.package') }}'>
                                    @csrf
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Name') }}</label>
                                <select name="user_id" class="form-control">
                                    @foreach($users_no_package as $user => $values)
                                    <option value="{!! $values->id !!}">{!! $values->name !!}</option>
                                    @endforeach
                                </select>
                                </div>

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Packages') }}</label>
                                    <select name="package_id" class="form-control">
                                        @foreach($packages as $package => $values)
                                        <option value="{!! $values->id !!}">{!! $values->name !!} Package({!! $values->internet_speeds !!} at ksh {!! $values->price !!})</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Amount Paid (ksh)') }}</label>
                                <input type="number" name="amount_paid" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Amount Paid In Total" value="" required autofocus>
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






