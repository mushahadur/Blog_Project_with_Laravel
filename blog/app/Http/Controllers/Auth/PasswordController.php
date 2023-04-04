<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\PasswordResetRequest;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(PasswordResetRequest $request)
    {


        // $validated = $request->teWivalidathBag('updatePassword', [
        //     'current_password' => ['required', 'current_password'],
        //     'password' => ['required', Password::defaults(), 'confirmed'],
        // ]);



        $request->user()->update([
            'password' => Hash::make($request->validated()['password']),
        ]);

        return back()->with('status', 'password-updated');
    }
}
