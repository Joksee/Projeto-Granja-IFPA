@extends('Layouts.app')

@section('titulo', 'Financeiro Editar Mês')


@section('content')
<p>Editar o ID: {{$financeiros->id}} </p>
<ul>
    <li>ID:  {{$financeiros->id}}</li>
    <li>Mês: {{$financeiros->mesFinanceiros}}</li>
    <li>Ano: {{$financeiros->anofinanceiros}}</li>
</ul>
<form action=" {{ route('Financeiros.update', $financeiros->id) }} " method="POST">
    @csrf
    @method('PUT')
    <hr>
    <label for="mesFinanceiros">Mês</label>   
        <select name="mesFinanceiros">
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
                <option value="11" >11</option>
                <option value="12" >12</option>
                <option value="{{$financeiros->mesFinanceiros}}" selected>{{ $financeiros->mesFinanceiros }}</option>
        </select>

        <label for="anoFinanceiros">Ano </label>
        <input type="decimal(4,0)" name="anoFinanceiros" value="{{$financeiros->anofinanceiros}}">
<br>
<button type="submit">Update</button>
</form>

@endsection