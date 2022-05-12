
"use strict";
let wwlogin;
let allesCorrectIngevuldLogin = true;
let emaillogin;

function controleerVoorwaardenWachtwoordLogin() {
    if (wwlogin.length < 7) {
        document.getElementById("error_wwlogin").innerHTML = "Minstens 7 karakters";
        allesCorrectIngevuldLogin = false;
    }
    else if (wwlogin.length > 20) {
        document.getElementById("error_wwlogin").innerHTML = "Max 20 karakters";
        allesCorrectIngevuldLogin = false;
    }
}

function controleerVoorwaardenEmailLogin() {
    let regExp = /^[A-Za-z][\.A-Za-z0-9+_-]+@[\.A-Za-z0-9-]+\.[A-Za-z]{2,20}$/;
    if (regExp.test(emaillogin) == false) {
        document.getElementById("error_emaillogin").innerHTML = "Dit is niet correct!";
        allesCorrectIngevuldLogin = false;
    }
    else {
        document.getElementById("error_emaillogin").innerHTML = "";
    }
}




function submitlogin() {
    wwlogin = document.getElementById("wwlogin").value;
    emaillogin = document.getElementById("emaillogin").value;
    //Via JS vraag je het element uit de webpagina op met de id voornaam. Van dat element vraag je de value op, de inhoud
    allesCorrectIngevuldLogin = true;
    //als er op de knop geklikt wordt, moet het bijhouden van de fouten gereset worden
    if (emaillogin.length == 0) {
        document.getElementById("error_emaillogin").innerHTML = "Vul in a.u.b.";
        allesCorrectIngevuldLogin = false;
    }
    else {
        //aparte functie aanmaken om de voorwaarden te controleren
        controleerVoorwaardenEmailLogin()
    }
    //controle wachtwoord ingevuld
    if (wwlogin.length == 0) {
        document.getElementById("error_wwlogin").innerHTML = "Vul in a.u.b.";
        allesCorrectIngevuldLogin = false;
    }
    else {
        controleerVoorwaardenWachtwoordLogin();
    }


    //uiteindelijk controleren of alles correct is
    //deze if blijft altijd allerlaatst in de verstuur() functie

    if (allesCorrectIngevuldLogin) {
        document.write("");
    }
}//einde verstuur()