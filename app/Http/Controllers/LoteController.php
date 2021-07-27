<?php

namespace App\Http\Controllers;

use App\Models\Lote;
use App\Models\Frango;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

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
        
//Calculo Fator de produção
//aves vendidas
        $Aves= DB::table('frangos')
                        ->select('quantFrangos')
                        ->where('lote_id','=',$id)
                        ->where('estadoFrangos','=','V') 
                        ->get();
            $avesV= $Aves->sum('quantFrangos');
//aves mortas
        $Aves= DB::table('frangos')
                        ->select('quantFrangos')
                        ->where('lote_id','=',$id)
                        ->where('estadoFrangos','=','M') 
                        ->get();
        $avesM= $Aves->sum('quantFrangos');
//aves Atuais
        $Aves= DB::table('frangos')
                        ->select('quantFrangos')
                        ->where('lote_id','=',$id)
                        ->where('estadoFrangos','=','P')
                        ->orwhere('estadoFrangos','=','G') 
                        ->get();
        $avesA= $Aves->sum('quantFrangos');//count() ;
//aves Totais
        $Aves= DB::table('frangos')
        ->select('quantFrangos')
        ->where('lote_id','=',$id)
        ->get();
        $avesT= $Aves->sum('quantFrangos');
//porcentagem de mortalidade
        if($avesM != 0)
            $avesM2 = (($avesM/$avesT)*100);
        else 
            $avesM2 = 0;
            $avesM2 = number_format($avesM2, 2, '.', '');
//porcentagem viabilidade do lote
        
        if($avesV != 0)
            $avesV2 = (($avesV/$avesT)*100);
        else 
            $avesV2 = 0;
            $avesV2 = number_format($avesV2, 2, '.', '');
//Cálculo da data atual
        $dateNow   = new \DateTime(date('Y-m-d'));
        $dateB     =new \Datetime($lote->dataInicialLotes);
        $dateDiff  =$dateB->diff($dateNow);
        $dateDiff  =$dateDiff->d;
//cálculo do consumo de ração
        $somaracao = DB::table('racaos')
                    ->select('quantidadeRacao')
                    ->where('lote_id','=',$id)
                    ->get();
        $somaracao = $somaracao->sum('quantidadeRacao');
//cálculo da conversão alimentar
        $pesoM = $lote->pesoMedioLotes;
        if($pesoM != 0)
            $CAL = ($somaracao/$pesoM);
        else 
            $CAL = 0;
            $CAL = number_format($CAL, 2, '.', '');    
//cálculo da eficiencia alimentar
        if($somaracao != 0)
            $EA = ($pesoM/$somaracao);
        else 
            $EA = 0;
        $EA = number_format($EA, 2, '.', '');
//cálculo do ganho médio diário
        $GMD = ($dateDiff*$avesT);
        if($GMD != 0)
            $GMD = $pesoM/$GMD;
        else 
            $EA = 0;
        $GMD = number_format($GMD, 2, '.', '');
//lista de frangosxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
$AvesG= DB::table('frangos')
                        ->where('lote_id','=',$id)
                        ->where('estadoFrangos','=','G') 
                        ->get();
        $AvesP= DB::table('frangos')
                        ->where('lote_id','=',$id)
                        ->where('estadoFrangos','=','P') 
                        ->get();
        $AvesM= DB::table('frangos')                    // com A aiusculo para diferenciar
                        ->where('lote_id','=',$id)
                        ->where('estadoFrangos','=','M') 
                        ->get();
        $AvesV= DB::table('frangos')
                        ->where('lote_id','=',$id)
                        ->where('estadoFrangos','=','V') 
                        ->get();


        return view('Lotes.show', [
            'lote'=>$lote,
            'frangos'=>$frangos,
            'vacinas'=>$vacinas,
            'racaos' =>$racaos,
            'avesM2'=>$avesM2,'avesV2'=>$avesV2,'datediff'=>$dateDiff,
            'somaRacao'=>$somaracao, 'CAL'=>$CAL, 'EA'=>$EA, 'GMD'=>$GMD,
            'avesA'=>$avesA,'avesV'=>$avesV,'avesM'=>$avesM,'avesT'=>$avesT,
            'AvesG'=>$AvesG,'AvesP'=>$AvesP,'AvesM'=>$AvesM,'AvesV'=>$AvesV,

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
