<!-- This is the main file to be extended -->
@extends('layouts.master')

<!-- Section where the code will be slotted: in the section content -->
@section('content')

<div class="container">
    <div class="col-sm-9 mx-auto">
        <form action="{{ route('lesson.store') }}" method="post">
            @csrf
            <!-- Lesson Name -->
            <div class="form-group required">
                <label for="name" class="control-label">Lesson Name</label>
                <input type="text" class="form-control" placeholder="Lesson Name" name="name">
                @error('name') <p class="text-danger">{{ $message }}</p> @enderror
            </div>

            <!-- Lesson Objectives -->
            <div class="form-group required">
                <label for="objectives" class="control-label">Lesson Objectives</label>
                <textarea name="objectives" class="form-control" rows="5"></textarea>
                @error('objectives') <p class="text-danger">{{ $message }}</p> @enderror
            </div>

            <!-- Lesson Level -->
            <div class="form-group required">
                <label for="name" class="control-label">Associated Unit</label>
                <select name="associated_unit" class="form-control">
                    <option disabled selected>-- Select Associated Unit --</option>
                    @foreach ($units as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Lesson Notes -->
            <div class="form-group required">
                <label for="name" class="control-label">Lesson Notes</label>
                <textarea name="lesson_notes" id="descriptipon" rows="10" class="form-control" 
                    placeholder="Lesson Notes"></textarea>
            </div>

            <a href="{{ route('lesson.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-success">Save Changes</button>

        </form>
    </div>
</div>

<!-- Ends the section content -->
@endsection