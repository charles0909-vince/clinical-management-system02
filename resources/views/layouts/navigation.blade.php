<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img class="h-8 w-8" src="{{ ('images/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('patients.index')" :active="request()->routeIs('patients.index')">
                        {{ __('Patients') }}
                    </x-nav-link>
                    <x-nav-link :href="route('doctors.index')" :active="request()->routeIs('doctors.index')">
                        {{ __('Doctors') }}
                    </x-nav-link>
                    <x-nav-link :href="route('appointments.index')" :active="request()->routeIs('appointments.index')">
                        {{ __('Appointments') }}
                    </x-nav-link>
                    <x-nav-link :href="route('prescriptions.index')" :active="request()->routeIs('prescriptions.index')">
                        {{ __('Prescriptions') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
</nav>
