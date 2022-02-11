@extends('layouts.app')

@section('title', 'Create a Patient (1)')

@section('heading', 'Create a Patient (1)')

@section('content')
    <form method="post" action="/create1">
        @csrf
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control w-50" id="date" name="date" required value="{{ old('date') }}">
        </div>
        @error('date')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <label for="id" class="form-label">Person Id</label>
            <input type="text" class="form-control w-50" id="id" name="id" maxlength="12" required
                   value="{{ old('id') }}">
        </div>
        @error('id')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control w-50" id="name" name="name" maxlength="50" required
                   value="{{ old('name') }}">
        </div>
        @error('name')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" class="form-control w-50" id="surname" name="surname" maxlength="50" required
                   value="{{ old('surname') }}">
        </div>
        @error('surname')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <label for="complaintsAndHistory" class="form-label">Complaints and History</label>
            <textarea id="complaintsAndHistory" class="form-control w-50" name="complaintsAndHistory" rows="4"
                      maxlength="2000" required>{{ old('complaintsAndHistory') }}</textarea>
        </div>
        @error('complaintsAndHistory')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <label for="comorbidities" class="form-label">Comorbidities</label>
            <textarea id="comorbidities" class="form-control w-50" name="comorbidities" maxlength="200"
                      required>{{ old('comorbidities') }}</textarea>
        </div>
        @error('comorbidities')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <label for="drugIntolerance" class="form-label">Drug Intolerance and Allergies</label>
            <textarea id="drugIntolerance" class="form-control w-50" name="drugIntolerance" maxlength="300"
                      required>{{ old('drugIntolerance') }}</textarea>
        </div>
        @error('drugIntolerance')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <label for="noseForm" class="form-label">Nose Form</label>
            <select class="form-select w-50" name="noseForm" id="noseForm" required>
                <option value="straight" {{ old('noseForm') === 'straight' ? 'selected' :'' }}>Straight</option>
                <option value="deformed" {{ old('noseForm') === 'deformed' ? 'selected' :'' }}>Deformed</option>
            </select>
        </div>
        @error('noseForm')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Continue</button>
        </div>
    </form>
    <div class="mb-3">
        <a href="/" class="btn btn-danger" role="button">Discard</a>
    </div>
@endsection
