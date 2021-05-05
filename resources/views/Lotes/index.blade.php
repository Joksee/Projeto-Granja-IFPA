
<!-- section('content') -->
@extends('Layouts.app')

@section('titulo', 'Lotes Index')

@section('content')
<h3>Modulo de teste: Lotes</h3> <br>
    <a href=" {{ route('Lotes.create') }} "  class="btn btn-primary">Cadastrar Novo Lote</a>
    
    <a href="{{ route('Frangos.create')}}"  class="btn btn-primary">Cadastrar frangos</a>
    <br><br>
    <a href="{{ route('Racaos.create')}} " class="btn btn-primary">Cadastrar Rações</a>
    <br>

    <hr>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Local</th>
                <th scope="col">Peso Médio</th>
                <th scope="col">Data Entrada</th>
                <th scope="col">Update</th>
                <th scope="col">Status </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lotes as $lote)
                <tr scope="row">
                    <td>{{ $lote->id }} </td>
                    <td>{{ $lote->localLotes }} </td>
                    <td>{{ $lote->pesoMedioLotes }} </td>
                    <td>{{ $lote->dataInicialLotes }} </td>
                    <td><a href="{{ route('Lotes.edit', $lote->id) }} "class="btn btn-link">Editar</a></td>
                    <td><a href="{{ route('Lotes.show', $lote->id) }} " class="btn btn-link">Detalhe</a></td>
                    <td>{{ $lote->statusLotes }} </td>
                </tr>         
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('Frangos.create')}}" class="btn btn-secondary">Cadastrar frangos</a>
    
    <br>
        
    <hr>
    <br><br><br>
    <a href="menu.html">Voltar</a>
@endsection



