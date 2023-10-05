@extends('layouts.docs')

@section('title', 'Edit Student')
@section('page-title', 'Edit Student')

@section('content')
    <form method="POST" action="{{ route('students.update', ['student' => $student]) }}" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="student_id" class="form-label">Student ID:</label>
                    <input type="text" class="form-control" id="student_id" name="student_id" required>
                </div>

                <div class="mb-3">
                    <label for="class" class="form-label">Class:</label>
                    <input type="text" class="form-control" id="class" name="class" required>
                </div>

                <div class="mb-3">
                    <label for="course" class="form-label">Course:</label>
                    <input type="text" class="form-control" id="course" name="course" required>
                </div>

                <div class="mb-3">
                    <label for="cgpa" class="form-label">CGPA:</label>
                    <input type="text" class="form-control" id="cgpa" name="cgpa" required>
                </div>

                <div class="button-container mb-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
                </div>
    </form>
@endsection