@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Film`s Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Film`s  Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='{{ route('post.film') }}' enctype="multipart/form-data">
                                    @csrf



                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Film Title') }}</label>
                                <input type="text" name="FilmTitle"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="subject`s Name" value="" required autofocus>
                                </div>

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                        <label class="form-control-label">{{ __('Duration') }}</label>
                                    <input type="number" name="duration"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="subject`s Name" value="" required autofocus>
                                    </div>

                                    <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                            <label class="form-control-label">{{ __('Link To Film') }}</label>
                                        <input type="text" name="link_to_film"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="link_to_film" value="" required autofocus>
                                        </div>

                                        <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                                <label class="form-control-label">{{ __('Plot') }}</label>
                                            <textarea type="text" name="plot"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Plot" value="" required autofocus></textarea>
                                            </div>

                                        <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Film Poster') }}</label>
                                <input type="file" name="Film_Poster"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="subject`s Name" value="" accept=".png,.jpg,.gif" required autofocus>
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






