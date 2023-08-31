<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Canal;


class ProfileController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();
        $cans = Canal::all() ;
        return view('NiceAdmin/profile', compact('user','cans'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update($validatedData);

        return redirect()->back()->with('success', 'Profil mis à jour avec succès.');
    }
}
