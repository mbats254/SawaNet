@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($assignments as $assignment =>$values)
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{!! $values->subject_name !!}</div>

                <div class="card-body">
                 <a href='{!! route('view.assignment',[$values->uniqid]) !!}'>View Assignment</a><br/>


                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
