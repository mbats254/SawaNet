@extends('layouts.app')
@section('content')
    <div class="container wrapper">
        <div class="offset-3 col-md-6">
            <div class="content">
                <h5>Verify Phone</h5>
                <p class="text-muted">We have sent a verification code to
                    {{  '***'. substr(user()->phone,  9)  }}
                </p>

                @include('includes.alerts')

                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        A new verification code has been sent to your phone number.
                    </div>
                @endif

                <form method="post" action="{{ url('verify/phone') }}" class="mb-4">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="code" class="form-control" value="{{ old('code', @$code) }}"
                               placeholder="Verification code" autofocus required>
                        <div class="input-group-append">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                <a href="{{ url('verify/phone?resend=1') }}">Did not receive code? Resend another one</a>
            </div>
        </div>
    </div>

@endsection