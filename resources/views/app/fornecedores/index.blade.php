<h3>Fornecedor</h3>

@php

@endphp 

@if(count($fornecedores) > 0 && count($fornecedores) <10)
    <h3> Existem alguns fornecedores</h3>
@elseif(count($fornecedores)>10)
    <h3> Existem vários fornecedores</h3>
@else
<h3> ainda não existem fornecedores</h3>
@endif

<br>
Fornecedor: {{ $fornecedores[0]['nome']}}
<br>
Status: {{ $fornecedores[0]['status']}}
<br>
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless

