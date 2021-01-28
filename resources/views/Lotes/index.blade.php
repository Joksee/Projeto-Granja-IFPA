
<!-- section('content') -->
    <h3>Modulo de teste: Lotes</h3> <br>
    <a href=" {{ route('Lotes.create') }} ">Cadastrar Novo Lote</a>
    <hr>
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Local</th>
                <th>Peso Médio</th>
                <th>Data Entrada</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lotes as $lote)
                <tr>
                    <td>{{ $lote->id }} </td>
                    <td>{{ $lote->localLotes }} </td>
                    <td>{{ $lote->pesoMedioLotes }} </td>
                    <td>{{ $lote->dataInicialLotes }} </td>
                    <td><a href="{{ route('Lotes.show', $lote->id) }} ">Detalhe</a></td>
                </tr>         
            @endforeach
        </tbody>
    </table>
        
    <hr>
    <br><br><br>
    <a href="menu.html">Voltar</a>
<!--endsection-->      

