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
        $preco = $_GET['a'];
        $desconto = $preco+($preco*0.1);
        echo "O preço do produto : $preco";
        echo "<br>o preço com aumento de 10% é $desconto";
    ?>
</body>
</html>