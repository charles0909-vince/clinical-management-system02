@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Appointments</h1>
    <a href="{{ route('appointments.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Appointment</a>
    <div class="mt-4">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">ID</th>
                    <th class="py-2">Patient</th>
                    <th class="py-2">Doctor</th>
                    <th class="py-2">Date</th>
                    <th class="py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                <tr>
                    <td class="py-2">{{ $appointment->id }}</td>
                    <td class="py-2">{{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}</td>
                    <td class="py-2">{{ $appointment->doctor->first_name }} {{ $appointment->doctor->last_name }}</td>
                    <td class="py-2">{{ $appointment->date }}</td>
                    <td class="py-2">
                        <a href="{{ route('appointments.edit', $appointment->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="inline-block">
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
