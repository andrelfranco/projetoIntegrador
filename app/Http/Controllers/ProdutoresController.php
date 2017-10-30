<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\Produtor;
use Carbon\Carbon;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;

class ProdutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtores = Produtor::all();

        return view('produtores.index', compact('produtores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $map = Mapper::map('53.381128999999990000', '-1.470085000000040000', []);
        return view('produtores.create');
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

        Produtor::create(array_merge($request->except('data_nascimento'), [
            'data_nascimento' =>
                $data_nascimento
        ]));

        return redirect()->route('produtores.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produtor = Produtor::find($id);

        return view('produtores.show', compact('produtor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtor = Produtor::find($id);

        return view('produtores.edit', compact('produtor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produtor $produtore)
    {
        $data_nascimento = Carbon::createFromFormat('d/m/Y', $request->data_nascimento);

        $produtore->update(array_merge($request->except('data_nascimento'), [
            'data_nascimento' => $data_nascimento
        ]));

        return redirect()->route('produtores.index', $produtore->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produtor::find($id)->delete();

        return redirect()->route('produtores.index');
    }
}
