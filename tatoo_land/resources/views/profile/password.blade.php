@extends('profile.app')
@section('profile')
    <main class="content">
        <h5>Password</h5>
        <hr>
        <form action="{{url("profile/password")}}" method="post">
            @csrf
            <div class="form-group row">
                <div class="offset-4 col-md-6">
                    <h5>Change Password</h5>
                </div>
            </div>

            @if(!request()->has('default'))
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Current Password</label>
                    <div class="col-md-6">
                        <input type="password" name="current" value="{{old('current')}}" placeholder="Current password">
                    </div>
                </div>
            @endif
            <div class=" form-group row">
                <label class="col-md-4 col-form-label text-md-right">New Password</label>
                <div class="col-md-6">
                    <input type="password" name="password" value="{{old('password')}}" required
                           placeholder="New password">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                <div class="col-md-6">
                    <input name="password_confirmation" type="password" value="{{old('password_confirmation')}}"
                           placeholder="Confirm password">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-md-6">
                    <button type="submit" class="btn btn-info">Change Password</button>
                </div>
            </div>
        </form>
    </main>
@endsection