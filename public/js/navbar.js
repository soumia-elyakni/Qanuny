let title = document.getElementById("title")
let header = document.querySelector('.navbar');
window.addEventListener('scroll',function(){
    if(window.scrollY > 30) {
        header.classList.add('scrolling-active')
        title.style.color = "#0d6efd";
    } else {
        
        header.classList.remove('scrolling-active');
        title.style.color = "aliceblue";
       
    }
})