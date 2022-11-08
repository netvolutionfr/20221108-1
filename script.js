saisie1 = document.getElementById("pass1");
saisie2 = document.getElementById("pass2");
submit = document.getElementById("submit");
submit.disabled = true;

function passwordEntropy() {
    const password = document.getElementById("pass1").value;
    const entropy = zxcvbn(password).entropy;
    document.getElementById("entropy").innerHTML = entropy;
}


function verifPass() {
    passwordEntropy();
    if (saisie1.value.length === 0) {
        submit.disabled = true;
    } else {
        if (saisie1.value !== saisie2.value) {
            console.log("Les mots de passe ne correspondent pas !");
            submit.disabled = true;
        } else {
            console.log("Les mots de passe correspondent !");
            submit.disabled = false;
        }
    }
}

saisie1.addEventListener("keyup", verifPass);
saisie2.addEventListener("keyup", verifPass);