<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Registrar.Patients.add');
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
            'contact' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female,Other',
            'age' => 'required|integer|min:0|max:150',
            'disease' => 'required|string|in:Diabetes,Hypertension,Asthma,Cardiovascular Disease,COVID-19,Cancer,Arthritis,Chronic Kidney Disease,Alzheimer\'s Disease,Influenza,Migraine,Other',
       
            'symptoms' => 'required|string',
        ]);
    
        // If validation passes, proceed to store the patient data
        Patient::create($validatedData);
    
        return redirect()->back()->with('success', 'Patient record created successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show()
    {
       $patients= Patient::all();
        return view('Registrar.Patients.show',compact('patients'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('Registrar.Patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female,Other',
            'age' => 'required|integer|min:0|max:150',
            'disease' => 'required|string|in:Diabetes,Hypertension,Asthma,Cardiovascular Disease,COVID-19,Cancer,Arthritis,Chronic Kidney Disease,Alzheimer\'s Disease,Influenza,Migraine,Other',
            'symptoms' => 'required|string',
        ]);

        // If validation passes, proceed to update the patient data
        Patient::find($id)->update($validatedData);

        return redirect()->route('patient.show')->with('success', 'Patient record updated successfully!');
    }


    public function profile()
    {
        return view('Registrar.Patients.profile', [
            'user' => Auth::user() // Pass the authenticated user to the view
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the patient by ID
        $patient = Patient::findOrFail($id);
        
        // Delete the patient
        $patient->delete(); // This will delete the record from the database
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Patient record deleted successfully!');
    }
    
}
