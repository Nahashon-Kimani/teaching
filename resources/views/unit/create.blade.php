<!-- This is the main file to be extended -->
@extends('layouts.master')

<!-- Section where the code will be slotted: in the section content -->
@section('content')

<div class="container">
    <div class="col-sm-9 mx-auto">
        <form action="{{ route('store-unit') }}" method="post">
            @csrf
            <!-- Unit Name -->
            <div class="form-group required">
                <label for="name" class="control-label">Unit Name</label>
                <input type="text" class="form-control" placeholder="Unit Name" name="name">
                @error('name') <p class="text-danger">{{ $message }}</p> @enderror
            </div>

            <!-- Unit duration -->
            <div class="form-group required">
                <label for="duration" class="control-label">Unit duration</label>
                <input type="number" class="form-control" placeholder="Unit Duration" name="duration">
                @error('duration') <p class="text-danger">{{ $message }}</p> @enderror
            </div>

            <!-- Unit Level -->
            <div class="form-group required">
                <label for="name" class="control-label">Associated Course</label>
                <select name="course_id" class="form-control">
                    <option disabled selected>-- Select Associated Course --</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Unit Deescription -->
            <div class="form-group required">
                <label for="name" class="control-label">Unit Outline</label>
                <textarea name="unit_outline" id="descriptipon" rows="5" class="form-control" 
                    placeholder="Unit Outline"></textarea>
            </div>

            <a href="{{ route('unit') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-success">Save Changes</button>

        </form>
    </div>
</div>

<!-- Ends the section content -->
@endsection