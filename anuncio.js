  // Función para inicializar el estado del anuncio basado en localStorage
  function initializeAdvertisementState() {
    const overlay = document.querySelector('.overlay');
    const activarButton = document.getElementById('activarButton');
    const desactivarButton = document.getElementById('desactivarButton');
    const isActive = localStorage.getItem('anuncioActivo') === 'true';

    if (isActive) {
        // Anuncio activo
        overlay.style.display = 'flex';
        activarButton.style.display = 'none'; // Ocultar botón de activar
        desactivarButton.style.display = 'block'; // Mostrar botón de desactivar
    } else {
        // Anuncio inactivo
        overlay.style.display = 'none';
        activarButton.style.display = 'block'; // Mostrar botón de activar
        desactivarButton.style.display = 'none'; // Ocultar botón de desactivar
    }
}

// Llama a la función para inicializar el estado del anuncio al cargar el documento
document.addEventListener('DOMContentLoaded', initializeAdvertisementState);

// Función para activar el anuncio
// Función para activar el anuncio
function activarAdvertisement() {
    const overlay = document.querySelector('.overlay');
    const activarButton = document.getElementById('activarButton');
    const desactivarButton = document.getElementById('desactivarButton');

    // Activar el anuncio
    overlay.style.display = 'flex';
    activarButton.style.display = 'none';
    desactivarButton.style.display = 'block';
    localStorage.setItem('anuncioActivo', 'true');

    // Cambiar clases de estilo
    activarButton.classList.remove('active-button');
    desactivarButton.classList.add('active-button');
}

// Función para desactivar el anuncio
function desactivarAdvertisement() {
    const overlay = document.querySelector('.overlay');
    const activarButton = document.getElementById('activarButton');
    const desactivarButton = document.getElementById('desactivarButton');

    // Desactivar el anuncio
    overlay.style.display = 'none';
    activarButton.style.display = 'block';
    desactivarButton.style.display = 'none';
    localStorage.setItem('anuncioActivo', 'false');

    // Cambiar clases de estilo
    activarButton.classList.add('active-button');
    desactivarButton.classList.remove('active-button');
}


// Agrega eventos de clic a los botones de activar y desactivar
document.getElementById('activarButton').addEventListener('click', activarAdvertisement);
document.getElementById('desactivarButton').addEventListener('click', desactivarAdvertisement);