@extends('layouts.app')

@section('title', 'Animal Details')

<style>
        /* Custom CSS to style the form */
        .container {
            max-width: 400px; /* Limit the form's width for readability */
        }
        .form-group {
            margin-bottom: 20px; /* Add some spacing between form elements */
        }
        /* Center the button horizontally and vertically */
        .center-button {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 15vh;
        }
    </style>
@section('content')
<div class="container">
    <h1 class="text-center mt-4">Animal Details</h1>
    <form action="{{ route('animals.store') }}" method="POST">
        <!-- Form fields go here -->

        <div class="form-group">
            <label for="animal">Name</label>
            <span class="form-control">{{ $animal->name }}</span>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date Of Birth</label>
            <span class="form-control">{{ $animal->date_of_birth }}</span>
        </div>

        <div class="form-group">
            <label for="sex">Sex</label>
            <span class="form-control">{{ $animal->sex }}</span>
        </div>

        <div class="form-group">
            <label for="species">Species</label>
            <span class="form-control">{{ $animal->species }}</span>
        </div>
    </form>

    <!-- Center the "Back" button -->
    <div class="center-button">
        <a href="{{ route('animals.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection