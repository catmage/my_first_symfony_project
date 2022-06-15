var formValid = document.getElementById("boutonenvoi");
var nom = document.getElementById("nom");
var nomValid = /^[A-Za-zÀ-ÿ]{1,13}[- ]{0,1}[A-Za-zÀ-ÿ]{0,12}[']{0,1}[A-Za-zÀ-ÿ]{1,13}[- ]{0,1}[A-Za-zÀ-ÿ]{0,12}$/;
var missNom = document.getElementById("missNom");
var prenom = document.getElementById("prenom");
var prenomValid = /^[A-Za-zÀ-ÿ]{1,13}[- ]{0,1}[A-Za-zÀ-ÿ]{0,12}[']{0,1}[A-Za-zÀ-ÿ]{1,13}[- ]{0,1}[A-Za-zÀ-ÿ]{0,12}$/;
var missPrenom = document.getElementById("missPrenom");
var codepostal = document.getElementById("codepostal");
var codepostalValid = /^[a-zA-Z\d]{1,10}$/;
var missCodepostal = document.getElementById("missCodepostal");
var email = document.getElementById("email");
var emailValid = /^[a-z\d]{1,}[.-]{0,1}[a-z\d]{1,}[@]{1}[a-z]{1,}[-]{0,1}[a-z.]{1,}[.]{1}[a-z]{1,5}$/;
var missEmail = document.getElementById("missEmail");
var motdepasse = document.getElementById("motdepasse");
var motdepasseValid = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,50}$/;
var missMotdepasse = document.getElementById("missMotdepasse");
var checkbox = document.getElementById("checkbox");
var missCheckbox = document.getElementById("missCheckbox");
var adresse = document.getElementById("adresse");
var adresseValid = /^[a-zA-ZÀ-ÿ\d\s',-]{5,250}$/;
var missAdresse = document.getElementById("missAdresse");
var ville = document.getElementById("ville");
var villeValid = /^[A-Za-zÀ-ÿ]{1,13}[- ]{0,1}[A-Za-zÀ-ÿ]{0,12}[']{0,1}[A-Za-zÀ-ÿ]{1,13}[- ]{0,1}[A-Za-zÀ-ÿ]{0,12}$/;
var missVille = document.getElementById("missVille");
var pays = document.getElementById("pays");
var paysValid = /^[A-Za-zÀ-ÿ]{1,13}[- ]{0,1}[A-Za-zÀ-ÿ]{0,12}[']{0,1}[A-Za-zÀ-ÿ]{1,13}[- ]{0,1}[A-Za-zÀ-ÿ]{0,12}$/;
var missPays = document.getElementById("missPays");
var telephone = document.getElementById("telephone");
var telephoneValid = /^[\d+-. ]{2,50}$/;
var missTelephone = document.getElementById("missTelephone");
var checkbox = document.getElementById("checkbox");
var missCheckbox = document.getElementById("missCheckbox");



formValid.addEventListener("click", validation);

function validation(event) {
    if (emailValid.test(email.value) == false) {
        event.preventDefault();
        missEmail.textContent = "Adresse email manquante ou incorrecte, votre adresse email doit être écrite sans espace avec obligatoirement un @ et un .";
        missEmail.style.color = "red";

    } else {
        missEmail.textContent = "";
    }

    if (nomValid.test(nom.value) == false) {
        event.preventDefault();
        missNom.textContent = "Nom manquant ou incorrect, écrivez votre nom en lettres (majuscules, minuscules, espace, ' et - autorisés)";
        missNom.style.color = "red";

    } else {
        missNom.textContent = "";

    }

    if (prenomValid.test(prenom.value) == false) {
        event.preventDefault();
        missPrenom.textContent = "Prénom manquant ou incorrect, écrivez votre prénom en lettres (majuscules, minuscules, espace, ' et - autorisés)";
        missPrenom.style.color = "red";

    } else {
        missPrenom.textContent = "";
    }



    if (motdepasseValid.test(motdepasse.value) == false) {
        event.preventDefault();
        missMotdepasse.textContent = "Mot de passe manquant ou incorrect, le mot de passe doit contenir au moins 8 caractère, 1 majuscule, 1 minuscule et 1 caractère spécial (@$!%*?&)";
        missMotdepasse.style.color = "red";
    } else {
        missMotdepasse.textContent = "";
    }

    if (adresseValid.test(adresse.value) == false) {
        event.preventDefault();
        missAdresse.textContent = "Adresse manquante ou incorrecte";
        missAdresse.style.color = "red";
    } else {
        missAdresse.textContent = "";
    }

    if (villeValid.test(ville.value) == false) {
        event.preventDefault();
        missVille.textContent = "Ville manquante ou incorrecte";
        missVille.style.color = "red";
    } else {
        missVille.textContent = "";
    }

    if (codepostalValid.test(codepostal.value) == false) {
        event.preventDefault();
        missCodepostal.textContent = "Code postal manquant ou  incorrect";
        missCodepostal.style.color = "red";

    } else {
        missCodepostal.textContent = "";
    }

    if (paysValid.test(pays.value) == false) {
        event.preventDefault();
        missPays.textContent = "Pays manquant ou incorrect";
        missPays.style.color = "red";
    } else {
        missPays.textContent = "";
    }

    if (telephoneValid.test(telephone.value) == false) {
        event.preventDefault();
        missTelephone.textContent = "numéro de téléphone manquant ou incorrect";
        missTelephone.style.color = "red";
    } else {
        missTelephone.textContent = "";
    }

    if (checkbox.validity.valueMissing) {
        event.preventDefault();
        missCheckbox.textContent = "Cochez cette case pour valider le formulaire";
        missCheckbox.style.color = "red";

    }
    if (checkbox.checked) {
        missCheckbox.style.display = "none";
    }

}
formValid.addEventListener("click", validation);