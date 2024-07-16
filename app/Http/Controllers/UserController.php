<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::all();
        $users = User::all();
        return view('pages.users.index', compact('users','subscriptions'));
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'role' => $request->get('role')
        ]);

        $user->save();
        return redirect('/users')->with('success', 'Utilisateur ajouté avec succès');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('pages.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required'
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->role = $request->get('role');

        if ($request->get('password')) {
            $user->password = Hash::make($request->get('password'));
        }

        $user->save();
        return redirect('/users')->with('success', 'Utilisateur modifié avec succès !');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users')->with('success', 'Utilisateur supprimé avec succès !');
    }
}
