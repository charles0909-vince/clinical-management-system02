@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Prescription</h1>
    <form action="{{ route('prescriptions.update', $prescription->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="patient_id" class="block text-gray-700">Patient</label>
            <select name="patient_id" id="patient_id" class="mt-1 block w-full" required>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $prescription->patient_id == $patient->id ? 'selected' : '' }}>
                        {{ $patient->first_name }} {{ $patient->last_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="doctor_id" class="block text-gray-700">Doctor</label>
            <select name="doctor_id" id="doctor_id" class="mt-1 block w-full" required>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{ $prescription->doctor_id == $doctor->id ? 'selected' : '' }}>
                        {{ $doctor->first_name }} {{ $doctor->last_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="medication" class="block text-gray-700">Medication</label>
            <input type="text" name="medication" id="medication" class="mt-1 block w-full" value="{{ $prescription->medication }}" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
