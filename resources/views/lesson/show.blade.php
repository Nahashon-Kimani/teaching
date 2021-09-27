<!-- This is the main file to be extended -->
@extends('layouts.master')

<!-- Section where the code will be slotted: in the section content -->
@section('content')


<div class="container">
    <div class="row">
        {{-- First section starts --}}
        <div class="col-md-9">
            <div class="card">
                {{-- Card header --}}
                <div class="card-header bg-info text-white text-center">
                    <p class="h4">{{ $lesson->name }}</p>
                    <p class="h5">{{ $lesson->unit_id }}</p>
                </div>

                {{-- Card-body --}}
                <div class="card-body">
                    <p class="lead text-info">
                        {{ $lesson->objectives }}
                    </p>

                    <p>
                        {!! $lesson->lesson_notes !!}
                    </p>
                </div>
            </div>
        </div>
        {{-- First section ends --}}

        {{-- Second Column starts --}}
        <div class="col-md-3">
            {{-- First Card --}}
            <div class="card">
                <div class="card-header bg-success text-white">
                    Lesson Created By
                </div>
                <div class="card-body">
                    {{ $lesson->created_by }}
                </div>
            </div>

            {{-- Second Card --}}
            <div class="card">
                <div class="card-header bg-info text-white">
                    Lesson Status
                </div>
                <div class="card-body">
                    <p><span class="lead">Created On: </span>{{ $lesson->created_at->toFormattedDateString() }}</p>
                    <p><span class="lead">Updated On: </span>{{ $lesson->updated_at->toFormattedDateString() }}</p>
                </div>
            </div>
        </div>
        {{-- Second Column starts --}}

    </div>
</div>

@endsection