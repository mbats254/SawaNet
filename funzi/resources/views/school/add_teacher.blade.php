@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Teacher`s Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Teacher`s Student Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='{{ route('post.teachers') }}'>
                                    @csrf

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                            <label class="form-control-label">{{ __('School Name') }}</label>
                        <input type="text" name="name"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('School Details') }}" value="{{ $school_details->name }}" readonly autofocus>
                        </div>


                            <input type="hidden" name="school_id" value="{!! $school_details->id !!}">

                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Name') }}</label>
                                <input type="text" name="name"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Teacher`s Name" value="" required autofocus>
                                </div>
                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                        <label class="form-control-label">{{ __('Email') }}</label>
                                        <input type="email" name="email"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Teacher`s Email"  required autofocus>
                                    </div>
                                    <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                            <label class="form-control-label">{{ __('Mobile Number') }}</label>
                                            <input type="text" name="phone_number"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Teacher`s Number" maxlength='10' required autofocus>
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






