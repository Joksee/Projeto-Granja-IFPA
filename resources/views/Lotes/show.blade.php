<h1>produto {{$lote->id ?? ''}} </h1>
<ul>
    <li>ID:             {{$lote->id ?? '' }}</li> 
    <li>Local:          {{$lote->localLotes}}       </li>
    <li>Peso Inicial:   {{$lote->pesoInicialLotes}} </li>
    <li>Peso Médio:     {{$lote->pesoMedioLotes}}   </li>
    <li>Valor Pago:     {{$lote->valorPagoLotes}}   </li>
    <li>Data de Inicio: {{$lote->dataInicialLotes}} </li>
</ul>

TABLEA DOS FRANGOS DESSE LOTE