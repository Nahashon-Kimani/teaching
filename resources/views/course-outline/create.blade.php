<!-- This is the main file to be extended -->
@extends('layouts.app')

<!-- Section where the code will be slotted: in the section content -->
@section('content')

<div class="container">
    <div class="col-sm-9 mx-auto">
        <form action="{{ route('course-outline.store') }}" method="post">
            @csrf
           
            <!-- Associated Course  -->
            <div class="form-group required">
                <label for="name" class="control-label">Associated Course</label>
                <select name="course_id" class="form-control">
                    <option disabled selected>-- Select Associated Course  --</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->name }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Course Deescription -->
            {{-- Try implementing WYSIWYG text editors such as Summernote of TinyMCE --}}
            <div class="form-group required">
                <label for="name" class="control-label">Course Outline</label>
                <textarea name="description" id="descriptipon" rows="5" class="form-control" 
                    placeholder="Course Description"></textarea>
            </div>

            <a href="{{ route('course-outline.index') }}" class="btn btn-danger px-5">Cancel</a>
            <button type="submit" class="btn btn-success px-5">Save Changes</button>

        </form>
    </div>
</div>

<!-- Ends the section content -->
@endsection