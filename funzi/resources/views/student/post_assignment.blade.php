@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Send Assignment')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Send Assignment') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method='POST' action='{{ route('send.assignment.student') }}' enctype='multipart/form-data'>
                            @csrf
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                            <label class="form-control-label">{{ __('Student Name') }}</label>
                            <input type="text" name="name"  class="form-control form-control-alternative{{ $errors->has('grant_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Student Name') }}" value="{!! $student->name !!}" readonly autofocus>
                            </div>
                        <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                            <label class="form-control-label">{{ __('Student Email') }}</label>
                        <input type="text" name="name"  class="form-control form-control-alternative{{ $errors->has('grant_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Student Name') }}" value="{!! $student->email !!}" readonly autofocus>
                        </div>
                        <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                            <label class="form-control-label">{{ __('Assignment') }}</label>
                        <input type="file" name="assignment"  class="form-control form-control-alternative{{ $errors->has('grant_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Student Email') }}" value="{{ old('email') }}" accept=".pdf,.docx,.csv,.xspf" required autofocus>
                        </div>
                        <input type="hidden" name="assignment_uniqid" value='{!! $assignment->uniqid !!}'>
                        <input type="submit" value="Submit">

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




