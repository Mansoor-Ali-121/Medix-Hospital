<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebController extends Controller
{
    public function index()
    {
        return view('dashboard.Auth.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('website'); // Redirect to intended route or dashboard
        }

        return $this->sendFailedLoginResponse($request);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'Logged out successfully.');
    }

    public function profile()
    {
        $user = Auth::user();
    
        // Check if the user exists
        if (!$user) {
            return redirect()->route('login')->with('error', 'User not found.');
        }
    
        return view('dashboard.Auth.profile', compact('user'));
    }
    
    
    public function loginForm()
    {
        return view('dashboard.Auth.login');
    }

    public function store(Request $request)
    {
        $user = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'contact' => 'required|numeric',
            'picture' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Hash password before saving
        $user['password'] = Hash::make($user['password']);
        $user = User::create($user);

        // Handle the picture upload
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Profiles/pictures'), $filename);
            $user->picture = $filename;
            $user->save();
        }

        return redirect()->route('login.form')->with('success', 'User created successfully.');
    }

    public function show()
    {
        $user = User::all();
        return view('dashboard.Auth.showuser', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.Auth.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'address' => 'required',
            'contact' => 'required|numeric',
            'picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048' // Make picture nullable
        ]);
    
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->contact = $request->contact;
    
        if ($request->hasFile('picture')) {
            // Handle the picture upload
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Profiles/pictures'), $filename);
            $user->picture = $filename; // Update picture path
        }
    
        $user->save();
        return redirect()->route('user.show');
    }
    
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('user.show');
    }
}