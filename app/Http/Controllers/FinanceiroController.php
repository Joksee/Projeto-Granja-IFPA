<?php

namespace App\Http\Controllers;

use App\Models\Financeiro;
use App\Models\Operacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $financeiros = Financeiro::all();

        //$financeiro->saldoMesFinanceiros=3;

        return view('Financeiros.index',[
            'financeiros' => $financeiros,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $financeiros = Financeiro::create($data);
        
        return redirect()->route('Financeiros.index');
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
        if (!$financeiros = Financeiro::find($id))
        return redirect()->back();
    
        $operacoes = $financeiros->operacoes;
        
    //return dd($teste);
        return view('Financeiros.show', [
            'financeiros'=>$financeiros,
            'operacoes'=>$operacoes
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if (!$financeiros = Financeiro::find($id))
            return redirect()->back();

        return view('Financeiros.edit', compact('financeiros'));
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
        //
        if (!$financeiro = Financeiro::find($id))
            return redirect()->back();

        $financeiro->update($request->all());

        return redirect()->route('Financeiros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (!$financeiro = Financeiro::where('id', $id)->first())
            return redirect()->back();
        
        $financeiro->delete();

        return redirect()->route('Financeiros.index');
    }
}
