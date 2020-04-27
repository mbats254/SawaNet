@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($children as $child =>$values)
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student Details</div>

                <div class="card-body">
                  <a href="{{ route('student.details',[$values->uniqid]) }}">{!! $values->name !!}</a>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
