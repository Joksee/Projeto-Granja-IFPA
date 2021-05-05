@extends('Layouts.app')

@section('titulo', 'Financeiros Show')

@section('content')
<h1>ID Financeiro: {{$financeiros->id ?? ''}} </h1>
<ul>
    <li>ID:             {{$financeiros->id ?? '' }}</li> 
    <li>mês:            {{$financeiros->mesFinanceiros}}       </li>
    <li>Ano:            {{$financeiros->anofinanceiros}} </li>
    
</ul>
<a href="{{ route('Operacaos.create', $financeiros->id)}}"  class="btn btn-primary">Cadastrar Operações</a>
<br><br>

<form action="{{ route('Financeiros.destroy',$financeiros->id )}} " method="post">
    @csrf
    @method('DELETE')
    <button type="submit">DELETAR o Mes: {{$financeiros->id}} </button>
</form>
<br>
@endsection

@section('content2')

<h3>Módulo Financeiro: (fluxo de caixa)</h3> <br>
<table class="table ">
    <thead>
        <tr>
            
            <th scope="col">ID</th>
            <th scope="col">Valor</th>
            <th scope="col">Tipo</th>
            <th scope="col">Data de entrada</th>
            <th scope="col">Descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($operacoes as $operacao)
            <tr scope="row">
                
                <td>{{ $operacao->id }} </td>
                <td>{{ $operacao->valorOperacoes }} </td>
                <td>{{ $operacao->tipoOperacoes }} </td>
                <td>{{ $operacao->dataOperacoes }} </td>
                <td>{{ $operacao->descricaoOperacoes }} </td>
                
                <td>
                    <form action="" method="post">
                        @csrf
                        @method('')
                        <button type="submit" class="btn btn-link">DELETAR</button>
                    </form>
                </td>
                <td><a href="{{ route('Operacaos.edit', $operacao->id) }} ">Editar</a></td>
            </tr>         
        @endforeach
    </tbody>
</table>
@endsection



