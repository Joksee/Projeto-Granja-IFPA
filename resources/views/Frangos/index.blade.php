
@extends('Layouts.app')

@section('titulo', 'Lotes')

@section('content') 
    <h3>Modulo de Lotes (frangos)</h3> <br>
    <p>lista de todos dos frangos cadastrados</p>
    <hr>
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Cor</th>
                <th>Subespecie</th>
                <th>Sexo</th>
                <th>Estado</th>
                <th>Valor</th>
                <th>Lote pertencente</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($frangos as $frango)
                <tr>
                    <td>{{ $frango->id }} </td>
                    <td>{{ $frango->corFrangos }} </td>
                    <td>{{ $frango->subespecieFrangos }} </td>
                    <td>{{ $frango->sexoFrangos }} </td>
                    <td>{{ $frango->estadoFrangos }} </td>
                    <td>{{ $frango->valorFrangos }} </td>
                    <td>{{ $frango->lote_id }} </td>
                </tr>         
            @endforeach
        </tbody>
        
    <hr>
@endsection

@section('content2')
    
@endsection