<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StoreRepository
{
    public function createUser($validators): bool
    {
        $user = new User();
        $validators['password'] = Hash::make($validators['password']);
        $user->fill($validators);

        try {
            $user->save();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function authUser($request): bool
    {
        $validatedData = $request->validated();
        $email = $validatedData['email'];
        $password = $validatedData['password'];
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return true;
        } else {
            return false;
        }
    }
}
