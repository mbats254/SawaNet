@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Package`s Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Package`s Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='{{ route('post.package') }}'>
                                    @csrf
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" value="" required autofocus>
                                </div>

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Internet Speeds') }}</label>
                                <input type="text" name="internet_speeds"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="i.e 2mbps" value="" required autofocus>
                                </div>

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Category') }}</label>
                               <select name="category" class="form-control">
                                   <option class="home_package">Home Package</option>
                                   <option class="business_package">Business Package</option>
                               </select>
                                </div>

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Price (ksh)') }}</label>
                                <input type="number" name="price" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Package Price" value="" required autofocus>
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






