// Variable seleccionando la clase de css
const burger = document.querySelector('.nav__burger');
const nav = document.querySelector('.nav');

// Definimos la función 
function toggleNav() {
    //función con botón de la clase icono del nav
    burger.classList.toggle('nav__burger');
    // botón del icono de la cruz
    burger.classList.toggle('nav__burger--close');
    nav.classList.toggle('nav-active');
}
//Se abre el nav cuadno pulsas y se cambia al icono  cruz
// Llamamos a la función después de pulsar el evento
burger.addEventListener('click', function () {
    toggleNav();
   
});