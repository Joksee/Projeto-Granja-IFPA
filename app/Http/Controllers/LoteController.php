<?php

namespace App\Http\Controllers;

use App\Models\Lote;
use App\Models\Frango;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class LoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotes = Lote::all();

        return view('Lotes.index',[
            'lotes' => $lotes,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Lotes.create');
    }

    /**
     * fazer o cadastro do produto em sí
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $lote = Lote::create($data);
        
        return redirect()->route('Lotes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$lote = Lote::find($id))
            return redirect()->back();
        
        $frangos = $lote->frangos;
        $vacinas = $lote->vacinas;
        $racaos  = $lote->racaos;
        

        return view('Lotes.show', [
            'lote'=>$lote,
            'frangos'=>$frangos,
            'vacinas'=>$vacinas,
            'racaos' =>$racaos

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
        if (!$lote = Lote::find($id))
            return redirect()->back();

        return view('Lotes.edit', compact('lote'));
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
        if (!$lote = Lote::find($id))
            return redirect()->back();

        $lote->update($request->all());

        return redirect()->route('Lotes.index');
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
        if (!$lote = Lote::where('id', $id)->first())
            return redirect()->back();
        
        $lote->delete();

        return redirect()->route('Lotes.index');
    }
}
