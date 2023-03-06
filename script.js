const navEl = document.querySelector('.navbar');
window.addEventListener('scroll',()=>{
    if(window.scrollY >= 56){
        navEl.classList.add('navbar-scrolled');
    }else if(window.scrollY < 56){
        navEl.classList.remove('navbar-scrolled');
    }
});
"https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"