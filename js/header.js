var header = document.querySelector(".header")
window.addEventListener('scroll', function(){
    setTimeout(() => {
        header.classList.toggle('active-header', window.scrollY > 500);
    }, 500) 
})