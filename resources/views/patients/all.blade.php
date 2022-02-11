@extends('layouts.app')

@section('title', 'All Patients')

@section('heading', 'All Patients')

@section('content')
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
        <tr>
            <th scope="col" class="col-md-4">Person Id</th>
            <th scope="col" class="col-md-4">Name</th>
            <th scope="col" class="col-md-4">Surname</th>
            <th scope="col" class="col-md-4">Created At</th>
            <th scope="col" class="col-md-4"></th>
            <th scope="col" class="col-md-4"></th>
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
                <td>
                    {{ \Carbon\Carbon::parse($patient->created_at)->format('d.m.Y') }}
                </td>
                <td>
                    <form method="post" action="/patients/{{ $patient->id }}">
                        @csrf
                        @method('delete')
                        <div class="mb-3">
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Soft delete patient\'s data?')">
                                Soft delete
                            </button>
                        </div>
                    </form>
                </td>
                <td>
                    <form method="post" action="/patients/trashed/{{ $patient->id }}">
                        @csrf
                        @method('delete')
                        <div class="mb-3">
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Force delete patient\'s data?')">
                                Force delete
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mb-3">
        <a href="/" class="btn btn-primary" role="button">Home</a>
    </div>
@endsection
