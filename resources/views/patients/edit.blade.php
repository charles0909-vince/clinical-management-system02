@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Patient</h1>
    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="first_name" class="block text-gray-700">First Name</label>
            <input type="text" name="first_name" id="first_name" class="mt-1 block w-full" value="{{ $patient->first_name }}" required>
        </div>
        <div class="mb-4">
            <label for="last_name" class="block text-gray-700">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="mt-1 block w-full" value="{{ $patient->last_name }}" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full" value="{{ $patient->email }}" required>
        </div>
        <div class="mb-4">
            <label for="date_of_birth" class="block text-gray-700">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="mt-1 block w-full" value="{{ $patient->date_of_birth }}" required>
        </div>
        <div class="mb-4">
            <label for="gender" class="block text-gray-700">Gender</label>
            <select name="gender" id="gender" class="mt-1 block w-full" required>
                <option value="male" {{ $patient->gender == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $patient->gender == 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-gray-700">Phone</label>
            <input type="text" name="phone" id="phone" class="mt-1 block w-full" value="{{ $patient->phone }}" required>
        </div>
        <div class="mb-4">
            <label for="address" class="block text-gray-700">Address</label>
            <textarea name="address" id="address" class="mt-1 block w-full" required>{{ $patient->address }}</textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
