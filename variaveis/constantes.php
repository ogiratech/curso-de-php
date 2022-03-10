<div class="titulo">Constantes</div>

<?php

//Constantes seguem o padrão UPPERCASE e _underline_ 
//Constantes não usam o $

define ('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;

const NOVA_TAXA = 2.5;
ECHO '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
// define('NOVISSIMA_TAXA', $valorVariavel);
// const NOVISSIMA_TAXA = $valorVariavel;
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;


