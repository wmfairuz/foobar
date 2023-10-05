@extends('patients.docs')

@section('title', 'Patient Details')
@section('page-title', 'Patient Details')

@section('content')
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>Name:</th>
                <td>{{ $patient->name }}</td>
            </tr>
            <tr>
                <th>Quantity:</th>
                <td>{{ $patient->age }}</td>
            </tr>
            <tr>
                <th>Price:</th>
                <td>{{ $patient->ward }}</td>
            </tr>
            <tr>
                <th>Weight:</th>
                <td>{{ $patient->weight }}</td>
            </tr>
            <tr>
                <th>Details:</th>
                <td>{{ $patient->disease }}</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-end"> <!-- Use flex utilities -->
        <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection