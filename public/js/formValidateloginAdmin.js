const admiName = document.getElementById('adminame');
const nameMessage = document.getElementById('unameMessage');
const password = document.getElementById('password');
const passMessage = document.getElementById('upassMessage');
const loginForm = document.getElementById('loginform');

if(loginForm) {

    
    loginForm.addEventListener('submit', (e) =>{

        if (admiName.value == "") {
            e.preventDefault()
            nameMessage.textContent = "اكتب اسم المستخدم";
            admiName.style.borderColor = "red";
        } else {
            nameMessage.textContent = "";
            admiName.style.borderColor = "green";
        }


        if (password.value == "") {
            e.preventDefault()
            passMessage.textContent = "Ce Champ est obligatoire";
            password.style.borderColor = "red";
    
        } else {
            passMessage.textContent = "";
            password.style.borderColor = "green";
        }

    })
}


