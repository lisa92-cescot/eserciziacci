//*Commento multilinea*/
//Commento in linea

//Stampa in console
console.log("Ciao, mondo!");
//Popup un messaggio

//window.alert("Benvenuto!");

//Mostra un popup che restituisce true o false
//window.log(window.confirm("Sei sicuro?"));

//Mostra un popup che chiede un dato
//window.prompt("Inserisci il tuo nome:");


//Dichiarazione di variabile
var stringa1 = "Ciao, mondo!"; //Variabile globale
let stringa2 = "Ciao mondo!"; //Variabile locale
const costante = "Ciao mondo!"; //Variabile costante


// Stringhe
var stringa ="Insieme di caratteri";
console.log(stringa[2]); //String

//Interi -> int
var intero = 1;
console.log(typeof intero); //Number

//Decimali -> float
var decimale = 1.2;
console.log(typeof decimale); //Number

//Booleani -> true o false
var bool = true;
console.log(typeof bool); //Boolean

//Array -> insieme di valori
var array = [1, 2, 3, 4, 5, 6];
console.log(typeof array); 

// Oggetto
var object = {
    nome: "Mario",
    cognome: "Rossi",
    eta: 30
};
console.log(typeof object); //Object

//Operatori matematici
var a =1;
var b =2;

console.log(a + b); //Addizione
console.log(a - b); //Sottrazione
console.log(a * b); //Moltiplicazione
console.log(a / b); //Divisione
console.log(a % b); //Modulo


a = 1;
console.log(a++); // Leggo e poi Incremento
console.log(++a); // Incremento e poi leggo

//Operatori logici
console.log(a < b);
console.log(a <= b);
console.log (!(a == 3)); //Uguaglianza
console.log (!(a == "3")); //Uguaglianza per valore
console.log (!(a === 3)); //Uguaglianza per valore e tipo

console.log(!(a<b)); //NOT
console.log(a == 3 && b == 1); //AND
console.log(a == 3 || b == 1); //OR

//Concatenazione
console.log(stringa1 + stringa2);

a =2;
b =3;
c = "1";
var somma = a + c;

console.log(a + b); // Somma
console.log(a + c); // Concatenazione
console.log(somma + b); // 213
console.log/(somma > 20); //Somma viene convertita in numero
console.log(somma.lenght); //2 -> Lunghezza della stringa
console.log(a + b + c); // 51

var d;
console.log(d); //
d = undefined;

var e = null;
console.log(e); //null

var oggetto = {
    "nullo": null,
    "undefined": undefined
};
console.log(oggetto); 
console.log(d == true); //Falso!
console.log(e == true); // Falso!
console.log(d == e); //Entrambi falsi -> true
console.log(d === e) // Null è diverso da undefined