@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Doctors</h1>
    <a href="{{ route('doctors.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Doctor</a>
    <div class="mt-4">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">ID</th>
                    <th class="py-2">Name</th>
                    <th class="py-2">Specialization</th>
                    <th class="py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                <tr>
                    <td class="py-2">{{ $doctor->id }}</td>
                    <td class="py-2">{{ $doctor->first_name }} {{ $doctor->last_name }}</td>
                    <td class="py-2">{{ $doctor->specialization }}</td>
                    <td class="py-2">
                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="inline-block">
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
