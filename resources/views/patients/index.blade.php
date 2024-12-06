@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Patients</h1>
    <a href="{{ route('patients.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Patient</a>
    <div class="mt-4">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">ID</th>
                    <th class="py-2">Name</th>
                    <th class="py-2">Email</th>
                    <th class="py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patients as $patient)
                <tr>
                    <td class="py-2">{{ $patient->id }}</td>
                    <td class="py-2">{{ $patient->first_name }} {{ $patient->last_name }}</td>
                    <td class="py-2">{{ $patient->email }}</td>
                    <td class="py-2">
                        <a href="{{ route('patients.edit', $patient->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
