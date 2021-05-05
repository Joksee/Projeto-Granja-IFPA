@extends('Layouts.app')

@section('titulo', 'Criar Racão: Formulário')

@section('content') 
<h2>Tela de criação de Ração</h2>
        <p>Nesta tela serão inseridos as informações para adicionar uma ração</p>
        <form action= "{{ route('Racaos.store') }}"  method="POST">
            @csrf
            <hr>
            <label for="nomeRacao">Nome </label>
            <input type="string" name="nomeRacao"  placeholder="Nome da ração">
            <br>
            <label for="descricaoRacao">Descrição </label><br>
            <textarea rows="6" cols="50" maxlength="300"
            type="text(150)" name="descricaoRacao"  placeholder="Informações Importantes"></textarea>
            <br><br>
            <h4>Data de Administração</h4> 
            
            <label for="dataInicialRacao">Data de Início</label>
            <input type="date" name="dataInicialRacao" > 
            <br>
            <label for="dataFinalRacao">Data Final</label>
            <input type="date" name="dataFinalRacao" > <br>
            <br>
            <h5>Identificação do Lote</h5>
            <label for="lote_id">Id do lote:</label>
            <input type="int" name="lote_id"> <br>
            <br>
            <input type="submit" value="Enviar" name="Enviar">
            <input type="reset" value="limpar">  <br><br>


        </form>
    
@endsection