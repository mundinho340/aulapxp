//array do tipo vector e de tipo matriz
<?php
    
    $n= array(
        array('nome', 'nota1', 'nota2', 'media'),
        array('raimundo',10, 10,10),
        array('linda', 10,10,10),
        array('lucas', 10,10,10)

    );

echo "<table border=1 width=400>";
    foreach($n as $i=> $valor){
        echo "<tr>";
        foreach($n[$i] as $valor){
            echo "<td>". $valor."</td>";
        }
        echo "</tr>";

    }
?>