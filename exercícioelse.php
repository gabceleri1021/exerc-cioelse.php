<?php
//Variáveis
$nota1 = 8;
$nota2 = 10;
$nota3 = 6;

$media = ($nota1+$nota2+$nota3) / 3; //Variavel --> descubrir a média

//Verificar se a média está dentro do mínimo ou não
if ($media >= 7) {
    echo 'Parabens, você foi aprovado!';
} else{
    echo 'Essa não, você foi reprovado...';
}



?>