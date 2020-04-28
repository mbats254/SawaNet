<html>
<head>
    <title>Create Class</title>
</head>
<body>



</body>
</html>










@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Class` Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Add Class') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='{{ route('post.class') }}'>
                                    @csrf
                                    <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                            <label class="form-control-label">{{ __('Class') }}</label>
                                        <select name="standard" class="form-control">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                </select>
                            </div>


                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                        <label class="form-control-label">{{ __('Stream') }}</label>
                                        <input type="text" name="stream" placeholder="stream e.g x,y"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('School Details') }}" required autofocus>
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







