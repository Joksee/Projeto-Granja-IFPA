@extends('Layouts.app')

@section('titulo', 'Lotes- Editar')

@section('content')
<h2>Informação do Lote Atual</h2>
<p>Editar o lote: {{$lote->id}} </p>
<br>
<ul>
    <li>ID:             {{$lote->id}}</li> 
    <li>Local:          {{$lote->localLotes}}       </li>
    <li>Peso Inicial:   {{$lote->pesoInicialLotes}} </li>
    <li>Peso Médio:     {{$lote->pesoMedioLotes}}   </li>
    <li>Valor Pago:     {{$lote->valorPagoLotes}}   </li>
    <li>Data de Inicio: {{$lote->dataInicialLotes}} </li>
</ul>

<hr>
<br>
        <form action="{{ route('Lotes.update', $lote->id) }}" method="POST" id="formularioLotes" >
        @csrf
        @method('PUT')        
                <hr>
                <label for="localLotes">Gaiola </label>
                <input type="char(10)" name="localLotes"  placeholder="Local" value="{{$lote->localLotes}}">
                <br>
    
                <label for="valorPagoLotes">Valor pago </label>
                <input type="decimal(5,2)" name="valorPagoLotes"  placeholder="R$" value="{{$lote->valorPagoLotes}}">
                <br>
    
                <label for="pesoInicialLotes">Peso Inicial do lote </label>
                <input type="decimal(5,2)" name="pesoInicialLotes"  placeholder="Kg" value="{{$lote->pesoInicialLotes}}">
                <br>
    
                <label for="pesoMedioLotes">Peso médio do lote </label>
                <input type="decimal(5,2)" name="pesoMedioLotes"  placeholder="Kg" value="{{$lote->pesoMedioLotes}}">
                <br>
    
                <label for="dataInicialLotes">Data de Criação</label>
                <input type="date" name="dataInicialLotes" value="{{$lote->dataInicialLotes}}"> <br>
                <br><br>
                <hr>
                <br>
                <input type="submit" value="Enviar" name="Enviar">
                <input type="reset" value="limpar">  <br><br>
        </form>
@endsection
