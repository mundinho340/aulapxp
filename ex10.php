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
        $anoNasc = $_GET["a"];
        $idade = 2023-$anoNasc;
        $result;
        echo "Nasceu no ano $anoNasc a tua idade é $idade";
        echo "O cidadao ". ($idade >=18 && $idade<65)?" É OBRIGATORIO VOTAR ":" NAO É OBRIGATORIO VOTAR";
?>
</body>
</html>