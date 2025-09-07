const menu = document.querySelector('.menu1');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 0) {
                menu.style.backgroundColor = '#001041'; // Cambia el color de fondo a negro
            } else {
                menu.style.backgroundColor = 'transparent'; // Vuelve al color original al volver arriba
            }
        });

        // Declarar constantes
        const hamburger = document.querySelector(".hamburger");
        const navLinks = document.querySelector(".nav-links");
        const links = document.querySelectorAll(".nav-links li");

        // Configurar evento click en el botón de hamburguesa
        hamburger.addEventListener('click', () => {
            // Aquí se agrega o elimina la clase 'open' del menú para mostrarlo u ocultarlo
            navLinks.classList.toggle("open");

            // Aquí se agrega o elimina la clase 'fade' a los enlaces del menú
            links.forEach(link => {
                link.classList.toggle("fade");
            });

            // Aquí se agrega o elimina la clase 'toggle' para animar la hamburguesa
            hamburger.classList.toggle("toggle");
        });

        