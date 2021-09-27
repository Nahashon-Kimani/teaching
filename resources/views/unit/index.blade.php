<!-- This is the main file to be extended -->
@extends('layouts.master')

<!-- Section where the code will be slotted: in the section content -->
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            {{-- Add new unit button  --}}
            <a href="{{ route('create-unit') }}" class="btn btn-primary float-right">
                Add new Unit
            </a>

            {{-- table starts --}}
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Unit Duration</th>
                    <th colspan="2">Action</th>
                </thead>
                <tfoot>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Unit Duration</th>
                    <th colspan="2">Action</th>
                </tfoot>
                <tbody>
                  @forelse ($units as $key=>$unit)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $unit->name }}</td>
                        <td>{{ $unit->courses->name }}</td>
                        <td>{{ $unit->unit_duration }}</td>
                        <td>
                            {{-- Edit Button --}}
                            <a href="{{ route('edit-unit', $unit->id) }}" class="btn btn-success px-5">
                                Edit Unit
                            </a>
                        </td>
                        <td>
                            {{-- Delete Button --}}
                            <form action="{{ route('delete-unit', $unit->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                  @empty
                      <tr>
                          <td colspan="6">
                              <p class="text-center">No Unit Available</p>
                          </td>
                      </tr>
                  @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Ends the section content -->
@endsection