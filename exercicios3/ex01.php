<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = array(
            1,4,5,6,6
        );
        $pares=0;
        $impares=0;
        $maior = max($n);
        $menor=min($n);
        
            for($i=0; $i<5;$i++){
                if($n[$i] % 2==0){
                    $pares++;
                }else {
                    $impares=$i;
                }

            }

            echo "No total sao $pares numeros pares e $impares numeros impares o maior numero é $maior menor numero é $menor";
        
    ?>
</body>
</html>