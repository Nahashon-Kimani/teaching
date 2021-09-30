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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Ends the section content -->
@endsection