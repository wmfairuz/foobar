@extends('layouts.docs')

@section('title', 'Patient List')
@section('page-title', 'Patient List')
@section('action-button')
    <a href="{{ route('patients.create') }}" class="btn btn-primary">Add New Patient</a>
@endsection

@section('content')
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Ward</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patient as $patient)
                <tr>
                    <th scope="row">{{ $patient->id }}</th>
                    <td style="white-space: nowrap;">{{ $patient->name }}</td>
                    <td>
                        <!-- Delete Button Triggering Combined Modal -->
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $patient->id }}">Delete</button>

                        <!-- Combined Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{ $patient->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Delete Patient</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        Are you sure you want to delete this patient?
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <form style="display: inline;" action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('patient.edit', $patient->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('patient.show', $patient->id) }}" class="btn btn-info">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection