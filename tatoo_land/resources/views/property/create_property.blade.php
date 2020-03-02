@extends('merchant.app')
@section('merchant')
    <div class="content">
        <form method="POST" action="{{ route('land.post') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="offset-3 col-md-6">
                    <h5>Create Property</h5>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Property Name</label>
                <div class="col-md-6">
                    <input class="form-control" required name="name"
                           placeholder="Property name" value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Property Size(Acres)</label>
                <div class="col-md-6">
                    <input type="text" min="1" class="form-control" name="property_size" required
                           placeholder="Property size" value="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Location</label>
                <div class="col-md-6">
                    <input class="mb-3 form-control" name="location" placeholder="Property location area" type="text">

                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Main Photo</label>
                <div class="col-md-6">

                    <input type="file" name="image_one"><br>

                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Other Photo</label>
                <div class="col-md-6">

                    <input type="file" name="other_photo"><br>

                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Features</label>
                <div class="col-md-6">
                    <textarea rows="4" name="features" placeholder="Property features"
                              class="form-control"></textarea>
                    <span class="text-muted">Place each feature on new line</span>
                </div>
            </div>
                        <div class="form-group row">
                <div class="offset-3 col-md-6">
                    <button type="submit" class="btn btn-info">Submit</button>
                    {{-- <a href="{{ url("merchant/products") }}" class="btn btn-light">Cancel</a> --}}
                </div>
            </div>
        </form>
    </div>
@endsection
