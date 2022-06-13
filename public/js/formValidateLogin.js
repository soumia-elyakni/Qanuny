// alert("hhhhhhhhhhhhhh")
// login form 

    const userMail = document.getElementById('usermail');
    const usmailMessage = document.getElementById('usmailMessage');
    const userPass = document.getElementById('userpass');
    const upassMessage = document.getElementById('upassMessage');
    const loginForm = document.getElementById('loginform'); 
    
//const's
    const signup = getElementById('fullsignup');
    const suivant = document.getElementById('suivant');

    
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
    const signup1 = document.getElementById('signup1');
    
    

    // Inscription form2 

    const cinPhoto = document.getElementById('cinphoto');
    const pCinMessage = document.getElementById('pCinMessage');
    const cipphoto = document.getElementById('cipphoto');
    const pCipMessage = document.getElementById('pCipMessage');
    const signup2 = document.getElementById('signup2');
    

    // Inscrition form3 

    const usMail = document.getElementById('usmail');
    const mailMessage = document.getElementById('mailMessage');
    const password = document.getElementById('pass');
    const passMessage = document.getElementById('passMessage');
    const copassword = document.getElementById('copass');
    const copassMessage = document.getElementById('copassMessage');
    const signup3 = document.getElementById('signup3');

    // Suivant 

  

    function suivant(){
        if (role.value == "0") {
            e.preventDefault();
        }else{

            if(role.value == "1"){
                suivant.style.display = "none";
                signup3.style.display = "block";
            } else if((role.value = "2") || (role.value ="3")) {
                signup2.style.display = "block";
                signup3.style.display = "block";
            } 

        }


        if(role.value == "1"){
            suivant.style.display = "none";
            signup3.style.display = "block";
        } else if((role.value = "2") || (role.value ="3")) {
            signup2.style.display = "block";
            signup3.style.display = "block";
        } 

    }
    

       

    

    



    if(signup) {

    
            signup.addEventListener('submit', (e) =>{
        
            if (nom.value == "") {
                e.preventDefault()
                nomMessage.textContent = "املأ الفراغ";
                nom.style.borderColor = "red"; 
                soumia = false;
            } else if ((!/^[a-zA-Z- ---]{3,}$/i.test(nom.value)) && (!/^[ا-ي- ---]{2,}$/i.test(nom.value))) {
                e.preventDefault()
                nomMessage.textContent = "اكتب الاسم صحيحا";
                nom.style.borderColor = "red"; 
            } else {
                nomMessage.textContent = "";
                nom.style.borderColor = "green";
            }

            if (prenom.value == "") {
                e.preventDefault()
                prenomMessage.textContent = "املأ الفراغ ";
                prenom.style.borderColor = "red"; 
            } else if ((!/^[a-zA-Z- ---]{3,}$/i.test(nom.value)) && (!/^[ا-ي- ---]{2,}$/i.test(nom.value))) {
                e.preventDefault()
                prenomMessage.textContent = "اكتب الاسم صحيحا";
                prenom.style.borderColor = "red"; 
            } else {
                prenomMessage.textContent = "";
                prenom.style.borderColor = "green";
            }

            if (cin.value == "") {
                e.preventDefault()
                cinMessage.textContent = "املأ الفراغ";
                cin.style.borderColor = "red"; 
            } else if (!/^[a-zA-Z][0-9a-zA-Z][0-9]*$/i.test(cin.value)){
                e.preventDefault()
                cinMessage.textContent = "رقم البطاقة الوطنية غير صحيح";
                cin.style.borderColor = "red"; 
            } else {
                cinMessage.textContent = "";
                cin.style.borderColor = "green";
            }

            if (tel.value == ""){
                telMessage.textContent = "";
            }else if (!/^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/.test(tel.value)){
                 e.preventDefault()
                 telMessage.textContent = "رقم الهاتف غير صحيح";
                 tel.style.borderColor = "red";
            } else {
                telMessage.textContent = "";
                tel.style.borderColor = "green";
            }
            
            if (ville.value == "0") {
                e.preventDefault()
                villeMessage.textContent = "اختر مدينة الاقامة";
                ville.style.borderColor = "red";  
            } else {
                villeMessage.textContent = "";
                ville.style.borderColor = "green";
            }

            if (role.value == "0") {
                e.preventDefault()
                roleMessage.textContent = "اختر نوع حسابك";
                role.style.borderColor = "red";  
            } else {
                roleMessage.textContent = "";
                role.style.borderColor = "green";
            } 

             

        }) 

}


           


    



        






           
    //         if (passInput.value == "") {
    //             e.preventDefault()
    //             messagePass.textContent = "Ce Champ est obligatoire";
    //             passInput.style.borderColor = "red";
        
    //         } else if (passInput.value.length < 6 || passInput.value.length > 20 ) {
    //             e.preventDefault()
    //             messagePass.textContent = "Le mot de passe doit être entre 6 et 20 caractères";
    //             passInput.style.borderColor = "red";
        
    //         } else {
    //             messagePass.textContent = "";
    //             passInput.style.borderColor = "green";
    //         }
    //         if(conpasswordInput.value == ""){
    //             e.preventDefault()
    //             messageConPass.textContent = "Ce Champ est obligatoire";
    //             conpasswordInput.style.borderColor = "red";
    //         } else if (conpasswordInput.value != passInput.value){
    //             e.preventDefault()
    //             messageConPass.textContent = "Les mots de passe ne sont pas identiques ";
    //             passInput.style.borderColor = "red";
    //             conpasswordInput.style.borderColor = "red";
    //         } else {
    //             messagePass.textContent = "";
    //             conpasswordInput.style.borderColor = "green"; 
    //         }
    

