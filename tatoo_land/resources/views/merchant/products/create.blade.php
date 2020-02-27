@extends('merchant.app')
@section('merchant')
    <div class="content">
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="offset-3 col-md-6">
                    <h5>Create Product</h5>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Product Name</label>
                <div class="col-md-6">
                    <input class="form-control" required name="name"
                           placeholder="Product name" value="{{ old('name', @$product->name) }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Pricing</label>
                <div class="col-md-6">
                    <input type="number" min="1" class="form-control" name="price" required
                           placeholder="Product pricing" value="{{ old('price', @$product->price) }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Product Type</label>
                <div class="col-md-6">
                    <select class="form-control" name="type">
                        <option value="sale" @if(old('type', @$product->type)=='sale') selected @endif>
                            For Sale
                        </option>
                        <option value="hire" @if(old('type', @$product->type)=='hire') selected @endif>
                            For Hire
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Categories</label>
                <div class="col-md-6">
                    {{--<input class="mb-3 form-control" placeholder="Search category...">--}}
                    @foreach($categories->chunk(2) as $chunk)
                        <div class="row">
                            @foreach($chunk as $cat)
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox"
                                                   @if(in_array($cat->id, $prod_cats ?? [])) checked
                                                   @endif name="category_ids[]"
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
                <label class="col-md-3 col-form-label text-md-right">Images</label>
                <div class="col-md-6">
                    @isset($product)
                        @foreach($product->images as $img)
                            <img src="{{ asset('storage/'. $img->path) }}" style="height: 40px"> <br>
                        @endforeach
                    @endisset
                    <input type="file" name="image_one"><br>
                    <input type="file" name="image_two"><br>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Features</label>
                <div class="col-md-6">
                    <textarea rows="4" name="features" placeholder="Product features"
                              class="form-control">{{ old('features', @$product->features) }}</textarea>
                    <span class="text-muted">Place each feature on new line</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Description</label>
                <div class="col-md-6">
                    <textarea rows="6" name="description" class="form-control"
                              placeholder="Product description">{{ old('description', @$product->description) }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-3 col-md-6">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="{{ url("merchant/products") }}" class="btn btn-light">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection
