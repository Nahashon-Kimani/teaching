<!-- This is the main file to be extended -->
@extends('layouts.master')

<!-- Section where the code will be slotted: in the section content -->
@section('content')

<div class="row">
    <div class="col-lg-9 mx-auto">
        <div class="card">
            <div class="card-header text-center p-5 bg-info">
                <h2>Course Name: {{ $course->name }}</h2>
            </div>

            <div class="card-body">
                <p>
                    {!! $course->description !!}
                </p>
            </div>
            <div class="card-footer text-center">
                <p><i>Course Created on {{ $course->created_at->toFormattedDateString() }}</i></p>
            </div>
        </div>
    </div>


</div>


@endsection