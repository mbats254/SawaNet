@extends('layouts.home')
@section('content')
    <div class="container wrapper">
        <div class="offset-2 col-md-8">
            @include('includes.alerts')
            @guest
                <div class="alert alert-warning">
                    Please <a href="{{ url("login") }}">login</a> or
                    <a href="{{ url('register') }}">register</a> to submit your merchant application
                </div>
            @else
                <div class="content">
                    @if(merchant())
                        <h5>You submitted your application</h5>
                        Your merchant application is <span
                                class="status {{ merchant()->status }}">{{ merchant()->status }}</span>
                        <hr>
                    @endif
                    <form method="POST" action="">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                        <div class="form-group row">
                            <div class="offset-3 col-md-6">
                                <h5>Merchant Application</h5>
                                <p class="text-muted">To sell on {{ env('APP_NAME') }}, complete the form below</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Company Name</label>
                            <div class="col-md-6">
                                <input class="form-control" required name="company"
                                       placeholder="Your company name"
                                       value="{{ old('company', $merchant->company ??  user()->name) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Location</label>
                            <div class="col-md-6">
                                <input class="form-control" required name="location"
                                       placeholder="Your location"
                                       value="{{ old('location', @$merchant->location) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Address</label>
                            <div class="col-md-6">
                                <input class="form-control" required name="address"
                                       placeholder="Physical address"
                                       value="{{ old('address', @$merchant->address) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">About You</label>
                            <div class="col-md-6">
                            <textarea name="about" class="form-control" rows="6"
                                      placeholder="Short summary about you">{{ old('about', @$merchant->about) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="terms" required
                                               @isset($merchant) checked @endif>&nbsp;
                                        Do you agree to <a href="">{{ env('APP_NAME') }} merchant terms
                                            and conditions </a>?
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
@endsection