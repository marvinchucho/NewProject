/*--------barra de navegacion--------*/
let ul = document.querySelector("ul");
let li = document.querySelectorAll("li");

li.forEach((el) => {
  el.addEventListener("click", function () {
    ul.querySelector(".active").classList.remove("active");

    el.classList.add("active");
  });
});

/*--------animacion de imagenes--------*/

let animado = document.querySelectorAll('.animado');

function mostrarScroll() {
  let scrollTop = document.documentElement.scrollTop;
  for (let i = 0; i < animado.length; i++) {
    let alturaAnimado = animado[i].offsetTop;
    if(alturaAnimado - 700 < scrollTop) {
      animado[i].style.opacity = 1;
      animado[i].classList.add("mostrarArriba");
    }
  }
}

window.addEventListener('scroll', mostrarScroll);

/*--------mostrar mas contenido--------*/
function mostrar() {
  let oculto = document.querySelectorAll('.ocultar');
  let buttonMostrar = document.getElementById('mostrar-mas');
  for (let i = 0; i < oculto.length; i++) {
    oculto[i].classList.remove('ocultar');
    oculto[i].classList.add('mostrar');
    buttonMostrar.classList.add('ocultar');
    buttonMostrar.classList.remove('mostrar');
  }
}
/*--------mostrar menos contenido--------*/
function ocultar() {
  mostrar = document.querySelectorAll('.mostrar');
  let buttonMostrar = document.getElementById('mostrar-mas');
  let buttonMenos = document.getElementById('mostrar-menos');

  for (let i = 0; i < mostrar.length; i++) {
    mostrar[i].classList.remove('mostrar');
    mostrar[i].classList.add('ocultar');
    buttonMenos.classList.add('ocultar');
    buttonMenos.classList.remove('mostrar');
    buttonMostrar.classList.add('mostrar');  
}}

document.getElementById("mostrar-mas").addEventListener('click', mostrar);
document.getElementById("mostrar-menos").addEventListener('click', ocultar);
