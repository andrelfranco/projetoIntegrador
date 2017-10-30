<?php

namespace App\Http\Controllers;

use App\Cooperativa;
use App\Funcionario;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();

        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cooperativas = Cooperativa::all()->pluck('nome_fantasia', 'id');
        return view('funcionarios.create', compact('cooperativas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_nascimento = Carbon::createFromFormat('d/m/Y', $request->data_nascimento);

        Funcionario::create(array_merge($request->except('data_nascimento'), [
            'data_nascimento' => $data_nascimento
        ]));

        return redirect()->route('funcionarios.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $funcionario = Funcionario::find($id);

        return view('funcionarios.show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionario = Funcionario::find($id);

        return view('funcionarios.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $data_nascimento = Carbon::createFromFormat('d/m/Y', $request->data_nascimento);

        $funcionario->update(array_merge($request->except('data_nascimento'), [
            'data_nascimento' => $data_nascimento
        ]));

        return redirect()->route('funcionarios.show', $funcionario->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Funcionario::find($id)->delete();
        return redirect()->route('funcionarios.index')->with('alert-success','Product hasbeen deleted!');
    }
}
