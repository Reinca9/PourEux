const menuBurger = document.querySelector(".menuBurger");
const navLinks = document.querySelector(".pages");

menuBurger.addEventListener('click',()=>(
    navLinks.classList.toggle('mobile-menu')
    ))