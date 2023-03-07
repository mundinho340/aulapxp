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
        $ano = 2003;
        $now = date('Y');
        $idade = $now-$ano;
        $dias = $idade*365;
        $semanas = $dias/52.179;
        echo "voce tem $idade anos , $dias dias , $semanas semanas  ";
?>
</body>
</html>