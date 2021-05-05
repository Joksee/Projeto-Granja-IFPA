@extends('Layouts.app')

@section('titulo', 'Lotes-Frangos-Editar')


@section('content')
<p>Editar os frangos do lote: {{$lote->id}} </p>
<br>
<form action=" {{ route('Frangos.update', $lote->id) }} " method="POST">
@csrf
@method('PUT')
<table >
    <thead>
        <tr>
            <th>ID</th>
            <th>Cor</th>
            <th>Subespecie</th>
            <th>Sexo</th>
            <th>Estado</th>
            <th>Valor</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($frangos as $frango)
            <tr>
                <td>{{ $frango->id }} </td>
                <td>
                    <label for="corFrangos"></label>
                    <input type="char(10)" name="corFrangos"  value="{{ $frango->corFrangos }} ">
                </td>
                <td>
                    <label for="subespecieFrangos"></label>
                    <input type="char(10)" name="subespecieFrangos "  value="{{ $frango->subespecieFrangos }} ">
                </td>
                <td>
                    <label for="sexoFrangos"></label>   
                    <select name="sexoFrangos">
                            <option value="M">Macho</option>
                            <option value="F">Fêmea</option>
                            <option value="{{ $frango->sexoFrangos }}" selected>{{ $frango->sexoFrangos }}</option>
                    </select>
                </td>
                <td>
                    <label for="estadoFrangos"></label>   
                    <select name="estadoFrangos">
                            <option value="M">Morto</option>
                            <option value="V">Vendido</option>
                            <option value="P">Pronto</option>
                            <option value="G">Granja</option>
                            <option value="{{ $frango->estadoFrangos }}" selected>{{ $frango->estadoFrangos }}</option>
                    </select>
                </td>
                <td><label for="corFrangos"></label>
                    <input type="char(10)" name="corFrangos"  value="{{ $frango->valorFrangos }}">
                </td>
            </tr>         
        @endforeach
    </tbody>
</table>
<button type="submit">Update</button>
</form>

@endsection