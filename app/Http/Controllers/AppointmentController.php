<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppointmentmangModel;
use App\Models\DoctormangModel;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.Appointment.appointment');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|string|max:15',
            'doctor' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
            'message' => 'nullable|string|max:500',
        ]);

        AppointmentmangModel::create($validatedData);

        return redirect()->back()->with('success', 'Appointment submitted successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $appointments = AppointmentmangModel::all();
        return view('dashboard.Appointment.show', compact('appointments'));
    }


    public function doctor()
    {
        return $this->belongsTo(DoctormangModel::class, 'doctor'); // 'doctor' should be the column name in appointments
    }
    
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $appointment = AppointmentmangModel::find($id);
        return view('dashboard.Appointment.edit', compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
     {
         $appointment = AppointmentmangModel::find($id);
         if ($appointment) {
             $appointment->is_confirmed = true; // Set confirmed status
             $appointment->save();
         }
     
         return redirect()->back()->with('success', 'Appointment confirmed!');
     }
     
     public function destroy( $id)
     {
         $appointment = AppointmentmangModel::find($id);
         if ($appointment) {
             $appointment->delete();
         }
     
         return redirect()->back()->with('success', 'Appointment deleted!');
     }


}
