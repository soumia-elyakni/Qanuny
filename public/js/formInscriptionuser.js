 //const's
    // login form 

    const userMail = document.getElementById('usermail');
    const usmailMessage = document.getElementById('usmailMessage');
    const userPass = document.getElementById('userpass');
    const upassMessage = document.getElementById('upassMessage');
    const loginForm = document.getElementById('loginform'); 

    // Inscription form1 
    
    const nom = document.getElementById('nom');
    const prenom = document.getElementById('prenom');
    const nomMessage = document.getElementById('nomMessage');
    const prenomMessage = document.getElementById('prenomMessage');
    const cin = document.getElementById('cin');
    const tel = document.getElementById('tel');
    const cinMessage = document.getElementById('cinMessage');
    const telMessage = document.getElementById('telMessage')
    const ville = document.getElementById('ville');
    const role = document.getElementById('role');
    const villeMessage = document.getElementById('villeMessage');
    const roleMessage = document.getElementById('roleMessage');
    const signin1 = document.getElementById('signin1');

    // Inscription form2 

    const cinPhoto = document.getElementById('cinphoto');
    const pCinMessage = document.getElementById('pCinMessage');
    const cipphoto = document.getElementById('cipphoto');
    const pCipMessage = document.getElementById('pCipMessage');
    const signin2 = document.getElementById('signin2');

    // Inscrition form3 

    const usMail = document.getElementById('usmail');
    const mailMessage = document.getElementById('mailMessage');
    const password = document.getElementById('pass');
    const passMessage = document.getElementById('passMessage');
    const copassword = document.getElementById('copass');
    const copassMessage = document.getElementById('copassMessage');


    if(signin1) {

        signin1.addEventListener('submit', (e) => {
        
            if (nom.value == "") {
                e.preventDefault()
                nomMessage.textContent = "املأ الفراغ";
                nom.style.borderColor = "red"; 
            } else if (!/^[a-z0-9]{3,}$/i.test(nom.value)) {
                e.preventDefault()
                nomMessage.textContent = "Le nom doit comporter au moins 3 caractères et être alphanumérique";
                nom.style.borderColor = "red"; 
            } else {
                nomMessage.textContent = "";
                nom.style.borderColor = "green";
            }

            if (prenom.value == "") {
                e.preventDefault()
                prenomMessage.textContent = "املأ الفراغ ";
                prenom.style.borderColor = "red"; 
            } else if (!/^[a-z0-9]{3,}$/i.test(prenom.value)) {
                e.preventDefault()
                prenomMessage.textContent = "Le nom doit comporter au moins 3 caractères et être alphanumérique";
                prenom.style.borderColor = "red"; 
            } else {
                prenomMessage.textContent = "";
                prenom.style.borderColor = "green";
            }

            if (cin.value == "") {
                e.preventDefault()
                cinMessage.textContent = "املأ الفراغ";
                cin.style.borderColor = "red"; 
            } else if (!/^[a-z0-9]{3,}$/i.test(cin.value)){
                e.preventDefault()
                cinMessage.textContent = "Le nom doit comporter au moins 3 caractères et être alphanumérique";
                cin.style.borderColor = "red"; 
            } else {
                cinMessage.textContent = "";
                cin.style.borderColor = "green";
            }

            if (tel.value != ""){
            if (!/^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/.test(contactPhone.value)){
                 e.preventDefault()
                 messagePhone.textContent = "Numero de téléphone non validé";
                 contactPhone.style.borderColor = "red";
            } else {
                 messagePhone.textContent = "";
                 contactPhone.style.borderColor = "green";
            }
            }

            if (ville.value == "") {
                e.preventDefault()
                villeMessage.textContent = "املأ الفراغ";
                ville.style.borderColor = "red"; 
            } else if (!/^[a-z0-9]{3,}$/i.test(ville.value)) {
                e.preventDefault()
                villeMessage.textContent = "Le nom doit comporter au moins 3 caractères et être alphanumérique";
                ville.style.borderColor = "red"; 
            } else {
                villeMessage.textContent = "";
                ville.style.borderColor = "green";
            }
        






           
            if (passInput.value == "") {
                e.preventDefault()
                messagePass.textContent = "Ce Champ est obligatoire";
                passInput.style.borderColor = "red";
        
            } else if (passInput.value.length < 6 || passInput.value.length > 20 ) {
                e.preventDefault()
                messagePass.textContent = "Le mot de passe doit être entre 6 et 20 caractères";
                passInput.style.borderColor = "red";
        
            } else {
                messagePass.textContent = "";
                passInput.style.borderColor = "green";
            }
            if(conpasswordInput.value == ""){
                e.preventDefault()
                messageConPass.textContent = "Ce Champ est obligatoire";
                conpasswordInput.style.borderColor = "red";
            } else if (conpasswordInput.value != passInput.value){
                e.preventDefault()
                messageConPass.textContent = "Les mots de passe ne sont pas identiques ";
                passInput.style.borderColor = "red";
                conpasswordInput.style.borderColor = "red";
            } else {
                messagePass.textContent = "";
                conpasswordInput.style.borderColor = "green"; 
            }
        })
    }

