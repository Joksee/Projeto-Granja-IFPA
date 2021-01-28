<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Formulário Frangos Alterar</title>
    </head>
    <h2>Tela de alterar lotes</h2>
        <p>Informações para alterar um lote</p>
        <form action="{{ route('Lotes.update', $id) }}" method="POST" id="formularioLotes" >
        @csrf
        @method('PUT')

                <br><br>
            
                <p>Editando o Lote(ID)= {{ $id }}</p>
        
            <hr>
            <label for="localLotes">Gaiola </label>
            <input type="char(10)" name="localLotes"  placeholder="Local">
            <br>

            <label for="valorPagoLotes">Valor pago </label>
            <input type="decimal(5,2)" name="valorPagoLotes"  placeholder="R$">
            <br>

            <label for="pesoInicialLotes">Peso do lote </label>
            <input type="decimal(5,2)" name="pesoInicialLotes"  placeholder="Kg">
            <br>
            
            <label for="pesoMedioLotes">Peso médio do lote </label>
            <input type="decimal(5,2)" name="pesoMedioLotes"  placeholder="Kg">
            <br>

            <label for="dataInicial">Data de Criação</label>
            <input type="date" name="dataInicialLotes" > <br>
            
            <hr>
            <br>
            <input type="submit" value="Enviar" name="Enviar">
            <input type="reset" value="limpar">  <br><br>


        </form>

        
    </body>
</html>