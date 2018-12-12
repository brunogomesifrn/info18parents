<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pai;

class PaiControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pais = Pai::all();
        return view('gerenciar_pais', compact('pais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pais_cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $cpf = $request->input('cpf');
        $rg = $request->input('rg');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $crp = $request->input('crp');




        $pai = new Pai();
        $pai->nome = $nome;
        $pai->cpf = $cpf;
        $pai->rg = $rg;
        $pai->email = $email;
        $pai->telefone = $telefone;
        $pai->crp = $crp;


        $pai->save();

        return redirect('/gerenciar_pais');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pai = Pai::find($id);
        return view('pais_cadastro', compact('pai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nome = $request->input('nome');

        $paipai = Pai::find($id);
        $pai->nome = $nome;
        $pai->save();

        return redirect('/gerenciar_pais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pai = Pai::find($id);
        $pai->delete();

        return redirect('/gerenciar_pais');
    }
}
