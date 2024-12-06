@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Total Patients</h2>
            <p class="text-2xl">{{ $totalPatients }}</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Total Doctors</h2>
            <p class="text-2xl">{{ $totalDoctors }}</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Total Appointments</h2>
            <p class="text-2xl">{{ $totalAppointments }}</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Total Prescriptions</h2>
            <p class="text-2xl">{{ $totalPrescriptions }}</p>
        </div>
    </div>
</div>
@endsection
