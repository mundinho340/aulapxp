<?php
    $preco=7.5;
    $precoTotal=0;
    $quantidade = $_GET["a"];
    $iva;

    if($quantidade < 100){
        $iva = 0;
        $precoTotal= $preco*$quantidade;

    }else if($quantidade>100){
        $iva = ($quantidade*$preco)*0.1;
        $precoTotal = $iva+($preco*$quantidade);
    }else if($quantidade>500){
        $iva = ($quantidade*$preco)*0.16;
        $precoTotal= $iva+($preco*$quantidade);
    }

    echo "A quantidade é $quantidade o preço a pagar é $precoTotal";
?>