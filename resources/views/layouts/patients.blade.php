@extends('app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Patients</h1>
    <div class="flex justify-end mb-4">
        <a href="{{ route('patients.create') }}" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Add New Patient</a>
    </div>
    <div class="bg-white shadow-md rounded my-6">
        <table class="min-w-max w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Age</th>
                    <th class="py-3 px-6 text-center">Gender</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($patients as $patient)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <div class="flex items-center">
                            <span class="font-medium">{{ $patient->name }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left">
                        <div class="flex items-center">
                            <span>{{ $patient->age }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>{{ $patient->gender }}</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <a href="{{ route('patients.show', $patient->id) }}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 8H9m4-16H9m4 8H9m4 
