@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Lesson Below')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Assigment  Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='{{ route('post.lesson') }}' enctype='multipart/form-data'>
                                    @csrf


                            <div class="form-group{{ $errors->has('Class Name') ? ' has-danger' : '' }}">
                             <label class="form-control-label">{{ __('Lesson Title') }}</label>
                                    <input type="text" name="lesson_title"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Lesson Title" value="" required autofocus>
                                    </div>
                            <div class="form-group{{ $errors->has('Class Name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Class Name') }}</label>
                                <input type="text" name="class_name"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="class` Name" value="{!! $class->name !!}" readonly autofocus>
                                </div>
                                <input type="hidden" name="class_id" value='{!! $class->id !!}'>
                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                        <label class="form-control-label">{{ __('Subject Name') }}</label>
                                    <input type="text" name="subject_name"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="subject`s Name" value="{!! $subject->name !!}" readonly autofocus>
                                    </div>
                                    <input type="hidden" name="subject_id" value='{!! $subject->id !!}'>

                                    <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                            <label class="form-control-label">{{ __('Lesson Document') }}</label>
                                        <input type="file" name="lesson"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="subject`s Name"  accept=".pdf,.doc,.docx" autofocus>
                                        </div>

                                        <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                                <label class="form-control-label">{{ __('Lesson Video') }}</label>
                                            <input type="file" name="lesson_video"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="video"  accept=".mp4" autofocus>
                                            </div>

                                        <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                                <label class="form-control-label">{{ __('Lesson Instructions') }}</label>
                                            <textarea name="instructions"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="instructions for the lesson" value="" required autofocus></textarea>
                                            </div>

                                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label">{{ __('Should be read through by:') }}</label>
                                                <input type='date' name="due_date"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="instructions for the lesson" value="" required autofocus></textarea>
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






