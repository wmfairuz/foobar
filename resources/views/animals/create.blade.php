@extends('layouts.mylayout')
@section('title', 'Create Form')
<style>
        /* Custom CSS to position the button at the bottom right */
        .button-container {
            position: absolute;
            bottom: 200px; /* Adjust the distance from the bottom as needed */
            right: 100px; /* Adjust the distance from the right as needed */
            display: flex;
            gap: 10px; /* Adjust the spacing between buttons */
        }
</style>

@section('content')
<div class="container">


    <form method="POST" action="{{ route('animals.store') }}">
        @csrf

        <!-- Name Input -->
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name" required>
        </div>

        <!-- Date Of Birth Input -->
        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="text" class="form-control" id="age" name="age" placeholder="Enter the animal age" required>
        </div>

        <!-- Sex Input -->
        <div class="mb-3">
            <label for="sex" class="form-label">Sex:</label>
            <input type="text" class="form-control" id="sex" name="sex" placeholder="Enter the animal sex" required>
        </div>

        <!-- Species Input -->
        <div class="mb-3">
            <label for="species" class="form-label">Species:</label>
            <input type="text" class="form-control" id="species" name="species" placeholder="Enter the animal species" required>
        </div>

        <!-- Submit Button -->
        <div class="button-container">
            <a href="{{ route('animals.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
@endsection
