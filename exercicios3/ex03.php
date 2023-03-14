<?php
    $a= array(
        array(2,3,4,5,3),
        array(3,4,5,6,6)
    )

    echo "<table border=1 width=400>";
    foreach($n as $i=> $valor){
        echo "<tr>";
        foreach($n[$i] as $valor){
            echo "<td>". $valor."</td>";
        }
        echo "</tr>";

    }

?>