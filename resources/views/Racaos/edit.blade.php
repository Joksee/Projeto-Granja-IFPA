@extends('Layouts.app')

@section('titulo', 'Rações - Editar')

@section('content')
<h2>Informação da Ração Atual</h2>
<p>Editar: {{$racao->nomeRacao}} </p>
<br>
<ul>
    <li>ID:                 {{$racao->id}}</li> 
    <li>NOME:               {{$racao->nomeRacao}}       </li>
    <li>Dia Inicial:        {{$racao->dataInicialRacao}}        </li>
    <li>Dia Final:          {{$racao->dataFinalRacao}}        </li>
    <li>Lote pertencente:   {{$racao->lote_id}}        </li>
    <li>Descrição:          {{$racao->descricaoRacao}}        </li>
    
</ul>
<h5>Atualizar Valores</h5>
</table>
<form action= "{{ route('Racaos.update', $racao->id) }}"  method="POST">
    @csrf
    @method('PUT') 
    <hr>
    <label for="nomeRacao">Nome </label>
    <input type="string" name="nomeRacao"  value="{{$racao->nomeRacao}}">
    <br>
    <label for="descricaoRacao">Descrição </label><br>
    <textarea rows="6" cols="50" maxlength="300"
    type="text(150)" name="descricaoRacao"  >{{$racao->descricaoRacao}}</textarea>
    <br><br>
    <h4>Data de Administração</h4> 
            
    <label for="dataInicialRacao">Data de Início</label>
    <input type="date" name="dataInicialRacao" value="{{$racao->dataInicialRacao}}" > 
    <br>
    <label for="dataFinalRacao">Data Final</label>
    <input type="date" name="dataFinalRacao"   value="{{$racao->dataFinalRacao}}" > <br>
    <br>
    <h5>Identificação do Lote</h5>
    <label for="lote_id">Id do lote:</label>
    <input type="int" name="lote_id" value="{{$racao->lote_id}} "> <br>
    <br>
    <br>
    <input type="submit" value="Enviar" name="Enviar">
    <input type="reset" value="limpar">  <br><br>

</form>
@endsection