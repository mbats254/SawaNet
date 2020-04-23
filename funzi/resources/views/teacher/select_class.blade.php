@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-xl-12 order-xl-1">
                        <div class="card bg-secondary shadow">
                            <div class="card-header bg-white border-0">
                                <div class="row align-items-center">
                                    @if(sizeof($teacher_assign) > 0)
                          @foreach($teacher_assign as $school => $values)

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{!! $values->subject_name !!}</div>

                    <div class="card-body">
                        {!! $values->class_name !!}<br/><br/>
                        <a href='{{ route('upload.assignment',[$values->class_id,$values->subject_id]) }}'>Upload Assignment </a>
                        <br/><a href='{{ route('upload.lesson',[$values->class_id,$values->subject_id]) }}'>Upload Lesson </a>
                    </div>
                </div>
            </div>

            @endforeach
            @else
            <p>No Classes available</p>
@endif
        </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    @endsection
