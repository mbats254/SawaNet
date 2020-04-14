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
                            <form method='POST' action='{{ route('select.subject.post') }}'>
                                    @csrf

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                            <label class="form-control-label">{{ __('Class Name') }}</label>
                            <select name="class" class="form-control">
                                @foreach($classes as $class => $values)
                                <option value="{!! $values->id !!}">{!! $values->name !!}</option>
                                @endforeach
                                  </select>
                        </div>
                        <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                <label class="form-control-label">{{ __('Class Name') }}</label>
                                <select name="subject" class="form-control">
                                    @foreach($subjects as $subject => $values)
                                    <option value="{!! $values->id !!}">{!! $values->name !!}</option>
                                    @endforeach
                                      </select>
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






