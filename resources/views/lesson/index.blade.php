<!-- This is the main file to be extended -->
@extends('layouts.app')

<!-- Section where the code will be slotted: in the section content -->
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            {{-- Add new unit button  --}}
            <a href="{{ route('lesson.index') }}" class="btn btn-primary float-right">
                Add new Unit
            </a>

            {{-- table starts --}}
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Unit</th>
                    <th>Lesson Objectives</th>
                    <th>Created By</th>
                    <th colspan="3">Action</th>
                </thead>
                <tfoot>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Unit</th>
                    <th>Lesson Objectives</th>
                    <th>Created By</th>
                    <th colspan="3">Action</th>
                </tfoot>
                <tbody>
                  @forelse ($lessons as $key=>$lessons)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $lesson->name }}</td>
                        <td>{{ $lesson->units->name }}</td>
                        <td>{{ $lesson->objectives }}</td>
                        <td>{{ $lesson->created_by }}</td>
                        <td>
                            {{-- Edit Button --}}
                            <a href="{{ route('lesson.edit', $lesson->id) }}" class="btn btn-success px-5">
                                Edit Lesson
                            </a>
                        </td>
                        <td>
                            {{-- showing the lesson details --}}
                            <a href="{{ route('lesson.show', $lesson->id) }}" class="btn btn-info px-5">
                                Show Lesson
                            </a>
                        </td>
                        <td>
                            {{-- Delete Button --}}
                            <form action="{{ route('lesson.destroy', $lesson->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                  @empty
                      <tr>
                          <td colspan="6">
                              <p class="text-center">No Lesson Available</p>
                          </td>
                      </tr>
                  @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $lessons->links() !!}
            </div>
        </div>
    </div>
</div>

<!-- Ends the section content -->
@endsection