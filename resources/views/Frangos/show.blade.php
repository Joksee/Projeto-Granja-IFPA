@extends('Layouts.app')

@section('titulo', 'Frangos')


@section('content') 
<h1>tabela de frangos</h1>
<h3>Frangos do Lote: {{$frango->lotes_id ?? ''}} </h3>
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
                <td>{{ $frango->lotes_id }} </td>
            </tr>         
        @endforeach
    </tbody>
</table>
@endsection

