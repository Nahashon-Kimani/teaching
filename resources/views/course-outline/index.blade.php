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
                    <th>Associated Course</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th colspan="2">Action</th>
                </thead>
                <tfoot>
                    <th>Id</th>
                    <th>Associated Course</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th colspan="2">Action</th>
                </tfoot>
                <tbody>
                    @foreach ($courseOutlines as $key=>$courseOutline)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            {{-- 
                                Getting Course Name
                                Here we need to create a relationship called courses to access the name 
                                Back to courseOutline Model, create a relationship called courses and
                                Reverse it in the Course Model: 
                                Remember: a. One course has One CourseOutline
                                          b. A courseOutline BelongsTo a Course
                            --}}
                            <td>{{ $courseOutline->courses->name }}</td>
                            {{-- 
                                Getting the name of the courseOutline Author. 
                                Here we need to create a relationship called users to access the author's name
                                Back to courseOutline Model, create a relationship called users and
                                Reverse it in the User Model: 
                                Remember: a. One user Has Many CourseOutline(s)
                                          b. A CourseOutline BelongsTo a User
                            --}}
                            <td>{{ $courseOutline->users->name }}</td>

                            <td>{{ $courseOutline->created_at->toFormattedDateString() }}</td>
                            <td>
                                <a href="{{ route('course-outline.edit', $courseOutline->id) }}" class="btn btn-success px-5">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('course-outline.destroy', $courseOutline->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
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