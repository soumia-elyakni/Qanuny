
let header = document.querySelector('.navbar');
window.addEventListener('scroll',function(){
    if(window.scrollY > 30) {
        header.classList.add('scrolling-active')
    } else {
        header.classList.remove('scrolling-active')
    }
})