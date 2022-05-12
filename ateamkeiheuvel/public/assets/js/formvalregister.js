
"use strict";

let allesCorrectIngevuldRegister = true;
let passwordregister;
let password_confirmationregister;
let nameregister;
let emailregister;

function controleerVoorwaardenVoornaamRegister() {
    if (nameregister.length < 2) {
        document.getElementById("error_nameregister").innerHTML = "Minstens 2 karakters lang!";
        allesCorrectIngevuldRegister = false;
    }
    else {
        document.getElementById("error_nameregister").innerHTML = "";
    }
}

function controleerVoorwaardenWachtwoordRegister() {
    if (passwordregister.length < 7) {
        document.getElementById("error_passwordregister").innerHTML = "Minstens 7 karakters";
        allesCorrectIngevuldRegister = false;
    }
    else if (passwordregister.length > 20) {
        document.getElementById("error_passwordregister").innerHTML = "Max 20 karakters";
        allesCorrectIngevuldRegister = false;
    }
}

function controleerVoorwaardenWachtwoordBevestiging() {
    if (passwordregister != password_confirmationregister) {
        document.getElementById("error_password_confirmationregister").innerHTML = "Komt niet overeen!";
        allesCorrectIngevuldRegister = false;
    }
    else {
        document.getElementById("error_password_confirmationregister").innerHTML = "";
    }
}


function controleerVoorwaardenEmailRegister() {
    let regExp = /^[A-Za-z][\.A-Za-z0-9+_-]+@[\.A-Za-z0-9-]+\.[A-Za-z]{2,20}$/;
    if (regExp.test(emailregister) == false) {
        document.getElementById("error_emailregister").innerHTML = "Dit is niet correct!";
        allesCorrectIngevuldRegister = false;
    }
    else {
        document.getElementById("error_emailregister").innerHTML = "";
    }
}




function submitregister() {
    nameregister = document.getElementById("nameregister").value;
    passwordregister = document.getElementById("passwordregister").value;
    emailregister = document.getElementById("emailregister").value;
    password_confirmationregister = document.getElementById("password_confirmationregister").value;
    //Via JS vraag je het element uit de webpagina op met de id voornaam. Van dat element vraag je de value op, de inhoud
    allesCorrectIngevuldRegister = true;
    if (nameregister.length == 0) {
        document.getElementById("error_nameregister").innerHTML = "Vul in a.u.b.";
        allesCorrectIngevuldRegister = false;
    }
    else {
        //aparte functie aanmaken om de voorwaarden te controleren
        controleerVoorwaardenVoornaamRegister()
    }
    //als er op de knop geklikt wordt, moet het bijhouden van de fouten gereset worden
    if (emailregister.length == 0) {
        document.getElementById("error_emailregister").innerHTML = "Vul in a.u.b.";
        allesCorrectIngevuldRegister = false;
    }
    else {
        //aparte functie aanmaken om de voorwaarden te controleren
        controleerVoorwaardenEmailRegister()
    }
    //controle wachtwoord ingevuld
    if (passwordregister.length == 0) {
        document.getElementById("error_passwordregister").innerHTML = "Vul in a.u.b.";
        allesCorrectIngevuldRegister = false;
    }
    else {
        controleerVoorwaardenWachtwoordRegister();
    }
    if (password_confirmationregister.length == 0) {
        document.getElementById("error_password_confirmationregister").innerHTML = "Vul in a.u.b.";
        allesCorrectIngevuldRegister = false;
    }
    else {
        controleerVoorwaardenWachtwoordBevestiging();
    }


    //uiteindelijk controleren of alles correct is
    //deze if blijft altijd allerlaatst in de verstuur() functie

    if (allesCorrectIngevuldRegister) {
        document.write("");
    }
}//einde verstuur()