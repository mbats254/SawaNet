@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Not Available') }}</div>

                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-6">

                                <a href="{{ route('login') }}" class="text-light">
                                    <small>{{ __('Login') }}</small>
                                </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
