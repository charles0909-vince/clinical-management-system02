<div class="w-64 bg-white shadow-md h-screen">
    <div class="p-4">
        <h2 class="text-lg font-bold">Clinical Management System</h2>
    </div>
    <ul class="mt-6">
        <li>
            <a href="{{ route('dashboard') }}" class="flex items-center p-4 text-gray-700 hover:bg-gray-200">
                <i class="fas fa-tachometer-alt"></i>
                <span class="ml-2">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('patients.index') }}" class="flex items-center p-4 text-gray-700 hover:bg-gray-200">
                <i class="fas fa-user-injured"></i>
                <span class="ml-2">Patients</span>
            </a>
        </li>
        <li>
            <a href="{{ route('doctors.index') }}" class="flex items-center p-4 text-gray-700 hover:bg-gray-200">
                <i class="fas fa-user-md"></i>
                <span class="ml-2">Doctors</span>
            </a>
        </li>
        <li>
            <a href="{{ route('appointments.index') }}" class="flex items-center p-4 text-gray-700 hover:bg-gray-200">
                <i class="fas fa-calendar-check"></i>
                <span class="ml-2">Appointments</span>
            </a>
        </li>
        <li>
            <a href="{{ route('prescriptions.index') }}" class="flex items-center p-4 text-gray-700 hover:bg-gray-200">
                <i class="fas fa-file-prescription"></i>
                <span class="ml-2">Prescriptions</span>
            </a>
        </li>
    </ul>
</div>
