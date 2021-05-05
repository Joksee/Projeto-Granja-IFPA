<?php

namespace App\Http\Controllers;

use App\Models\Frango;
use App\Models\Lote;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\While_;

class FrangoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frangos = Frango::all();
        return view('Frangos.index',[
            'frangos' => $frangos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Frangos.create');
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

        $quantFrangos=0;
        $quantFrangos= $_POST['quantFrangos'];


        while($quantFrangos>0){
            $frango = Frango::create($data);
            $quantFrangos= $quantFrangos-1;
        }
        
        return view('Frangos.create')->with('success', 'Frangos Adicionados');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$frangos = Frango::where('lote_id', '$id')->get())
            return redirect()->back();
        
        return view('Frangos.show', [
        'frangos'=>$frangos,
                
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
        if (!$lote = Lote::find($id))
            return redirect()->back();

        $frangos = $lote->frangos;
        return view('Frangos.edit', [
            'lote'=>$lote,
            'frangos'=>$frangos,

            ]);
        
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

        return dd("");
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
        if (!$frango = Frango::where('id', $id)->first())
            return redirect()->back();
        
        $frango->delete();

        return redirect()->route('Lotes.index');
    }
}
