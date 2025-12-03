function esercizio01(){
    let numeroInserito = window.prompt("Inserisci un numero da 1 a 10");
    let numeroDaTrovare = 5;

    while(numeroInserito != numeroDaTrovare){
        numeroInserito = window.prompt("Sbagliato, riprova!");
    }

    document.getElementById('es1-numeroScelto').innerText = numeroDaTrovare;
    document.getElementById('es1-risultato').innerText = "Congratulazioni!";
  

}