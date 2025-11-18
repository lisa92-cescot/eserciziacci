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


/**Operatori logici 
*
*AND -> And oppure &&
*OR -> or oppure ||
*XOR -> xor
*NOT -> !
*/

if (true and false):
    echo "Condizione vera";
else:
    echo "Condizione falsa";
endif;

$persona_1 = array (
    "nome" => "Luca",
    "cognome" => "Rossi",
    "telefono" => ""
);

$persona_2 = array (
    "nome" => "Lorenza",
    "cognome" => "Verdi"
);

if ($persona_1["telefono"] !=""):
echo "Tel: ";
echo $persona_1["telefono"];
endif;

if (array_key_exists("telefono", $persona_2) && $persona_2 ["telefono"] !=""):
echo "Tel": ";
echo $persona_2 ["telefono"];
endif;


?>