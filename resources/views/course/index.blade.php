<!-- This is the main file to be extended -->
@extends('layouts.app')

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
                    <th colspan="2">Action</th>
                </thead>
                <tfoot>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Duration</th>
                    <th>Status</th>
                    <th>Course Level</th>
                    <th colspan="2">Action</th>
                </tfoot>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->duration }}</td>
                            <td>{{ $course->status }}</td>
                            <td>{{ $course->course_level }}</td>
                            <td>
                                <a href="{{ route('edit-course', $course->id) }}" class="btn btn-success px-5">
                                    Edit
                                </a>
                            </td>
                            <td>
                               Delete
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- Ends the section content -->
@endsection