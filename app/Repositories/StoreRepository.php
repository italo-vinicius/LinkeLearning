<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreRepository
{
    public function createUser($validators): bool
    {
        $user = new User();
        $validators['password'] = Hash::make($validators['password']);
        $user->fill($validators);
        $user->save();
        return true;
    }
}
