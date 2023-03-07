<?php
    $n =[3,4,5,5,6,4,6];
    $soma ;
    for($i=0; $i<7; $i++){
        // echo $n[$i];
        if($n[$i]%2!=0){
            $soma+=$n[$i];
        }
    }
    $posicao = count($n)-1;
    echo "A soma dos valores impares é $soma o valor inicial é $n[0] o valor final é ".$n[$posicao];
?>