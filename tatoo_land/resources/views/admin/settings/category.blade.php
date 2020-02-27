@extends('admin.settings.app')
@section('settings')
    <div class="content">
        <form action="" method="post">
            @csrf
            @isset($category)
                <input type="hidden" name="id" value="{{ $category->id }}">
            @endisset

            <div class="form-group row">
                <div class="offset-3 col-md-6">
                    <h4>Create Category</h4>
                    <p class="help-block">Create product, material or skill category</p>
                </div>
            </div>

            <div class=" form-group row">
                <label class="col-md-3 col-form-label text-md-right">Category</label>
                <div class="col-md-4">
                    <input class="form-control" name="name" value="{{old('name', @$category->name)}}" required
                           placeholder="Category name">
                </div>
            </div>

            <div class=" form-group row">
                <label class="col-md-3 col-form-label text-md-right">Type</label>
                <div class="col-md-4">
                    <select name="type" class="form-control">
                        @foreach(['skill', 'material'] as $i)
                            <option value="{{ $i }}"
                                    @if(old('type', @$category->type)==$i) selected @endif>{{ ucfirst($i) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-3 col-md-6">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="reset" class="btn btn-outline-info">Reset</button>
                </div>
            </div>
        </form>
    </div>
@endsection