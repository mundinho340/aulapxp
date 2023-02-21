<!DOCTYPE html>
<html lang="en">
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
?>
</body>
</html>