@extends('Layouts.app')

@section('titulo', 'Cadastrar Frangos')

@section('content') 

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

    <h2>Tela de criação de frangos</h2>
    <p>Nesta tela serão inseridos as informações para adicionar frangos</p>
    <form action= "{{route('Frangos.store') }}"  method="POST">
        @csrf
        <hr>
        <p>Nesta tela serão inseridos as informações para adicionar frangos</p>
        <label for="lote_id">Id do lote:</label>
            <input type="int" name="lote_id"> <br>

        <label for="quantFrangos">Quantidade: </label>
            <input type="integer" name="quantFrangos"> <br>
        
        <hr>
        <label for="corFrangos">Cor:</label>   
            <select name="corFrangos">
                    <option value="Branco">Branco</option>
                    <option value="Preto">Preto</option>
                    <option value="Vermelho">Vermelho</option>
            </select>
        <br>
        <label for="subespecieFrangos">Subespécie:</label>   
            <select name="subespecieFrangos">
                    <option value="Peito_Duplo">Peito Peito Duplo</option>
                    <option value="Caipirao">Caipirão</option>
            </select>
        <br>
        
        <label for="sexoFrangos">sexo:</label>   
            <select name="sexoFrangos">
                    <option value="M">Macho</option>
                    <option value="F">Fêmea</option>
            </select>
            <br>
        <label for="estadoFrangos">Estado</label>   
            <select name="estadoFrangos">
                    <option value="M">Morto</option>
                    <option value="V">Vendido</option>
                    <option value="P">Pronto</option>
                    <option value="G" selected>Granja</option>
            </select>
        <br>
        
        
        <hr>
        <br>
        <input type="submit" value="Enviar" name="Enviar">
        <input type="reset" value="limpar">  <br><br>


    </form>
    <a href="{{route('Lotes.index')}} ">Voltar</a>
@endsection
