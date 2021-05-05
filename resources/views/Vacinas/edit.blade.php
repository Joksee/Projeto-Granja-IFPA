@extends('Layouts.app')

@section('titulo', 'Vacinas - Editar')

@section('content')
<h2>Informação da vacina Atual</h2>
<p>Editar: {{$vacina->id}} </p>
<br>
<ul>
    <li>ID:           {{$vacina->id}}</li> 
    <li>NOME:         {{$vacina->nomeVacinas}}       </li>
    <li>Dia:          {{$vacina->diaVacinas}}        </li>
    <li>Lote pertencente:          {{$vacina->lote_id}}        </li>
    
</ul>
</table>
<form action= "{{ route('Vacinas.update', $vacina->id) }}"  method="POST">
    @csrf
    @method('PUT') 
    <hr>
    <label for="nomeVacinas">Nome </label>
    <input type="string" name="nomeVacinas"  value="{{$vacina->nomeVacinas}}">
    |
    <label for="diaVacinas">Dia </label>
    <input type="date" name="diaVacinas"  value="{{$vacina->diaVacinas}}">
    |
    <label for="lote_id">Lote pertencente </label>
    <input type="int" name="lote_id"   value="{{$vacina->lote_id}}">
    |
    <br>
    <input type="submit" value="Enviar" name="Enviar">
    <input type="reset" value="limpar">  <br><br>

</form>
@endsection
