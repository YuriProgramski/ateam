
"use strict";
let nameTxt;
let allesCorrectIngevuld = true;
let emailTxt;

function controleerVoorwaardenVoornaam() {
    if (voornaamTxt.length < 2) {
        document.getElementById("error_namecontactsend").innerHTML = "Minstens 2 karakters lang!";
        allesCorrectIngevuld = false;
    }
    else {
        document.getElementById("error_namecontactsend").innerHTML = "";
    }
}

function controleerVoorwaardenEmail() {
    let regExp = /^[A-Za-z][\.A-Za-z0-9+_-]+@[\.A-Za-z0-9-]+\.[A-Za-z]{2,20}$/;
    if (regExp.test(emailTxt) == false) {
        document.getElementById("error_emailcontactsend").innerHTML = "Dit is niet correct!";
        allesCorrectIngevuld = false;
    }
    else {
        document.getElementById("error_emailcontactsend").innerHTML = "";
    }
}




function submitcontact() {
    nameTxt = document.getElementById("namecontactsend").value;
    emailTxt = document.getElementById("emailcontactsend").value;
    //Via JS vraag je het element uit de webpagina op met de id voornaam. Van dat element vraag je de value op, de inhoud
    allesCorrectIngevuld = true;
    //als er op de knop geklikt wordt, moet het bijhouden van de fouten gereset worden
    if (nameTxt.length == 0) {
        document.getElementById("error_namecontactsend").innerHTML = "Vul in a.u.b.";
        allesCorrectIngevuld = false;
    }
    else {
        //aparte functie aanmaken om de voorwaarden te controleren
        controleerVoorwaardenVoornaam()
    }
    //uiteindelijk controleren of alles correct is
    //deze if blijft altijd allerlaatst in de verstuur() functie
    if (emailTxt.length == 0) {
        document.getElementById("error_emailcontactsend").innerHTML = "Vul in a.u.b.";
        allesCorrectIngevuld = false;
    }
    else {
        controleerVoorwaardenAchternaam();
    }

    if (allesCorrectIngevuld) {
        document.write("Naam is correct ingevuld");
    }
}//einde verstuur()