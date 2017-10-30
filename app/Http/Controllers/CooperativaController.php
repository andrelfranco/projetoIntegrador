<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cooperativa;

class CooperativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cooperativas = Cooperativa::all();

        return view('cooperativas.index', ['cooperativas' => $cooperativas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cooperativas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cooperativa $cooperativa)
    {
        Cooperativa::create($request->all());
        return redirect()->route('cooperativas.show', $cooperativa->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cooperativa = Cooperativa::find($id);
        return view('cooperativas.show', ['cooperativa' => $cooperativa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cooperativa = Cooperativa::find($id);


        return view('cooperativas.edit', ['cooperativa' => $cooperativa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cooperativa $cooperativa)
    {
        $cooperativa->update($request->all());

        return redirect()->route('cooperativas.show', $cooperativa->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cooperativa::find($id)->delete();

        return redirect()->route('cooperativas.index');
    }

    public function adicionarAdm(Cooperativa $cooperativa)
    {
        return view('cooperativas.create_adm', compact('cooperativa'));
    }

    public function storeAdm(Request $request, Cooperativa $cooperativa)
    {

    }
}
