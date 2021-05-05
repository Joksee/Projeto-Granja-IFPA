@extends('Layouts.app')

@section('titulo', 'Editar Operação: Formulário')

@section('content') 
<h2>Tela de operações: Editar</h2>
        
        <form action= ""  method="POST">
            @csrf
            <label for="valorOperacoes">Valor </label>
            <input type="decimal" name="valorOperacoes"  value="{{ $operacaos->valorOperacoes }}">
            <br>
            
            <label for="tipoOperacoes">Operação:</label>   
            <select name="tipoOperacoes">
                    <option value="E">Entrada</option>
                    <option value="S">Saída</option>
            </select>
            <br>

            <label for="dataOperacoes">Data:</label>
            <input type="date" name="dataOperacoes" > <br>
            <br>

            <textarea rows="6" cols="50" maxlength="50"
            type="text(50)" name="descricaoOperacoes"  placeholder="descrição"></textarea>
            <br>

            <h5>Identificação do ID financeiro</h5>
            <label for="financeiro_id">Id:</label>
            <input type="int" name="financeiro_id"> <br>
            <br>
            <input type="submit" value="Enviar" name="Enviar">
            <input type="reset" value="limpar">  <br><br>


        </form>
    
@endsection