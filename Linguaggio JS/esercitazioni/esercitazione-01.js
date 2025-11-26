let giorno = window.prompt("Inserisci il giorno");
let mese = window.prompt("Inserisci il mese");
let anno = window.prompt("Inserisci l'anno");

document.getElementById("es1-dataInserita").innerText =  giorno + "/" + mese + "/" + anno;

let dataFutura;
let risultato;

if (anno == 2025) {
    if (mese == 11) {
        if (giorno == 26) {
            document.getElementById("es1-risultato").innerText = "Hai inserito la data odierna!";
    }

} else {
    dataFutura = (anno > 2025);

    } }
if (risultato) {
    document.getElementById("es1-risultato").innerText = "La data inserita è nel futuro!";
} else {
    document.getElementById("es1-risultato").innerText = "La data inserita è del passato!";
}

function esercizio02 () {
    let giorno = window.prompt("Inserisci il giorno");
    let mese = window.prompt("Inserisci il mese");
    let anno = window.prompt("Inserisci l'anno");
   let data = new Date (mese + "/" + giorno + "/" + anno);

    data.getDay();
}


   