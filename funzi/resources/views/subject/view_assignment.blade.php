@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-xl-12 order-xl-1">
                        <div class="card bg-secondary shadow">
                            <div class="card-header bg-white border-0">
                                <div class="row align-items-center">

            <div class="col-md-8">
                @if(\Auth::user()->student !== null)
                <div class="card">
                        <div class="card-header"><b>Subject: </b>{!! $subject->name !!}</div>


                    <div class="card-body">
                            <b>Instructions: </b><br/>{!! $assignment->instructions !!}<br/><br/>
                        @if($assignment->assignment !== null)
                            <a href="{!! $assignment->assignment !!}">Download Assignment Here</a>
                        @endif
                        <br/><br/>
                        <b>Date Due:</b> {!! date("d M Y", strtotime($assignment->due_date)) !!}
                    </div>
                </div>
                @endif
            </div>


        </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    @endsection
