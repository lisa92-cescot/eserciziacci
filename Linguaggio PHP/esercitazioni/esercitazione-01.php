<?php

$a = 12;
$b = 24;

$somma =  $a + $b;
$differenza = $a - $b;
$moltiplicazione = $a * $b;
$divisione = $a / $b;

?>
    <div>
        <h2>Esercizio 1</h2>
        <ul>
            <li><strong>Somma:</</strong> <?php echo $somma; ?><li>
            <li><strong>differenza:</</strong> <?php echo $differenza; ?><li>
            <li><strong>moltiplicazione:</</strong> <?php echo $moltiplicazione; ?><li>
            <li><strong>divisione:</</strong> <?php echo $divisione; ?><li>
        </ul>
    </div>
<?php

$parola = "albero";

if ($parola == "casa") {
    echo "La parola è \"Casa\"";
} else {
    echo "La parola è diversa da \"Casa\"";
}

$c = "145";
$d = 145

?>
<div>
    <h2>Esercizio 3 </h2>
    <h3>Uguaglianza per valore </h3>
    <p>
        <?php
        if ($c === $d) {
            echo "C è uguale a D";
        } else {
            echo "C è diverso da D";
        }
        ?>
    </p>
    </div>
<?php 

$voto = 6;
$giudizio = false;

    if ($voto <=5) {
        $giudizio = 'insufficiente';
    }
    elseif ($voto == 6) {
        $giudizio = 'sufficiente';
    }
    elseif ($voto == 7 or $voto == 8) {
        $giudizio = 'buono';
    }
    elseif ($voto == 9) {
        $giudizio = 'ottimo';
    }
    elseif ($voto == 10) {
        $giudizio = 'eccellente';
    }

    echo $giudizio;
    
    ?>
    <div>
        <h2>Esercizio 5 <h2>
        <p>Il giudizio è: <?php echo $giudizio; ?></p>
    </div>
    
    <?php