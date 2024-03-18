//(1013) The Greatest
<?php

function maior($a, $b) {
    return ($a + $b + abs($a - $b)) / 2;
}

$valores = explode(' ', readline());
$a = $valores[0];
$b = $valores[1];
$c = $valores[2];

$result = maior(maior($a, $b), $c);

echo $result . " eh o maior\n";

?>






//(1018) Banknotes

<?php

$N = 576;
fscanf(STDIN, "%d", $N);

echo $N . "\n";

echo intdiv($N, 100) . " nota(s) de R$ 100,00\n";
$N %= 100;
echo intdiv($N, 50) . " nota(s) de R$ 50,00\n";
$N %= 50;
echo intdiv($N, 20) . " nota(s) de R$ 20,00\n";
$N %= 20;
echo intdiv($N, 10) . " nota(s) de R$ 10,00\n";
$N %= 10;
echo intdiv($N, 5) . " nota(s) de R$ 5,00\n";
$N %= 5;
echo intdiv($N, 2) . " nota(s) de R$ 2,00\n";
$N %= 2;
echo $N . " nota(s) de R$ 1,00\n";


?>






//(1133) Rest of a Division

<?php


$X = intval(fgets(STDIN));
$Y = intval(fgets(STDIN));


if ($X > $Y) {
    list($X, $Y) = array($Y, $X);
}


for ($i = $X + 1; $i < $Y; $i++) {
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo $i . "\n";
    }
}

?>









//(1101) Sequence of Numbers and Sum

<?php

while (true) {
    
    list($M, $N) = explode(' ', fgets(STDIN));
    $M = intval($M);
    $N = intval($N);

    
    if ($M <= 0 || $N <= 0) break;

    
    $menor = min($M, $N);
    $maior = max($M, $N);

    $soma = 0;
    $sequencia = "";
   
    for ($i = $menor; $i <= $maior; $i++) {
        $sequencia .= $i . " ";
        $soma += $i;
    }

    
    echo $sequencia . "Sum=" . $soma . "\n";
}

?>









//(1789) The Race of Slugs

<?php

while ($linha = fgets(STDIN)) {
    $L = intval(trim($linha)); 
    $velocidades = array_map('intval', explode(" ", trim(fgets(STDIN)))); 

    $maiorVelocidade = max($velocidades); 

   
    if ($maiorVelocidade < 10) {
        $nivel = 1;
    } elseif ($maiorVelocidade < 20) {
        $nivel = 2;
    } else {
        $nivel = 3;
    }

    echo $nivel . "\n";
}

?>








//(1071) Sum of Consecutive Odd Numbers 

<?php


$X = intval(fgets(STDIN));
$Y = intval(fgets(STDIN));


if ($X > $Y) {
    list($X, $Y) = array($Y, $X);
}

$somaImpares = 0;

for ($i = $X + 1; $i < $Y; $i++) {
    if ($i % 2 !== 0) {
        $somaImpares += $i;
    }
}


echo $somaImpares . "\n";

?>







//(1103) Alarm Clock

<?php

while (true) {
    fscanf(STDIN, "%d %d %d %d", $H1, $M1, $H2, $M2);

    
    if ($H1 == 0 && $M1 == 0 && $H2 == 0 && $M2 == 0) {
        break;
    }

    
    $inicio = $H1 * 60 + $M1;
    $alarme = $H2 * 60 + $M2;

   
    if ($alarme < $inicio) {
       
        $tempoParaDormir = (24 * 60 - $inicio) + $alarme;
    } else {
        
        $tempoParaDormir = $alarme - $inicio;
    }

    echo $tempoParaDormir . "\n";
}

?>



//(1024) Encryption





//(1168) LED

<?php


$N = intval(fgets(STDIN));


$ledsPorDigito = [
    '0' => 6, '1' => 2, '2' => 5, '3' => 5, '4' => 4,
    '5' => 5, '6' => 6, '7' => 3, '8' => 7, '9' => 6
];


for ($i = 0; $i < $N; $i++) {
   
    $valor = trim(fgets(STDIN));

    
    $totalLeds = 0;
    for ($j = 0; $j < strlen($valor); $j++) {
        $totalLeds += $ledsPorDigito[$valor[$j]];
    }

    
    echo $totalLeds . " leds\n";
}

?>









//(1253) Caesar Cipher 

<?php

function decodificarCifraCesar($textoCodificado, $deslocamento) {
    $textoDecodificado = '';
    for ($i = 0; $i < strlen($textoCodificado); $i++) {
       
        $codigoLetra = ord($textoCodificado[$i]) - ord('A');
        
        $codigoDecodificado = ($codigoLetra - $deslocamento + 26) % 26;
        
        $textoDecodificado .= chr($codigoDecodificado + ord('A'));
    }
    return $textoDecodificado;
}


$N = intval(fgets(STDIN));


for ($i = 0; $i < $N; $i++) {
   
    $textoCodificado = trim(fgets(STDIN));
    
    $deslocamento = intval(fgets(STDIN));
   
    echo decodificarCifraCesar($textoCodificado, $deslocamento) . "\n";
}

?>








//(1259) Even and Odd 

<?php


$N = intval(fgets(STDIN));

$pares = [];
$impares = [];


for ($i = 0; $i < $N; $i++) {
    $valor = intval(fgets(STDIN));
    if ($valor % 2 == 0) {
        $pares[] = $valor;
    } else {
        $impares[] = $valor;
    }
}


sort($pares);
rsort($impares);


foreach ($pares as $par) {
    echo $par . "\n";
}
foreach ($impares as $impar) {
    echo $impar . "\n";
}

?>









//(1028) Collectable Cards

<?php


function maximoDivisorComum($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}


$N = intval(fgets(STDIN));


for ($i = 0; $i < $N; $i++) {
    
    list($F1, $F2) = explode(' ', fgets(STDIN));
    $F1 = intval($F1);
    $F2 = intval($F2);

    
    $resultado = maximoDivisorComum($F1, $F2);

   
    echo $resultado . "\n";
}

?>
