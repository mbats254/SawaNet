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
                            <br/><b>Instructions :</b><br/>
                            {!! $lesson->instructions !!}<br/><br/>


                            @if($lesson->lesson !== null)
                            <a href="{!! $lesson->lesson !!}">Download lesson Here</a>
                        @endif
                        <br/><br/>
                            <b>Lecture Video:</b><br/>
                            <iframe style="height:650px;width:800px;" src="{!! $lesson->lesson_video !!}">

                            <b>Instructions: </b><br/>{!! $lesson->instructions !!}<br/><br/>

                        <br/><br/>
                        <b>Read Through before:</b> {!! date("d M Y", strtotime($lesson->due_date)) !!}
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
