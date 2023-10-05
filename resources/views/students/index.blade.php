@extends('layouts.docs')

@section('title', 'Studentt List')
@section('page-title', 'Student List')
@section('action-button')
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>
@endsection

@section('content')
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td style="white-space: nowrap;">{{ $student->name }}</td>
                    <td>
                        <!-- Delete Button Triggering Combined Modal -->
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $student->id }}">Delete</button>

                        <!-- Combined Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{ $student->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Delete Student</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        Are you sure you want to delete this student?
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <form style="display: inline;" action="{{ route('students.destroy', $student->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
