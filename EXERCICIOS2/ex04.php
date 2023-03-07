<?php
$div = array(0,1,2,3,4,5,6,7,8,9);
$contador = 0;
    for($i =0; $i<count($div); $i++){
        if($div[$i]%9 ==0){
            $contador++;
            echo $div[$i];
        }
        //sreturn $contador;
    }
    echo "a soma dos numeros são $contador";
?>