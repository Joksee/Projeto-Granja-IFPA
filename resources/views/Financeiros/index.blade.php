@extends('Layouts.app')

@section('titulo', 'Financeiro Index')

@section('content')
<h3>Modulo de teste: Financeiro</h3> <br>
    
    <br>
    <p>Cadastro de um novo mês financeiro</p>
    <form action= "{{route('Financeiros.store') }}"  method="POST">
        @csrf
        <hr>
        <label for="mesFinanceiros">Mês</label>   
            <select name="mesFinanceiros">
                    <option value="1" selected>1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                    <option value="8" >8</option>
                    <option value="9" >9</option>
                    <option value="10" >10</option>
                    <option value="11" >11</option>
                    <option value="12" >12</option>
            </select>

            <label for="anoFinanceiros">Ano </label>
            <input type="decimal(4,0)" name="anoFinanceiros"  placeholder="">
            
        <input type="submit" value="Cadastrar" name="Enviar">
        <input type="reset" value="limpar">  <br><br>
    <br>

    <hr>
    <table class="table ">
        <thead>
            <tr>
            <!-- <th scope="col">ID</th>  C:talvez nao precise mostrar o id--> 
                <th scope="col">Ano</th>
                <th scope="col">Mês</th>
                <th scope="col">Saldo</th>
                <th scope="col">Update</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($financeiros as $financeiro)
                <tr scope="row">
                   <!-- <td> {//{ $financeiro->id }} </td> --> 
                    <td>{{ $financeiro->anofinanceiros}} </td>
                    <td>{{ $financeiro->mesFinanceiros }} </td>
                    <td>{{ $financeiro->saldoMesFinanceiros}} </td>
                    <td><a href="{{ route('Financeiros.edit', $financeiro->id) }} "class="btn btn-link">Editar</a></td>
                    <td><a href="{{ route('Financeiros.show', $financeiro->id) }} " class="btn btn-link">Detalhe</a></td>
                </tr>         
            @endforeach
        </tbody>
    </table>    
    <hr>
    <br><br><br>
    <a href="menu.html">Voltar</a>
@endsection