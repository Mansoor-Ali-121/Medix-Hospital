<?php

namespace App\Http\Controllers;

use App\Models\DoctormangModel;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.Doctors.add');
    }

    public function display(){
        $doctors = DoctormangModel::all();
        return view('website.doctor', compact('doctors'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:doctors,email',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:3000',
            'timing' => [
                'required',
                'string',
                'in:12:00 AM - 02:00 AM,01:00 AM - 03:00 AM,02:00 AM - 04:00 AM,03:00 AM - 05:00 AM,04:00 AM - 06:00 AM,05:00 AM - 07:00 AM,06:00 AM - 08:00 AM,07:00 AM - 09:00 AM,08:00 AM - 10:00 AM,09:00 AM - 11:00 AM,10:00 AM - 12:00 PM,11:00 AM - 01:00 PM,12:00 PM - 02:00 PM,01:00 PM - 03:00 PM,02:00 PM - 04:00 PM,03:00 PM - 05:00 PM,04:00 PM - 06:00 PM,05:00 PM - 07:00 PM,06:00 PM - 08:00 PM,07:00 PM - 09:00 PM,08:00 PM - 10:00 PM,09:00 PM - 11:00 PM,10:00 PM - 12:00 AM',
            ],
            'speciality' => 'required|in:Cardiology,Dermatology,Neurology,Orthopedics,Pediatrics,Psychiatry,Radiology,Surgery,Urology,Gynecology',
            'department_id' => 'required|in:1,2,3',
            'qualification' => 'required|string',
        ]);

        // Handle the picture upload using the move method
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Doctor/picture'), $filename);
            $validatedData['picture'] = $filename; // Store the relative path
        }

        // Create the new doctor record
        DoctormangModel::create($validatedData);
        
        // Redirect with a success message
        return redirect()->route('doctor.add')->with('success', 'Doctor added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $doctors = DoctormangModel::all(); // Find all doctors
        return view('dashboard.Doctors.show', compact('doctors')); // Show the doctors' details
    }


// Edit the personal information
    public function edit($id)
    {
        $doctor = DoctormangModel::find($id); // Find the doctor by ID
        return view('dashboard.Doctors.edit', compact('doctor')); // Show the edit form
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'timing' => [
                'required',
                'string',
                'in:12:00 AM - 02:00 AM,01:00 AM - 03:00 AM,02:00 AM - 04:00 AM,03:00 AM - 05:00 AM,04:00 AM - 06:00 AM,05:00 AM - 07:00 AM,06:00 AM - 08:00 AM,07:00 AM - 09:00 AM,08:00 AM - 10:00 AM,09:00 AM - 11:00 AM,10:00 AM - 12:00 PM,11:00 AM - 01:00 PM,12:00 PM - 02:00 PM,01:00 PM - 03:00 PM,02:00 PM - 04:00 PM,03:00 PM - 05:00 PM,04:00 PM - 06:00 PM,05:00 PM - 07:00 PM,06:00 PM - 08:00 PM,07:00 PM - 09:00 PM,08:00 PM - 10:00 PM,09:00 PM - 11:00 PM,10:00 PM - 12:00 AM',
            ],
            'speciality' => 'required|string|max:255',
            'department_id' => 'required|in:1,2,3',
            'qualification' => 'required|string',
        ]);

        $doctor = DoctormangModel::findOrFail($id); // Find the doctor by ID

        // Update the picture if a new one is uploaded
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Doctor/picture'), $filename);
            $validatedData['picture'] =  $filename; // Store the relative path
        }

        // Update the doctor record
        $doctor->update($validatedData);

        // Redirect with a success message
        return redirect()->route('doctor.show')->with('success', 'Doctor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doctor = DoctormangModel::findOrFail($id); // Find the doctor by ID
        $doctor->delete(); // Delete the doctor record

        // Redirect with a success message
        return redirect()->route('doctor.show')->with('success', 'Doctor deleted successfully.');
    }
}
