<?php

namespace app\Http\Controllers;

use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Prescription;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPatients = Patient::count();
        $totalDoctors = Doctor::count();
        $totalAppointments = Appointment::count();
        $totalPrescriptions = Prescription::count();

        return view('dashboard', compact('totalPatients', 'totalDoctors', 'totalAppointments', 'totalPrescriptions'));
    }
}
