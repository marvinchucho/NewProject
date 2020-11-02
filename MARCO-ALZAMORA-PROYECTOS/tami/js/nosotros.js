const derecha = document.getElementById('derecha');
const izquierda = document.getElementById('izquierda');
const descripcion = document.getElementById('descripcion');

derecha.addEventListener('click', cambiar);
izquierda.addEventListener('click', cambiar);

function cambiar() {
    izquierda.classList.toggle('active');
    derecha.classList.toggle('active');
    descripcion.classList.toggle('margen');
}