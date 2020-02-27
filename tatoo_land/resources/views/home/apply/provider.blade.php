@extends('layouts.home')
@section('content')
    <div class="container wrapper">
        <div class="offset-2 col-md-8">
            @include('includes.alerts')

            <div class="content">
                @guest
                    <div class="alert alert-warning">
                        Please <a href="{{ url("login") }}">login</a> or
                        <a href="{{ url('register') }}">register</a> to submit your service provider application
                    </div>
                @else
                    <div class="content">
                        @if(provider())
                            <h5>You submitted your application</h5>
                            Your service provider application status is
                            <span class="status {{ merchant()->status }}">{{ merchant()->status }}</span>
                            <hr>
                        @endif
                        <form method="POST" action="">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                            <div class="form-group row">
                                <div class="offset-3 col-md-6">
                                    <h5>Service Provider</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right">Company/Alias Name</label>
                                <div class="col-md-6">
                                    <input class="form-control" required name="alias"
                                           placeholder="Your company or alias name"
                                           value="{{ old('alias', @$provider->alias ?? user()->name) }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right">Hourly Rate</label>
                                <div class="col-md-6">
                                    <input type="number" min="1" class="form-control" required name="rate"
                                           placeholder="Hourly rate" value="{{ old('rate', @$provider->rate) }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right">Location</label>
                                <div class="col-md-6">
                                    <input class="form-control" required name="location"
                                           placeholder="Your location"
                                           value="{{ old('location', @$provider->location) }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right">Physical Address</label>
                                <div class="col-md-6">
                                    <input class="form-control" required name="address"
                                           placeholder="Physical address"
                                           value="{{ old('address', @$provider->address) }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right">About You</label>
                                <div class="col-md-6">
                                        <textarea name="about" class="form-control" rows="6"
                                                  placeholder="Short summary about you">{{ old('about', @$provider->about) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right">Specializations</label>
                                <div class="col-md-6">
                                    @foreach($categories->chunk(2) as $chunk)
                                        <div class="row">
                                            @foreach($chunk as $cat)
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox"
                                                                   @if(in_array($cat->id, $provider_cats ?? [])) checked
                                                                   @endif name="categories[]"
                                                                   class="form-check-input" value="{{ $cat->id }}">
                                                            &nbsp; {{ $cat->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="terms" required
                                                   @if($provider) checked @endif>&nbsp;
                                            Do you agree to <a href="">{{ env('APP_NAME') }} service provision terms and
                                                conditions </a>?
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-3 col-md-6">
                                    <button class="btn btn-info">Submit Application</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection