<?php

    /*Stringhe*/
    echo "<h1 class='classe'>Hello World!</h1>";
    echo '<h2 class="classe" attr=\'qui non sono nella stringa\'>Tipi di Dato:</h2>';

    /*Booleani*/
    //Vero-> true
    //Falso ->false

    /* Numeri*/
    echo 10;
    echo "\n"; // a caspo nel documento di output*//
    echo 1.15;

    /* <Array>*/
    $nome_variabile; // Ok
    $nomeVariabile;  // Ok
    $nomevariabile;  //Attenzione!

    /* <Array>*/
    $array_1 = [1,2,3,4,5]; //Array anonimo, si accede ai valori usando l'indice
    $array_2 = array(1,2,3,4,5);

    //Array con chiavi per accedere ai valori
    $array_3 = array(
    "nome" => "Mario",
    "cognome" => "Rossi",
    "età" => 21,
    );

    echo $array_3; //Non posso stampare direttamente un array
    echo "<br/>";
    print_r($array_3);
    echo "<br/>";
    var_dump($array_3);

    //Verifica se Mario Rossi è maggiorenne
    if ($array_3 ["età"] >= 18) {
    echo "Utente maggiorenne";
    } else {
    echo "Utente minorenne";
    }
    //Verifica se Mario Rossi ha 18 anni
    if ($array_3["età"] == "18") {
        echo "Utente diciottenne </br>";
    } else {
        echo "Utente non diciottennte </br>";
    }

    //Uguaglianz stretta, controlla valore E tipo
    if ($array_3 ["età"] == 21) {} //Questa condizione è VERA!
    if ($array_3 ["età"] == "21") {} //Questa condizione è VERA!
    if ($array_3 ["età"] === 21) {} //Questa condizione è FALSA!
    if ($array_3 ["età"] === "21") {} //Questa condizione è FALSA!

   $voti = [6, 7, 7.5, 4, 9, 8];


    $somma = 0;
    $num_voti = 0;



    for ($i = 0; $i < count($voti); $si++) :
        $somma = $somma + $voti [$i];
        $num_voti++;
    endfor;

    echo "La somma dei voti è: " . $somma;
    echo "Il numero è: ". count($voti);
    echo "il numero di voti validi è: " . $num_voti;
    $media = $somma / $num_voti;
    echo "La media dei voti è:" . $media;

    $numero = 45;
    $valori = [1, 3, 6, 87, 23, 5, 45, 17, 89, 12, 34];

    $trovato = false;

    $i = 0;
    while (!$trovato) :
        if($valori [$ì] == $numero) :
            $trovato = true;
        endif;
        $si++;
    endwhile;

    /**
     * Ciclo for equivalente
     **/
     for ($i = 0; !$trovato && $i < count($valori); $i++) :
        if ($valori [$i] == $numero) :
            $trovato = true;
        endif;
    endfor;
    

    if($trovato) :
        echo$numero . " è presente nell'array (" . $i . "iterazioni)";
     else :
        echo $numero . "non è presente nell'array (" . $i . "iterazioni)";
     endif;

     /**
      * Operatori di incremento e decremento
      */
     $i = 1;
     echo $i++; //stampa il valore (1) e poi lo incrementa (2)
     br();
     echo ++$i; // incrementa il valore (3) e poi lo stampa (3)
     br();

    
     echo $i--;
     br();
     echo --$i;
     br();

      // sunday 3, August 2025
        function formatta_data($data) {
            $parti = explode(" ", $data);

        }

        function traduci_giorno_settimana($giorno) {
            switch(strtolower($giorno)):
        }

            case "monday" :
                echo "Lunedì";
                break;
                case "tuesday" :
                echo "Martedì";
                break;
                case "wednesday" :
                echo "Mercoledì";
                break;
                case "thursday" :
                echo "Giovedì";
                break;
                case "friday" :
                echo "Venerdì";
                break;
                case "saturday" :
                echo "Sabato";
                break;
                case "sunday" :
                echo "Domenica";
                break;
            default:
                    echo "Giorno non valido";
            endswitch;
        endfor;

        function traduci_mese($mese) {
            switch(strtolower($mese)):
                case "january" :
                echo "Gennaio";
                break;
                case "febryary" :
                echo "Febbraio";
                break;
                case "march" :
                echo "Marzo";
                break;
                case "april" :
                echo "Aprile";
                break;
                case "friday" :
                echo "Venerdì";
                break;
                case "saturday" :
                echo "Sabato";
                break;
                case "sunday" :
                echo "Domenica";
                break;
            default:
                    echo "Giorno non valido";
            endswitch;
        endfor;
        }

        $studenti = [
    array(
        "nome" => "Mario",
        "eta"  => 19
        "voti" => [3, 7, 6, 10]
    ),
    array(
        "nome" => "Lucia",
        "eta"  => 14
        "voti" => [8, 7, 6, 10]
    ),
    array(
        "nome" => "Rosa",
        "eta"  => 21
        "voti" => [2, 7, 6, 8]
    ),
    array(
        "nome" => "Francesco",
        "eta"  => 24
        "voti" => [6, 7, 9, 5]
    ),
    array(
        "nome" => "Giuseppe",
        "eta"  => 16
        "voti" => [3, 8, 6, 9]
    ),
    array(
        "nome" => "Marta",
        "eta"  => 22
        "voti" => [6, 5, 6, 7]
    )
];
    function calcola_media ($voti) {
        $somma =0;
        for ($i = 0; $i < count($voti); $i++) :
            $somma += $voti [$i];
        endfor;

        $media = $somma / count($voti);
        return $media;
    }
        foreach ($studenti as $studente) :
            $media = calcola_media ($studente ['voti']);
            echo $studente ['nome'] . " ha una media di " .$media;
            if ($media >=6) :
                echo "Promosso.";
            else:
                echo "Bocciato.";
            endif;
            br()
        endforeach;


       
            

   

?>