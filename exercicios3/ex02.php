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
        $a=[];
        
         echo "vector original";
        for($i =0;$i<20; $i++){
            $n = random_int(0,10);
            $a[$i]= $n;
            echo " ".$n." " ;
            
        }
     
         echo "<br> 
         vector organizado";
         sort($a);
        for($j =0;$j<20; $j++){
            
           echo " ".$a[$j];
        }
       
    ?>
</body>
</html>