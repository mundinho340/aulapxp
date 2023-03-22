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
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $result ;
        $media = ($n1+$n2)/2;
        $media>7? $result= "aprovado" : $result="reprovado";
        echo "A media entre $n1 e $n2 é $media";
        echo "O aluno esta ".(($media<6)?" Reprovado": "  Aprovado");

    ?>
</body>
</html>