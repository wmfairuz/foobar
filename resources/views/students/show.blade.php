@extends('layouts.docs')

@section('title', 'Student Details')
@section('page-title', 'Student Details')

@section('content')
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>Name:</th>
                <td>{{ $student->name }}</td>
            </tr>
            <tr>
                <th>Student ID:</th>
                <td>{{ $student->student_id }}</td>
            </tr>
            <tr>
                <th>Class:</th>
                <td>{{ $student->class }}</td>
            </tr>
            <tr>
                <th>Course:</th>
                <td>{{ $student->course }}</td>
            </tr>
            <tr>
                <th>CGPA:</th>
                <td>{{ $student->cgpa }}</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-end"> <!-- Use flex utilities -->
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection