@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-xl-12 order-xl-1">
                        <div class="card bg-secondary shadow">
                            <div class="card-header bg-white border-0">
                                <div class="row align-items-center">
                                    @if(sizeof($schools) > 0)
                          @foreach($schools as $school => $values)
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{!! $values->name !!}</div>

                    <div class="card-body">
                        <a href='{{ route('approve.account',[$values->id]) }}'>Approve Account </a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>No unapproved schools available</p>
@endif
        </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    @endsection
