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
    $n1 = $_GET['a'];
    $n2 = $_GET['b'];
    $op= $_GET["v"];

    echo "Os valores introduzidos foram $n1 $n2 ";

    $result = $op == 's'?$n1+$n2 : $n1 *$n2;
    echo "  Resultado $result"
?>
</body>
</html>