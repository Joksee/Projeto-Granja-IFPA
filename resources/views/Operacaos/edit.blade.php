@extends('Layouts.app')

@section('titulo', 'Editar Operação: Formulário')

@section('content') 
<h2>Tela de operações: Editar</h2>
<h1>ID {{ $operacaos->id }}</h1>
        
        <form action= "{{ route('Operacaos.update', $operacaos->id) }}"  method="POST">
            @csrf
            @method('PUT')
            <label for="valorOperacoes">Valor </label>
            <input type="decimal" name="valorOperacoes"  value="{{ $operacaos->valorOperacoes }}">
            <br>
            
            <label for="tipoOperacoes">Operação:</label>   
            <select name="tipoOperacoes">
                    <option value="E">Entrada</option>
                    <option value="S">Saída</option>
                    <option selected value="{{ $operacaos->tipoOperacoes }}">{{ $operacaos->tipoOperacoes }}</option>
            </select>
            <br>

            <label for="dataOperacoes">Data:</label>
            <input type="date" name="dataOperacoes" value="{{ $operacaos->dataOperacoes }}"> <br>
            <br>

            <textarea rows="6" cols="50" maxlength="50"
            type="text(50)" name="descricaoOperacoes">{{ $operacaos->descricaoOperacoes }}</textarea>
            <br>
            <input type="submit" value="Enviar" name="Enviar">
            <input type="reset" value="limpar">  <br><br>


        </form>
    
@endsection