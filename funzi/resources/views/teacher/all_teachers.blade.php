@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-xl-12 order-xl-1">

                        <div class="card bg-secondary shadow">

                            <div class="card-header bg-white border-0">
                                    <a class="btn btn-success mt-4 right" href="{{ route('add.new.teacher') }}">Add New Teacher</a><br/>
                                <div class="row align-items-center">

                                    @if(($teachers->count()) > 0)
                          @foreach($teachers as $teacher => $values)

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{!! $values->name !!}</div>

                    <div class="card-body">

                        <a href='{{ route('set.subjects',[$values->uniqid]) }}'>Assign Subject </a>

                    </div>
                </div>
            </div>

            @endforeach
            @else
            <p>No Teachers available</p>
@endif
        </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    @endsection
