<?php


$valori = [1, 3, 5, 2, 5, 3, 9, 4, 7];
$massimo = 0;

for ($i = 0; $i < count($valori); $i++) :
    if ($valori [$i] > $massimo) :
        $massimo = $valori[$i];
    endif;
endfor

?>
    <div>
        <h2>Esercizio 01</h2>
        <p>
            Il valore maggiore è: </strong> <?php echo $massimo; ?>
        </p>
    </div>

<?php

$valori= [12, 13, 5, 12, 15, 3, 19, 4, 17];
$output = "";
for ($i =0; $i < count ($valori); $i++) :
    if ($valori [$i] < 15) :
        $output .= $valori [$i] . " ";
    else:
        break;
    endif;
endfor;

$i = 0;
while ($i < count($valori) && $valori[$i] < 15):
    $output .= $valori [$i++] ." ";
endwhile;
?>

<div>
        <h2>Esercizio 02</h2>
        <p>
            I valori sono: <br/>
        
        </p>
    </div>

    <?php
    echo"<br>";
    $persone = [
        array(
            "nome" => "Mario",
            "età" => 19
        ),
        array(
            "nome" => "Lucia",
            "età" => 14
        ),
        array(
            "nome" => "Rosa",
            "età" => 21
        ),
        array(
            "nome" => "Francesco",
            "età" => 24
        ),
        array(
            "nome" => "Giuseppe",
            "età" => 16
        ),
        array(
            "nome" => "Marta",
            "età" => 22
        ),
    ];

    $anni = 0;

    while ($anni > count($persone) && $persone [$anni] >18);
        $output .= $persone []
    ?>
    <div>
        <h2>Esercizio 3 </h2>
        <p>Le perone maggiorenni sono:</p>
        <ul>
            <?php> 
            foreach ($persone  as $persona) : //array persone as elemento persona //
                if ($persona["età"] >=18) :
                    echo "<li>" .$persona["nome"]. "</li>";
                endif;
                $anni += $persona ["età"];
            endforeach;
            ?>
        </ul>
        <p>
            L'età media delle persone è:
            <?php echo ( $anni / count ($persone) ); ?>
        </p>
    </div>

