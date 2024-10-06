<?php

namespace App\Http\Controllers;

use App\Models\DepartmentmangModel;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('dashboard.Department.add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function display()
    {
        $departments = DepartmentmangModel::all();
        return view('website.department', compact('departments'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data= $request->validate([
            'name' => 'required|string|max:255', // Validate input
            'description' => 'required|string|max:255', // Validate input
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:3000',
        ]);

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Departments/picture'), $filename);
            $data['picture'] =  $filename; // Store the relative path
        }

        DepartmentmangModel::create($data); // Create department
        return redirect()->route('department.add')->with('success', 'Department created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $departments = DepartmentmangModel::all(); // Fetch department by ID
        return view('dashboard.Department.show', compact('departments')); // Pass to view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {       
       $department= DepartmentmangModel::find($id);
         return view('dashboard.Department.edit',compact('department')); // Pass to edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255', // Validate input
        ]);

        $department = DepartmentmangModel::findOrFail($id); // Find the department
        $department->update($request->all()); // Update department
        return redirect()->route('department.show')->with('success', 'Department updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = DepartmentmangModel::findOrFail($id); // Find the department
        $department->delete(); // Delete department
        return redirect()->route('department.show')->with('success', 'Department deleted successfully.');
    }
}
