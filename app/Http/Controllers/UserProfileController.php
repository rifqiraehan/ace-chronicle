<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->id());

        return view('dashboard.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->id());

        $rules = [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ];

        if ($request->filled('password')) {
            $rules['password'] = 'required|string|min:5';
            $rules['password_confirmation'] = 'required|string|min:5|same:password';
        }

        $messages = [
            'password_confirmation.same' => 'Konfirmasi password tidak sesuai.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only('name', 'username', 'email');

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return back()->with('message', 'Profil berhasil diubah.');
    }
}
