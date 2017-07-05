<?php

namespace App\Http\Controllers;

use Auth;
use App\Ficha;
use App\User;
use App\Http\Requests;
use Request;
use Redirect;
use App\Http\Requests\FichaRequest;
use App\Http\Requests\MedicoRequest;

class MedicoController extends Controller
{
    public function __construct(Ficha $ficha, User $user)
    {
        $this->ficha = $ficha;
        $this->user = $user;
        $this->middleware('auth');
    }

    public function adicionarFicha()
    {
        return view('medico.adicionar-ficha');
    }

    public function storeAdicionarFicha(FichaRequest $request)
    {
        $input = Request::all($request);
        $input['users_id'] = Auth::user()->id;
        $insert = $this->ficha->create($input);

        $ficha = $this->ficha->where('id', '=', $insert->id)->first();
        $nome = $ficha->nome;

        return Redirect::route('adicionar-ficha')->with(['id' => $insert->id, 'nome' => $nome]);
    }

    public function minhaConta()
    {
        $user = $this->user->where('id', '=', Auth::user()->id)->first();
        return view('medico.minha-conta', compact('user'));
    }

    public function updateMinhaConta(MedicoRequest $request)
    {
        $user = $this->user->where('id', '=', Auth::user()->id)->first();
        $input = Request::all($request);
        $user->update($request->all());

        return redirect('medico.minha-conta');
    }
}