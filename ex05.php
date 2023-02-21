<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações aritmetriicas</title>
</head>
<body>
    <?php
        $n1 =$_GET['b'];
        $n2 =$_GET['a'];
        $media =($n1+$n2)/2;
        $soma =$n1+$n2;
      
    echo "a soma de $n1 + $n2 é igual a ",$n1+$n2;
    echo "<br>a multiplicacao de $n1 x $n2 é igual a ",$n1*$n2;
    echo "<br>a divisao de $n1/$n2 é igual a ".$n1/$n2;
    echo "<br>a subtração de $n1-$n2 é igual a ".$n1-$n2;
    echo "<br>o modulo de $n1 % $n2 é igual a ".$n1%$n2;
    echo "<br> a media é $media"; 
    //funcoes matematicas
    echo 'Funcoes matematicas';
    $n=-3.5;
    echo "<br>$n";
    echo "<br>o valor absoluto de $n é ",abs($n);
    echo "<br>a potencição de $n<sup>2</sup> é ",pow($n, 2);
    echo "<br>a raiz quadrada de $n é ",sqrt($n);
    echo "<br>arredondanto o numero $n ",round($n);
    echo "<br>valor inteiro do numero $n ",intval($n);
    echo "<br>formatar o valor $n para ",number_format($n,4);


?>
</body>
</html>