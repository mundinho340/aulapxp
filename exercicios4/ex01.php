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

    function menor($a , $b, $c){
        if($a> $b && $b>$c){
            $menor =$c;
        }
        else if($a>$c &&$c>$b ){

            $menor=$b;
        }
        else if($b> $c&& $c>$a){
            $menor=$a;
        }else if($b>$a && $a>$c){
            $menor =$c;
        }else if($c >$a && $a>$b){
            $menor =$b;
        }else if ($c >$b && $b>$a){
            $menor=$a;
        }

        return $menor;
    }
    $ol= menor(8,3,2);
    echo $ol;




    ?>
</body>
</html>