@extends('patients.docs')

@section('title', 'Patient Form')


@section('content')
    <div class="card">
        <h1 class="text-center mt-4">Patient Form</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('patients.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Age:</label>
                    <input type="text" class="form-control" id="age" name="age" required>
                </div>

                <div class="mb-3">
                    <label for="ward" class="form-label">Ward:</label>
                    <input type="text" class="form-control" id="ward" name="ward" required>
                </div>

                <div class="mb-3">
                    <label for="weight" class="form-label">weight:</label>
                    <input type="text" class="form-control" id="weight" name="weight" required>
                </div>

                <div class="mb-3">
                    <label for="disease" class="form-label">Disease:</label>
                    <input type="text" class="form-control" id="disease" name="disease" required>
                </div>

                <div class="button-container mb-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection>