<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

     public function profile(Request $request): View
     {
         return view('profile.profile', [
             'user' => $request->user(),
         ]);
     }


    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request)
    {

        $user = User::where('id', Auth::user()->id)->first();

        $request->user()->fill($request->validated());

        //dd($request->user()->fill($request->validated()));
        //dd(!empty($request->image));

        if (!empty($request->image)) {
            $destinationPath= 'uploads/';
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath,$fileName);
            $user->image = $fileName;
        }


        $user->name = $request->name;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->phone = $request->phone;

        $user->update();

       // $request->user()->save();

        return Redirect::route('profile.edit')->with('statusProfile', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
