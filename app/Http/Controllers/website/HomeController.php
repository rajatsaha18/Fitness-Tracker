<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Workout;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public $profile;
    public $imageName;
    public $directory;
    public $imageUrl;
    public function index()
    {
        if (Auth::user()->user_type == 'user') {
            return view('website.home.home');
        } else {
            return view('website.home.admin-home');
        }
    }

    public function personalRecord()
    {

        return view('website.home.personal-record');
    }
    public function profileShow()
    {

        return view('website.home.profile');
    }
    public function profileUpdate(Request $request)
    {

        $this->profile = User::where('user_type', 'user')->first();
        if ($this->profile) {
            $this->profile->name = $request->name;
            $this->profile->email = $request->email;
            $this->profile->mobile = $request->mobile;
            $profile_image = $request->file('image');
            if ($profile_image) {
                $this->imageName = $profile_image->getClientOriginalName();
                $this->directory = 'profile-image/';
                $this->imageUrl = $this->directory . $this->imageName;
                $success = $profile_image->move($this->directory, $this->imageName);
                if ($success) {
                    $this->profile->image = $this->imageUrl;
                }
            }
            if ($this->profile->update()) {
                return redirect()->back()->with('message', 'Profile Update Successfully');
            } else {
                return redirect()->back()->with('message', 'something error');
            }
        } else {
            // Check if the user_type is 'user' for the logged-in user
            $currentUser = User::find(Auth::id()); // Assuming you're using Auth to get the current user

            if ($currentUser && $currentUser->user_type == 'user') {
                $this->profile = new User();
                $this->profile->name = $request->name;
                $this->profile->email = $request->email;
                $this->profile->mobile = $request->mobile;

                $profile_image = $request->file('image');
                if ($profile_image) {
                    $this->imageName = $profile_image->getClientOriginalName();
                    $this->directory = 'profile-image/';
                    $this->imageUrl = $this->directory . $this->imageName;
                    $success = $profile_image->move($this->directory, $this->imageName);

                    if ($success) {
                        $this->profile->image = $this->imageUrl;
                    }
                }

                if ($this->profile->save()) {
                    return redirect()->back()->with('message', 'Profile Saved Successfully');
                } else {
                    return redirect()->back()->with('message', 'Something went wrong');
                }
            } else {
                return redirect()->back()->with('message', 'Only users with user_type "user" can create a profile');
            }
        }
    }
}
