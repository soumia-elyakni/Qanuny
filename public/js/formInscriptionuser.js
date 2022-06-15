//Regex'S
    var FregexName = /^[a-zA-Z- ---]{3,}$/i ;
    var AregexName = /^[أ-ي -- ئ ؤ ء]{2,}$/i ;
    var Ncinregex = /^[a-zA-Z][0-9a-zA-Z][0-9]*$/i ;
    var Telregex = /^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/ ;
    var Mailregex = /^[a-zA-Z0-9._-]+[@]+[\w]+[.]+(com|ma|org|io|fr|uk)$/ ;

//const's
    const signup = document.getElementById('fullsignup');
    // const suivant = document.getElementById('suivant');

    
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
    const sexe = document.getElementById('sexe');
    const sexeMessage = document.getElementById('sexeMessage');
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

    
    role.addEventListener("click", (e) => {
        if (e.target.value == "عميل") {
            signup3.style.display = "block";
            signup2.style.display = "none";
        }else if ((e.target.value == "محام")||(e.target.value == "موثق")) {
            signup2.style.display = "block";
            signup3.style.display = "block";
        }
    });


    
    
    if(signup) {

    
            signup.addEventListener('submit', (e) =>{
        
            if (nom.value == "") {
                e.preventDefault()
                nomMessage.textContent = "املأ الفراغ";
                nom.style.borderColor = "red"; 
            } else if ((!FregexName.test(nom.value)) && (!AregexName.test(nom.value))) {
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
            } else if ((!FregexName.test(prenom.value)) && (!AregexName.test(prenom.value))) {
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
            } else if (!Ncinregex.test(cin.value)){
                e.preventDefault()
                cinMessage.textContent = "رقم البطاقة الوطنية غير صحيح";
                cin.style.borderColor = "red"; 
            } else {
                cinMessage.textContent = "";
                cin.style.borderColor = "green";
            }

            if (tel.value == ""){
                telMessage.textContent = "";
            }else if (!Telregex.test(tel.value)){
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

            // if(sexe.value = "0") {
            //     e.preventDefault()
            //     sexeMessage.textContent = "ما هو جنسك؟";
            //     sexe.style.borderColor = "red";
            // } else if((sexe.value ="1")||(sexe.value = "2")){
            //     alert('wak waaaaak a l7a9');
            //     sexeMessage.textContent = "";
            //     sexe.style.borderColor = "green";
            // }



        

            if (usMail.value == "") {
                e.preventDefault()
                mailMessage.textContent = "املأ الفراغ";
                usMail.style.borderColor = "red";
            } else if (!Mailregex.test(usMail.value)){
                e.preventDefault()
                mailMessage.textContent = "  املأ الفراغ بما يناسب ماشي باشما كان اسميتك";
                usMail.style.borderColor = "red";
            } else {
                mailMessage.textContent = "";
                usMail.style.borderColor = "green";
            }


                       
            if (password.value == "") {
                e.preventDefault()
                passMessage.textContent = "اكتب كلمة سر";
                password.style.borderColor = "red";
        
            } else if (password.value.length < 6 || password.value.length > 20 ) {
                e.preventDefault()
                passMessage.textContent = "من فضلك كلمة سر لاتقل عن 6حروف ولا تتعدى 20";
                passInput.style.borderColor = "red";
        
            } else {
                passMessage.textContent = "";
                password.style.borderColor = "green";
            }


            if(copassword.value == ""){
                e.preventDefault()
                copassMessage.textContent = "اعد كلمة السر من فضلك";
                copassword.style.borderColor = "red";
            } else if (copassword.value != password.value){
                e.preventDefault()
                copassMessage.textContent = "كلمتي السر غير متشابهة";
                password.style.borderColor = "red";
                copassword.style.borderColor = "red";
            } else {
                copassMessage.textContent = "";
                copassword.style.borderColor = "green"; 
            }

             

        }) 

}


           


    



        









 
    

