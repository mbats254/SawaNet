@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student Details</div>

                <div class="card-body">
                 Name: {!! $student_details->name !!}
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lessons</div>

                <div class="card-body">

                    @foreach($lessons as $child =>$values)
                    <b> Subject:</b> {!! $values->subject_name !!}<br/>


                    <b>Lesson:</b> {!! $values->lesson_title !!}<br/>


                    <br/><b>Instructions :</b><br/>
                    {!! $values->instructions !!}<br/><br/>


                    @if($values->lesson !== null)
                    <a href="{!! $values->lesson !!}">Download lesson Here</a><br/>
                @endif
                <b>Date to be Read Through: </b>{!! $date = date("d M Y", strtotime($values->due_date)) !!}<br/><br/>
<hr/>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Assignments</div>

                <div class="card-body">
                    @foreach($assignments as $child =>$values)
                    <b> Subject:</b> {!! $values->subject_name !!}<br/>

                    <br/><b>Instructions :</b><br/><br/>
                    {!! $values->instructions !!}<br/><br/>


                    @if($values->assignment !== null)
                    <a href="{!! $values->assignment !!}">Download Assignment Here</a><br/>

                               @endif

<b>Date Due: </b>{!! $date = date("d M Y", strtotime($values->due_date)) !!}<br/><br/>
<hr/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
