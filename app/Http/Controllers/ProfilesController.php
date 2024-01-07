<?php

// app/Http/Controllers/ProfilesController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('profiles.index', compact('user'));
    }

    public function edit($id)
    {
        // Add logic to retrieve the user's profile for editing
        $user = User::find($id);
        return view('profiles.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add this line for profile photo validation
            // Add other validation rules as needed
        ]);
    
        $user = User::find($id);
        if (!$user) {
            return abort(404);
        }
    
        // Update the user's profile
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Add other fields as needed
        ]);
    
        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            $profilePhotoPath = $request->file('profile_photo')->store('profile_photos', 'public');
            $user->update(['profile_photo' => $profilePhotoPath]);
        }
    
        return redirect()->route('profiles.index')->with('success', 'Profile updated successfully');
    }
    
}