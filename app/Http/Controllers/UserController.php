<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\StoreRequest;
use App\Repositories\StoreRepository;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private StoreRepository $repository;

    public function __construct(StoreRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('login');
    }


    public function create()
    {
        return view('cadastro_usuario');
    }


    public function store(StoreRequest $request)
    { //Valida o usuário criado e redireciona para a pagina de login

        $validators = $request->validated();

        try {
            $this->repository->createUser($validators);
            return redirect()->route('user.index');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }


    public function getUser(AuthRequest $request)
    { //Autentica o usuário e redireciona ou não para a Homepage

        $validator = $request->validated();

        if (Auth::attempt($validator)) {
            return redirect()->route('home');
        }

        return redirect('usuario')->withErrors(['errors' => 'Credenciais erradas. Tente novamente'])->withInput();

    }
}
