@extends('Layouts.app')

@section('titulo', 'Lotes Show')

@section('content')
<h1>Lote: {{$lote->id ?? ''}} </h1>
<ul class="list-group">
    <li class="list-group-item">ID:             {{$lote->id ?? '' }}</li> 
    <li class="list-group-item">Local:          {{$lote->localLotes}}       </li>
    <li class="list-group-item">Peso Inicial:   {{$lote->pesoInicialLotes}} </li>
    <li class="list-group-item">Peso Médio:     {{$lote->pesoMedioLotes}}   </li>
    <li class="list-group-item">Valor Pago:     {{$lote->valorPagoLotes}}   </li>
    <li class="list-group-item">Data de Inicio: {{$lote->dataInicialLotes}} </li>
</ul>
<br>
<h3>Fator de Produção</h3>
<h4>Variáveis</h4>
<ul class="list-group">
    <li class="list-group-item">Número de aves Compradas(total): {{$avesT}}</li>
    <li class="list-group-item">Número de aves Mortas: {{$avesM}}</li>
    <li class="list-group-item">Número de Dias: {{$datediff}}</li>
    <li class="list-group-item">Peso Médio:     {{$lote->pesoMedioLotes}} </li>
    <li class="list-group-item">Consumo de Ração:{{$somaRacao}} </li>
    <li class="list-group-item">Número de Aves Vendidas: {{$avesV}}</li>
    <li class="list-group-item">Número de Aves Atual: {{$avesA}}</li>
</ul>
<h4>Resultados principais</h4>
<ul class="list-group">
    <li class="list-group-item">Conversão Alimentar do Lote:{{$CAL}}        </li>
    <li class="list-group-item">Porcentagem de Baixas:      {{$avesM2}}%</li>
    <li class="list-group-item">Viabilidade:                {{$avesV2}}%:          </li>
    <li class="list-group-item">Eficiencia alimentar:       {{$EA}}               </li>
    <li class="list-group-item">Ganho médio diário:         {{$GMD}}        </li>
</ul>
<br>
 
<form action="{{ route('Lotes.destroy',$lote->id )}} " method="post">
    @csrf
    @method('DELETE')
    <button type="submit">DELETAR o Lote: {{$lote->id}} </button>
</form>
<br>
@endsection

@section('content2')

<h3>Modulo de Lotes (frangos)</h3> <br>
<p>lista de todos dos frangos cadastrados</p>
<a href="{{ route('Frangos.edit', $lote->id )}}">Editar os frango</a>
<table class="table ">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cor</th>
            <th>Subespecie</th>
            <th>Sexo</th>
            <th>Estado</th>
            <th>Quantidade</th>
            <th>Valor</th>
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
                <td>{{ $frango->quantFrangos }} </td>
                <td>{{ $frango->valorFrangos }} </td>
                
                <td>
                    <form action="{{ route('Frangos.destroy',$frango->id)}} " method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">DELETAR</button>
                    </form>
                </td>
            </tr>         
        @endforeach
    </tbody>
</table>

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
@endsection

@section('contentRacao')

<h3>Modulo de Lotes (Ração)</h3> <br>
<p>Lista das Rações administradas</p>
<table class="table ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Data Inicial</th>
            <th scope="col">Data Final</th>
            <th scope="col">Quantidade</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($racaos as $racao)
            <tr scope="row">
                <td>{{ $racao->id }} </td>
                <td>{{ $racao->nomeRacao }} </td>
                <td>{{ $racao->descricaoRacao }} </td>
                <td>{{ $racao->dataInicialRacao }}</td>
                <td>{{ $racao->dataFinalRacao }}</td>
                <td>{{ $racao->quantidadeRacao }}</td>
                <td><a href="{{ route('Racaos.edit', $racao->id) }} ">Editar</a></p></td>
                <td>
                    <form action="{{ route('Racaos.destroy',$racao->id)}} " method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">DELETAR</button>
                    </form>
                </td>
            </tr>         
        @endforeach
    </tbody>
</table>
    
@endsection


@section('contentVacina')
<h3>Modulo de Lotes (Vacinas)</h3> <br>
<p>lista das vacinas administradas</p>
<table class="table ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Data</th>
            <th scope="col">Dias</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($vacinas as $vacina)
            <tr scope="row">
                <td>{{ $vacina->id }} </td>
                <td>{{ $vacina->nomeVacinas }} </td>
                <td>{{ $vacina->diaVacinas }} </td>
                <td><a href="{{ route('Vacinas.edit', $vacina->id) }} ">Editar</a></p></td>
                <td>
                    <form action="{{ route('Vacinas.destroy',$vacina->id)}} " method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">DELETAR</button>
                    </form>
                </td>
            </tr>         
        @endforeach
    </tbody>
</table>
    <form action= "{{ route('Vacinas.store') }}"  method="POST">
        @csrf
        <hr>
        <label for="nomeVacinas">Nome </label>
        <input type="string" name="nomeVacinas"  placeholder="nome">
        |
        <label for="diaVacinas">Dia </label>
        <input type="date" name="diaVacinas"  placeholder="">
        |
        <label for="lote_id">ID(Lote) </label>
        <input type="int" name="lote_id"  value="{{$lote->id ?? '' }}">
        <br><br>
        <input type="submit" value="Enviar" name="Enviar">
        <input type="reset" value="limpar">  <br><br>

    </form>
@endsection

