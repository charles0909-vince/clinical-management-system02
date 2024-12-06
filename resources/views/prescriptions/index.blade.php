@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Prescriptions</h1>
    <a href="{{ route('prescriptions.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Prescription</a>
    <div class="mt-4">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">ID</th>
                    <th class="py-2">Patient</th>
                    <th class="py-2">Doctor</th>
                    <th class="py-2">Medication</th>
                    <th class="py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prescriptions as $prescription)
                <tr>
                    <td class="py-2">{{ $prescription->id }}</td>
                    <td class="py-2">{{ $prescription->patient->first_name }} {{ $prescription->patient->last_name }}</td>
                    <td class="py-2">{{ $prescription->doctor->first_name }} {{ $prescription->doctor->last_name }}</td>
                    <td class="py-2">{{ $prescription->medication }}</td>
                    <td class="py-2">
                        <a href="{{ route('prescriptions.edit', $prescription->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('prescriptions.destroy', $prescription->id) }}" method="POST" class="inline-block">
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
