<?php

namespace App\Http\Controllers;

use App\Models\ContactformModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.Contacts.contact');
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Store the contact information in the database
        ContactformModel::create($request->all());

        return redirect()->route('contact.add')->with('success', 'Your message has been sent successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $contacts = ContactformModel::all(); // Find all contact messages
        return view('dashboard.Contacts.show', compact('contacts')); // Show the contact messages
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
     
        $contact = ContactformModel::find($id); // Find the contact message
        return view('dashboard.Contacts.edit', compact('contact')); // Show the edit form
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);
    
        // Find the contact by ID and update it
        $contact = ContactformModel::findOrFail($id);
        $contact->update($request->all());
    
        // Redirect with success message
        return redirect()->route('contact.show')->with('success', 'Contact updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = ContactformModel::findOrFail($id); // Find the contact message
        $contact->delete(); // Delete the contact message
        return redirect()->route('contact.show')->with('success', 'Contact message deleted successfully.');
    }
}
