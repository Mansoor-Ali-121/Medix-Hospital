<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Patient;

use function Ramsey\Uuid\v1;
use App\Models\DoctormangModel;
use App\Models\AppointmentmangModel;
use App\Http\Controllers\WebController;

class Controller extends WebController
{

    // public function __construct()
    // {
    //     $this->middlware('admin');
    // }
    public function index()
    {
        return view('website.website');
    }

    public function department()
    {
        return view('website.department');
    }

    public function admin()
{
    $admins = User::where('usertype', 'admin')->get(); // Adjust 'usertype' as per your user type field
    return view('dashboard.Admin.show', compact('admins'));
}

    
    public function dashboard()
    {

        $totalDoctors = DoctormangModel::count(); // Assuming 'DoctormangModel' is your model for doctors

      // Other logic you might have already for your dashboard
    $totalPatients = Patient::count(); // Assuming 'Patient' is your model for patients

    // Pass $totalPatients along with any other data you already send to the view
    return view('maindashboard', compact('totalPatients','totalDoctors'));
    }
    
    public function dashappointment(){

        $appointments = AppointmentmangModel::with('doctor')
        ->whereDate('date', now()->format('Y-m-d'))
        ->get();


    return view('dappointments',compact('appointments'));
    }
    
}
