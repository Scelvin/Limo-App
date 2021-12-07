<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('users.index')->with('message','User created successfully!');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'price_per_person' => $request->has('price_per_person'),
        ]);

        return redirect()->route('users.index')->with('message','User updated successfully!');
    }

    public function destroy($id)
    {
        User::find($id)->delete()->with('message','User deleted successfully!');
    }
}
