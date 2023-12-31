@extends('layouts.mylayout')

@section('title', 'Edit Form')
@section('page-title','Edit Form')

@section('content')
    <form method="POST" action="{{ route('animals.update', ['animal' => $animal]) }}">
        @csrf
        @method('put')

        <!-- Name Input -->
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $animal->name }}" required>
        </div>

        <!-- Date Of Birth Input -->
        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="text" class="form-control" id="age" name="age" value="{{ $animal->age }}" required>
        </div>

        <!-- Sex Input -->
        <div class="mb-3">
            <label for="sex" class="form-label">Sex:</label>
            <input type="text" class="form-control" id="sex" name="sex" value="{{ $animal->sex }}" required>
        </div>

        <!-- Species Input -->
        <div class="mb-3">
            <label for="species" class="form-label">Species:</label>
            <input type="text" class="form-control" id="species" name="species" value="{{ $animal->species }}" required>
        </div>

        <div class="button-container">
            <a href="{{ route('animals.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
