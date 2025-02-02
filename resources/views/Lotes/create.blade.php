@extends('Layouts.app')

@section('titulo', 'Criar Lotes: Formulário')

@section('content') 
<h2>Tela de criação de frangos</h2>
        <p>Nesta tela serão inseridos as informações para criar um lote</p>
        <form action= "{{route('Lotes.store') }}"  method="POST">
            @csrf
            <hr>
            <label for="localLotes">Gaiola </label>
            <input type="char(10)" name="localLotes"  placeholder="Local">
            <br>

            <label for="valorPagoLotes">Valor pago </label>
            <input type="decimal(5,2)" name="valorPagoLotes"  placeholder="R$">
            <br>

            <label for="pesoInicialLotes">Peso Inicial do lote </label>
            <input type="decimal(5,2)" name="pesoInicialLotes"  placeholder="Kg">
            <br>

            <label for="pesoMedioLotes">Peso médio do lote </label>
            <input type="decimal(5,2)" name="pesoMedioLotes"  placeholder="Kg">
            <br>

            <label for="dataInicial">Data de Criação</label>
            <input type="date" name="dataInicialLotes" > <br>
            <br><br>
            
            <label for="statusLotes"></label>   
                    <select name="statusLotes">
                            <option value="A" selected>Status: Ativo</option>
                    </select>
                    
            <hr>
            <br>
            <input type="submit" value="Enviar" name="Enviar">
            <input type="reset" value="limpar">  <br><br>


        </form>
    
@endsection

