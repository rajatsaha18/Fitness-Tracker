<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function showChangeForm()
    {
        return view('website.change-password.index');
    }
    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
        ]);

        // Check if the current password matches the one in the database
    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'The current password does not match our records']);
    }

    // Update the password
    $user->password = Hash::make($request->new_password);
    $user->save();
        return redirect()->back()->with('message','password update successfully');


    }
}
