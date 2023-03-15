<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return view('login');
    }


    public function create()
    {
        return view('cadastro_usuario');
    }


    public function store(AuthRequest $request)
    {
        $user = new User();
        $validators = $request->validated();
        $validators['password'] = Hash::make($validators['password']);
        $user->fill($validators);
//        $user->name = $validators['name'];
//        $user->email = $validators['email'];
//        $user->password = Hash::make($validators['password']);
        $user->save();
        return redirect()->route('user.index');

    }


    public function show(string $id)
    {
        //TODO
    }


    public function edit(string $id)
    {
        //TODO
    }


    public function update(Request $request, string $id)
    {
        //TODO
    }


    public function destroy(string $id)
    {
        //TODO
    }
}
