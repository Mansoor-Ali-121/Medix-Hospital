<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use function Ramsey\Uuid\v1;

use App\Models\DoctormangModel;
use App\Models\AppointmentmangModel;

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
        // Fetch today's appointments
        // $appointments = AppointmentmangModel::with('doctor')
        //     ->whereDate('date', now()->format('Y-m-d'))
        //     ->get();
        // , compact('appointments'));
        return view('maindashboard');
    }
    
    public function dashappointment(){

        $appointments = AppointmentmangModel::with('doctor')
        ->whereDate('date', now()->format('Y-m-d'))
        ->get();


    return view('dappointments',compact('appointments'));
    }
    
}
