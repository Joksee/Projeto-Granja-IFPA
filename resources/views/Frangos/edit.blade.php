@extends('Layouts.app')

@section('titulo', 'Lotes-Frangos-Editar')


@section('content')
<p>Editar os frangos do lote: {{$lote->id}} </p>
<br>
<h1>Lista de frangos</h1>
<table class="table">
@csrf
@method('PUT')
<tbody>
    <thead>
        <tr>
            <th>Cor</th>
            <th>Subespecie</th>
            <th>Sexo</th>
            <th>Estado</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>ID</th>
        </tr>
    </thead>

    @foreach ($AvesG as $frango)
            <tr class="table-light">
                <td>{{ $frango->corFrangos }}</td>
                <td>{{ $frango->subespecieFrangos }}</td>
                <td>{{ $frango->sexoFrangos }}</td>
                <td>{{ $frango->estadoFrangos }}</td> 
                <td></td>
                <td>{{ $frango->quantFrangos }}</td>
                <td>{{ $frango->id }}</td>
            </tr>
                   
    @endforeach
    
    @foreach ($AvesP as $frango)
            <tr class="table-light">
                <td>{{ $frango->corFrangos }}</td>
                <td>{{ $frango->subespecieFrangos }}</td>
                <td>{{ $frango->sexoFrangos }}</td>
                <td>{{ $frango->estadoFrangos }}</td> 
                <td></td>
                <td>{{ $frango->quantFrangos }}</td>
                <td>{{ $frango->id }}</td>
            </tr>
                   
    @endforeach
    
    @foreach ($AvesM as $frango)
            <tr class="table-danger">
                <td>{{ $frango->corFrangos }}</td>
                <td>{{ $frango->subespecieFrangos }}</td>
                <td>{{ $frango->sexoFrangos }}</td>
                <td>{{ $frango->estadoFrangos }}</td> 
                <td></td>
                <td>{{ $frango->quantFrangos }}</td>
                <td>{{ $frango->id }}</td>
            </tr>
                   
    @endforeach
    
    @foreach ($AvesV as $frango)
            <tr class="table-success">
                <td>{{ $frango->corFrangos }}</td>
                <td>{{ $frango->subespecieFrangos }}</td>
                <td>{{ $frango->sexoFrangos }}</td>
                <td>{{ $frango->estadoFrangos }}</td> 
                <td>{{ $frango->valorFrangos }}</td>
                <td>{{ $frango->quantFrangos }}</td>
                <td>{{ $frango->id }}</td>
            </tr>
                   
    @endforeach
</tbody>
</table>
<hr>
<form action=" {{ route('Frangos.update', $lote->id) }} " method="POST">
    @csrf
    @method('PUT')
    
    <p>Escolha o ID da linha que deseja alterar</p>
        <label for="id">Id do frango:</label>
            <input type="int" name="id"> 
        <hr>
            
        <label for="estadoFrangos">Estado</label>   
            <select name="estadoFrangos">
                    <option value="M">Morto</option>
                    <option value="V">Vendido</option>
                    <option value="P">Pronto</option>
                    <option value="G" selected>Granja</option>
            </select>
        
        <label for="valorFrangos">Valor: </label>
            <input type="decimal(5,2)" name="valorFrangos">

        <label for="quantFrangos">Quantidade: </label>
            <input type="integer" name="quantFrangos"> 
            
            <br>
        
    
    <button type="submit">Update</button>
    </form>

@endsection