@extends('profile.app')
@section('profile')
    <main class="content">
        <h5>My Profile</h5>
        <hr>
        <div class="col-md-8">
            <form method="POST" action="">
                @csrf
                <div class="form-group row">
                    <div class="offset-4 col-md-6">
                        <h4>Account</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Full Name</label>
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your name"
                               value="{{ optional(user())->name }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Phone*</label>
                    <div class="col-md-6">
                        <input type="number" name="phone" class="form-control" placeholder="Your phone" required
                               value="{{ optional(user())->phone }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">National ID*</label>
                    <div class="col-md-6">
                        <input type="text" name="idno" class="form-control" placeholder="National ID" required
                               value="{{ optional(user())->idno }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">E-Mail Address*</label>
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Your email" required
                               value="{{ optional(user())->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-md-6">
                        <button type="submit" class="btn btn-info">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection

