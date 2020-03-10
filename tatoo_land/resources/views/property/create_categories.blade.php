@extends('merchant.app')
@section('merchant')
    <div class="content">
        <form method="POST" action="{{ route('categories.post') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="offset-3 col-md-6">
                    <h5>Create Category</h5>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Property Size</label>
                <div class="col-md-6">
                    <input class="form-control" required name="size_in_acres"
                           placeholder="Property Size in Acres" value="">
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
