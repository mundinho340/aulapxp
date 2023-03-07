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
      $altura;
      $peso;
      $sexo;
      switch(sexo){
        case 'masculino':
            $peso =(72.7*$altura)-58;
            echo 'O peso ideal $peso'
            break;
            case 'femenino':
                $peso =(62.1*$altura)-44;
            break;
      }
    ?>
</body>
</html>