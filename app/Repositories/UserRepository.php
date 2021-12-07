<?php

namespace App\Repositories;

use App\Http\Requests\UpdateUserRequest;
use App\Repositories\BaseRepository;
use App\Models\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function allUser()
    {
        return User::all();
    }

    public function findById($id)
    {
        return User::find($id);
    }

    public function createUser(StoreUserRequest $request)
    {
        $user = User::create([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'status' => $request->input('status'),
        ]);
    }

    public function updateUser(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'price_per_person' => $request->has('price_per_person'),
        ]);
    }
}
