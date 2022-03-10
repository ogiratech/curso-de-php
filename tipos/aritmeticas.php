<div class="titulo">Operações Aritméticas</div>

<?php

echo 1 + 1, '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7,4), '<br>'; // Divisão inteiro
echo round( 7 / 4 ), '<br>'; //Arredonda o resultado da operação em parenteses
echo 7 % 4, '<br>';
echo 7 % 2, '<br>';
echo 8 % 2, '<br>';


echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2; 

