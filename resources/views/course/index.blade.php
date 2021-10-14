<!-- This is the main file to be extended -->
@extends('layouts.master')

<!-- Section where the code will be slotted: in the section content -->
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            Number of Courses: {{ count($courses) }}
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Duration</th>
                    <th>Status</th>
                    <th>Course Level</th>
                    <th colspan="3">Action</th>
                </thead>
                <tfoot>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Duration</th>
                    <th>Status</th>
                    <th>Course Level</th>
                    <th colspan="3">Action</th>
                </tfoot>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->duration }} Months</td>
                            <td>
                                @if ($course->status == 1)
                                    Active
                                @else
                                    Inactive
                                @endif
                            </td>
                            <td>
                                @if ($course->course_level== 1)
                                    Certificate
                                @elseif ($course->course_level == 2)
                                    Diploma
                                @else
                                    Masters
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('edit-course', $course->id) }}" class="btn btn-success px-5">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('show-course-details', $course->id) }}" class="btn btn-info px-3">
                                    Show
                                </a>
                            </td>
                            <td>
                               <form action="{{ route('delete-course', $course->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger px-5">Delete</button>
                               </form>
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                                Edit
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Ends the section content -->


{{-- Edit Modal --}}
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT COURSE DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('update-course', $course->id) }}" method="post" id="edit-form">
            @csrf
            @method('PUT')
            <!-- Course Name -->
            <div class="form-group required">
                <label for="name" class="control-label">Course Name</label>
                <input type="text" class="form-control" placeholder="Course Name" value="{{ $course->name }}" name="name" id="name">
                @error('name') <p class="text-danger">{{ $message }}</p> @enderror
            </div>

            <!-- Course duration -->
            <div class="form-group required">
                <label for="duration" class="control-label">Course duration</label>
                <input type="number" class="form-control" placeholder="Course Duration" value="{{ $course->duration }}" name="duration" name="duration">
                @error('duration') <p class="text-danger">{{ $message }}</p> @enderror
            </div>

            <!-- Course Level -->
            <div class="form-group required">
                <label for="name" class="control-label">Course Level</label>
                <select name="course_level" class="form-control" id="course_level">
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
                <textarea name="description" id="descriptipon" rows="5" class="form-control" placeholder="Course Description" id="description">
                    {{ $course->description }}
                </textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
        <button type="submit" class="btn btn-success">Update Course</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        var table = $('')
    });
</script>


@endsection