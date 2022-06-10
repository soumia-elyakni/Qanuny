const nom = document.getElementById("prenom");
const suivant = document.getElementById("suivant");
const signin = document.getElementById("inscriptionform");
const nomMessage = document.getElementById("nomMessage");


if(signin){

 signin.addEventListener('button', (e) => {
    if (nom.value == "") {
        e.preventDefault()
        nomMessage.textContent = "Ce Champ est obligatoire";
        nom.style.borderColor = "red";
    } else {
        messageName.textContent = "";
        nameInput.style.borderColor = "green";
        var nom = nom.value;
        console.log('nom')
    }

})

}
