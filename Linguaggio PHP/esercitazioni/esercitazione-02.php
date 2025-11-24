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

