<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('dashboard.users.index', [
            'users' => User::where('is_admin', false)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create', [
            'user' => new User()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/dashboard/users')->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users,username,' . $user->id,
            'email' => 'required|email:dns|unique:users,email,' . $user->id
            // 'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = Hash::make($validatedData['password']);

        $user->update($validatedData);

        return redirect('/dashboard/users')->with('success', 'Data user berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        // ubah post ke user id 1
        Post::where('user_id', $user->id)
            ->update([
                'user_id' => 1
            ]);

        return redirect('/dashboard/users')->with('success', 'User berhasil dihapus!');
    }

    /**
     * Reset password user to "secret"
     */
    public function resetPassword(Request $request, User $user)
    {
        $user->update([
            'password' => Hash::make('secret')
        ]);

        return redirect('/dashboard/users')->with('success', 'Password user berhasil direset!');
    }
}