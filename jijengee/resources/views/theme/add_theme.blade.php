

@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Theme` Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Add Theme') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='{{ route('post.theme') }}'>
                                    @csrf

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                        <label class="form-control-label">{{ __('Theme Name(Table Name)') }}</label>
                                        <input type="text" name="table_name" placeholder="one-page"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('School Details') }}" required autofocus>
                                    </div>

                                    <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                            <label class="form-control-label">{{ __('Theme Location') }}</label>
                                            <input type="text" name="theme_location" placeholder="one-page"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('School Details') }}" value="{!! $theme_location !!}" readonly  autofocus>
                                        </div>

                                    <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                        <label class="form-control-label">{{ __('Theme Image') }}</label>
                                    <input type="file" name="theme_image"  class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Theme Image') }}" required accept=".png,.jpg,.gif,.JPEG" autofocus>
                                    </div>

                                    <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                            <label class="form-control-label">{{ __('Fields') }}</label><br/>
                                    <select class="js-example-basic-multiple select2" name="field_array[]" multiple="multiple" required>

                                        @for($i=0;$i<sizeof($field_array);$i++)
                                        <option value="{!! $field_array[$i] !!}">{!! $field_array[$i] !!}</option>
                                      @endfor
                                    </select>

                                    </div>
                                    <div class="input"></div>
                                    <input type="hidden" name="field_number" class="field_number">
                                <input type="submit" class="btn btn-success mt-4" value="Submit">

                                </form>
                                {{-- <button class="btn btn-success mt-4 add_field" id="this">Add Field</button> --}}
                             </div>
                             <a href="/Themes/aria/web/index.html" class="btn btn-success mt-4">Theme</a>
                </div>
            </div>
        </div>
<script type="text/javascript">
$(document).ready(function(){
    var count = 0;
    $('.add_field').click(function(){
        count ++;
        $('.field_number').val(count)
        var input = '<div class=form-group><label class=form-control-label>New Field</label><input type=text name=field_'+count+' placeholder=one-page  class=form-control placeholder=School Details required autofocus></div>';
        $('.input').append(input);

    });

// var tagname = $('.add_field').prop("className");
});

</script>
        @include('layouts.footers.auth')
    </div>
@endsection







