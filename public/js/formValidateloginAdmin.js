var pseuRegex = /^[a-zA-Z0-9_-]{3,15}$/i ;

const admiName = document.getElementById('adminame');
const nameMessage = document.getElementById('unameMessage');
const password = document.getElementById('password');
const passMessage = document.getElementById('upassMessage');
const loginForm = document.getElementById('loginform');

if(loginForm) {

    
    loginForm.addEventListener('submit', (e) =>{

        if (admiName.value == "") {
            e.preventDefault()
            nameMessage.textContent = " اكتب اسم المستخدم";
            admiName.style.borderColor = "red";
        } else if (!pseuRegex.test(admiName.value)) {
            e.preventDefault()
            nameMessage.textContent = "اكتب اسم المستخدم صحيحة";
            admiName.style.borderColor = "red";
        } else {
            nameMessage.textContent = "";
            admiName.style.borderColor = "green";
        }


        if (password.value == "") {
            e.preventDefault()
            passMessage.textContent = "اكتب كلمة السر";
            password.style.borderColor = "red";
    
        } else {
            passMessage.textContent = "";
            password.style.borderColor = "green";
        }

    })
}


