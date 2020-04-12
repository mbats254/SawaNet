@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Parent Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Parent Student Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='{{ route('post.parents') }}'>
                                    @csrf
                                    @if(!isset($student_details))
                                    <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                            <label class="form-control-label">{{ __('Student Email') }}</label>
                                        <select name="student_id" class="form-control">
                                                @foreach($all_students as $student => $values)
                                                <option value="{!! $values->id !!}">{!! $values->name !!}</option>
                                                @endforeach
                                        </select>
                                            </div>
                                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                                <label class="form-control-label">{{ __('Student Email') }}</label>
                                <label class="form-control-label">{{ __('Class') }}</label>
                                <select name="class" class="form-control">
                                        @foreach($classes as $class => $values)
                                        <option value="{!! $values->id !!}">{!! $values->name !!}</option>
                                        @endforeach
                                        </select>

                                @else
                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                            <label class="form-control-label">{{ __('Student Name') }}</label>
                        <input type="text" name="name"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Student Name') }}" value="{{ $student_details->name }}" readonly autofocus>
                        </div>
                        <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                <label class="form-control-label">{{ __('Student Email') }}</label>
                                <input type="email" name="email"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Parent Email" value="{{ $student_details->email }}" readonly autofocus>
                            </div>
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                <label class="form-control-label">{{ __('Class') }}</label>
                                <input type="text" name="class" placeholder="Student Class" value="{!! $class_details->name !!}" readonly class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" autofocus>
                            </div>
                            <input type="hidden" name="student_id" value="{!! $student_details->id !!}">
                            @endif
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Name') }}</label>
                                <input type="text" name="name"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Parent Name" value="" required autofocus>
                                </div>
                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                        <label class="form-control-label">{{ __('Email') }}</label>
                                        <input type="email" name="email"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Parent Email"  required autofocus>
                                    </div>
                                    <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                            <label class="form-control-label">{{ __('Mobile Number') }}</label>
                                            <input type="text" name="phone_number"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Parent Number" maxlength='10' required autofocus>
                                        </div>

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






