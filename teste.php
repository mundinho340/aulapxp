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
        $nome = $_GET['nome'];
        $idade =$_GET['idade'];
        $n1 =$_GET['a'];
        $n2 =$_GET['b'];
        echo "nome do estudante: $nome ||idade do estudante: $idade ||nota1:$n1 ||nota2: $n2 media final: ",($n1+$n2)/2;


    ?>
</body>
</html>