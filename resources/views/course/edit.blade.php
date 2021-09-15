<!-- This is the main file to be extended -->
@extends('layouts.app')

<!-- Section where the code will be slotted: in the section content -->
@section('content')

<div class="container">
    <div class="col-sm-9 mx-auto">
        <form action="{{ route('update-course') }}" method="post">
            @csrf
            @method('PUT')
            <!-- Course Name -->
            <div class="form-group required">
                <label for="name" class="control-label">Course Name</label>
                <input type="text" class="form-control" placeholder="Course Name" value="{{ $course->name }}" name="name">
                @error('name') <p class="text-danger">{{ $message }}</p> @enderror
            </div>

            <!-- Course duration -->
            <div class="form-group required">
                <label for="duration" class="control-label">Course duration</label>
                <input type="number" class="form-control" placeholder="Course Duration" value="{{ $course->duration }}" name="duration">
                @error('duration') <p class="text-danger">{{ $message }}</p> @enderror
            </div>

            <!-- Course Level -->
            <div class="form-group required">
                <label for="name" class="control-label">Course Level</label>
                <select name="course_level" class="form-control">
                    @if ($course->course_level == 1)
                        <option value="1">Certificate</option>
                    @elseif ($course->course_level == 2)
                        <option value="2">Diploma</option>
                    @else
                        <option value="3">Masters Program</option>
                    @endif
                    <option disabled>________________________</option>
                    <option value="1">Certificate</option>
                    <option value="2">Diploma</option>
                    <option value="3">Masters Program</option>
                </select>
            </div>

            <!-- Course Deescription -->
            <div class="form-group required">
                <label for="name" class="control-label">Course Description</label>
                <textarea name="description" id="descriptipon" rows="5" class="form-control" placeholder="Course Description">
                    {{ $course->description }}
                </textarea>
            </div>

            <a href="{{ route('course') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-success">Update Course</button>

        </form>
    </div>
</div>

<!-- Ends the section content -->
@endsection