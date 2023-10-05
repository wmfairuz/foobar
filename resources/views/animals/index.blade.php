@extends('layouts.blade')

@section('title', 'Animal List')

@section('page-title', 'ANIMAL LIST')
<!-- Include Bootstrap JavaScript from the CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- JavaScript function to submit the delete form -->
<script>

    let deleteFormAction = ''; // Initialize the action URL

    function openDeleteModal(action) {
        // Set the action URL for the delete form
        deleteFormAction = action;
        // Show the Bootstrap modal
        $('#deleteModal').modal('show');
    }

    function submitDeleteForm() {
        // Submit the delete form
        document.querySelector('#deleteModal form').submit();
        // Close the modal
        $('#deleteModal').modal('hide');
    }
</script>
@section('action-button')
    <a href="{{ route('animals.create')}}" class="btn btn-primary">Add Animal</a>
@endsection

@section('content')
<table class="table table-success table-striped-columns">
    <thead>
        <tr>
            <!-- Use the 'col' class to make the column expand -->
            <th scope="col" class="col-8">Animals Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($animals as $animal)
                <tr>
                    <td style="white-space: nowrap;">{{ $animal->name }}</td>
                    <td>
                        <!-- Delete Button Triggering Combined Modal -->
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $animal->id }}">Delete</button>

                        <!-- Combined Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{ $animal->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        Are you sure you want to delete this product?
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <form style="display: inline;" action="{{ route('animals.destroy', $animal->id) }}" method="POST">
                                        @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('animals.edit', $animal->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('animals.show', $animal->id) }}" class="btn btn-info">Show</a>
                    </td>
                </tr>
            @endforeach

    </tbody>
</table>
@endsection