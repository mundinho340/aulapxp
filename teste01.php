<?php
    $div;
    function soma($a, $b, $c){
        return $a+$b+$c;
    }
    $soma = soma(10,10,10);
    function media($a){
       $media =$a/3;
        return $media;
    }

    $media =media($soma);
    echo "a soma entre os valores é $soma a media é $media";
?>