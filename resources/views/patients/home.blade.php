@extends('layouts.app')

@section('title', 'Home')

@section('heading', 'Home')

@section('content')
    <form method="get" action="/" id="formID">
        <div class="mb-3">
            <label for="id" class="form-label">Person Id</label>
            <input type="text" class="form-control w-50" id="id" name="id" maxlength="12" required
                   value="{{ old('id') }}">
        </div>
        @error('id')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </form>
    @if(isset($patients))
        @if($patients->count() > 0)
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                <tr>
                    <th scope="col" class="col-md-4">Person Id</th>
                    <th scope="col" class="col-md-4">Name</th>
                    <th scope="col" class="col-md-4">Surname</th>
                </tr>
                </thead>
                <tbody>
                @foreach($patients as $patient)
                    <tr>
                        <td>
                            {{ $patient->id }}
                        </td>
                        <td>
                            {{ $patient->name }}
                        </td>
                        <td>
                            {{ $patient->surname }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>No patients found</p>
        @endif
    @endif
    <div class="mb-3">
        <a href="/all-patients" class="btn btn-primary" role="button">All Patients</a>
    </div>
    <div class="mb-3">
        <a href="/create1" class="btn btn-primary" role="button">Create a Patient</a>
    </div>
@endsection
