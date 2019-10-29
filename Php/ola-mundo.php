<?php 

$idade = 18;
$valorCrediario = 79.90;
$valorMinimo = 80;
$clientePrioritario = true;

echo "=========== BAIXA DE CREDIARIO ==========" .PHP_EOL;
echo "Valor informado: $valorCrediario" .PHP_EOL;
if ($valorCrediario >= 100 || $clientePrioritario) {
    echo "Crediario Pago. Valor pago: $valorCrediario " . PHP_EOL;
}
else{
    echo "Valor Minimo para pagamento: $valorMinimo ! Valor não registrado!" . PHP_EOL;
}


$numeroTabuada = 3;
echo "@@@@ Tabuada de $numeroTabuada @@@@".PHP_EOL;
for ($contador = 1; $contador <=10; $contador++){
    $resultado = $numeroTabuada*$contador;
    echo "$numeroTabuada x $contador =  $resultado ".PHP_EOL;
}

echo "@@@@ IMC @@@@".PHP_EOL;
$peso = 86;
$altura = 1.75;
$imc = $peso / $altura ** 2;

echo "IMC: $imc " .PHP_EOL;

if ( $imc < 18 ) {
    echo "Abaixo";
} elseif ( $imc < 25 ) {
    echo "dentro";
} else {
    echo "acima";
}


