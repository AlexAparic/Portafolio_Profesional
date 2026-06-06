// lang.js - Sistema de cambio de idioma para el portafolio

const translations = {
    es: {
        // Navegación
        "nav-inicio": "Inicio",
        "nav-sobre": "Sobre mi",
        "nav-proyectos": "Proyectos Académicos",
        
        // Hero / Inicio
        "nombre": "William Alexander Aparicio Zelaya",
        "rol": "Programador backend",
        "frase": "\"Si funciona sin que lo veas, es backend.\"",
        
        // Sobre mi
        "sobre-titulo": "Sobre mi:",
        "sobre-descripcion": "Soy William Alexander Aparicio Zelaya, desarrollador back-end enfocado en la creación de soluciones eficientes, seguras y escalables. Tengo experiencia en el desarrollo de lógica de negocio, manejo de bases de datos y construcción de APIs, utilizando tecnologías como PHP, Laravel, Node.js y JavaScript.\n\nMe motiva optimizar el rendimiento de los sistemas, aprender continuamente y afrontar nuevos retos tecnológicos, aportando valor mediante código limpio, estructurado y orientado a resultados.",
        
        // Botones
        "btn-cv": "Descargar CV",
        "ver-proyecto": "Ver proyecto →",
        
        // Redes sociales
        "linkedin": "LinkedIn",
        "github": "GitHub",
        "email": "Correo",
        
        // Proyectos - Títulos
        "proyectos-titulo": "💻 Proyectos Académicos",
        "proy1-titulo": "Calculadora de Sueldos",
        "proy2-titulo": "Fineconia",
        "proy3-titulo": "Red Social",
        
        // Proyectos - Descripciones
        "proy1-descripcion": "Aplicación web que permite a los usuarios calcular sueldo de manera eficiente y precisa a partir de sus ingresos y deducciones.",
        "proy2-descripcion": "Aplicación web que permite a los usuarios llevar un control más eficiente de sus finanzas personales, facilitando la organización de ingresos y gastos, ayudando a mejorar la administración económica personal.",
        "proy3-descripcion": "Plataforma de comercio electrónico completa enfocada en la venta y compra de autos de todo tipo con geolocalización exacta.",
        
        // Footer
        "footer-copyright": "© 2026 William Aparicio",
        
        // Mensajes varios
        "video-error": "Tu navegador no soporta el elemento de video."
    },
    
    en: {
        // Navigation
        "nav-inicio": "Home",
        "nav-sobre": "About me",
        "nav-proyectos": "Academic Projects",
        
        // Hero / Home
        "nombre": "William Alexander Aparicio Zelaya",
        "rol": "Backend Developer",
        "frase": "\"If it works without you seeing it, it's backend.\"",
        
        // About me
        "sobre-titulo": "About me:",
        "sobre-descripcion": "I am William Alexander Aparicio Zelaya, a back-end developer focused on creating efficient, secure, and scalable solutions. I have experience in business logic development, database management, and API construction, using technologies such as PHP, Laravel, Node.js, and JavaScript.\n\nI am motivated to optimize system performance, continuously learn, and face new technological challenges, providing value through clean, structured, results-oriented code.",
        
        // Buttons
        "btn-cv": "Download CV",
        "ver-proyecto": "View project →",
        
        // Social networks
        "linkedin": "LinkedIn",
        "github": "GitHub",
        "email": "Email",
        
        // Projects - Titles
        "proyectos-titulo": "💻 Academic Projects",
        "proy1-titulo": "Salary Calculator",
        "proy2-titulo": "Fineconia",
        "proy3-titulo": "Social Network",
        
        // Projects - Descriptions
        "proy1-descripcion": "Web application that allows users to calculate salary efficiently and accurately based on their income and deductions.",
        "proy2-descripcion": "Web application that allows users to have more efficient control of their personal finances, facilitating the organization of income and expenses, helping to improve personal economic management.",
        "proy3-descripcion": "Complete e-commerce platform focused on buying and selling all types of cars with exact geolocation.",
        
        // Footer
        "footer-copyright": "© 2026 William Aparicio",
        
        // Various messages
        "video-error": "Your browser does not support the video element."
    }
};

// Estado actual del idioma
let currentLang = "es";

// Función para aplicar el idioma a toda la página
function applyLanguage(lang) {
    // Recorrer todos los elementos con atributo data-lang-id
    document.querySelectorAll('[data-lang-id]').forEach(element => {
        const key = element.getAttribute('data-lang-id');
        
        // Verificar si existe la traducción para esta clave
        if (translations[lang] && translations[lang][key]) {
            // Para elementos que pueden contener HTML (como el párrafo de sobre mi)
            if (key === "sobre-descripcion" && element.tagName === "P") {
                // Reemplazar saltos de línea por <br>
                element.innerHTML = translations[lang][key].replace(/\n\n/g, '<br><br>').replace(/\n/g, '<br>');
            } else {
                element.textContent = translations[lang][key];
            }
        }
    });
    
    // Guardar preferencia en localStorage
    localStorage.setItem('preferred-language', lang);
}

// Función para cambiar el idioma manualmente
function toggleLanguage() {
    currentLang = currentLang === "es" ? "en" : "es";
    applyLanguage(currentLang);
    
    // Actualizar el texto del botón (opcional)
    const langBtn = document.getElementById('lang-toggle');
    if (langBtn) {
        langBtn.innerHTML = currentLang === "es" ? "🇪🇸 ES / 🇺🇸 EN" : "🇺🇸 EN / 🇪🇸 ES";
    }
    
    // Actualizar el atributo lang del html
    document.documentElement.lang = currentLang;
}

// Función para obtener el idioma guardado o el del navegador
function getInitialLanguage() {
    // Verificar si hay idioma guardado en localStorage
    const savedLang = localStorage.getItem('preferred-language');
    if (savedLang && (savedLang === "es" || savedLang === "en")) {
        return savedLang;
    }
    
    // Si no hay guardado, detectar idioma del navegador
    const browserLang = navigator.language || navigator.userLanguage;
    if (browserLang.startsWith('en')) {
        return "en";
    }
    
    // Por defecto español
    return "es";
}

// Inicializar cuando el DOM esté listo
document.addEventListener("DOMContentLoaded", () => {
    // Configurar idioma inicial
    currentLang = getInitialLanguage();
    applyLanguage(currentLang);
    
    // Configurar el botón de cambio de idioma
    const langToggleBtn = document.getElementById('lang-toggle');
    if (langToggleBtn) {
        // Actualizar texto del botón según idioma actual
        langToggleBtn.innerHTML = currentLang === "es" ? "🇪🇸 ES / 🇺🇸 EN" : "🇺🇸 EN / 🇪🇸 ES";
        langToggleBtn.addEventListener('click', toggleLanguage);
    }
    
    // Actualizar el atributo lang del html
    document.documentElement.lang = currentLang;
    
    /* =========================
       SCROLL CENTRADO
    ========================= */
    document.querySelectorAll('.menu a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Si el enlace es un botón de idioma, no hacer scroll
            if (this.id === 'lang-toggle') return;
            
            const target = document.querySelector(this.getAttribute('href'));
            
            if (target) {
                const offset = target.offsetTop - (window.innerHeight / 2) + (target.offsetHeight / 2) - 30;
                window.scrollTo({
                    top: offset,
                    behavior: "smooth"
                });
            }
        });
    });
    
    /* =========================
       ANIMACIÓN
    ========================= */
    const slides = document.querySelectorAll(".container");
    
    function mostrarSlides() {
        slides.forEach(slide => {
            const rect = slide.getBoundingClientRect();
            if (rect.top < window.innerHeight * 0.75 && rect.bottom > window.innerHeight * 0.25) {
                slide.classList.add("visible");
            } else {
                slide.classList.remove("visible");
            }
        });
    }
    
    /* =========================
       MENÚ ACTIVO
    ========================= */
    function actualizarMenu() {
        let current = "";
        
        slides.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                current = section.id;
            }
        });
        
        document.querySelectorAll(".menu a").forEach(link => {
            // Saltar el botón de idioma
            if (link.id === 'lang-toggle') return;
            link.classList.remove("active");
            if (link.getAttribute("href") === "#" + current) {
                link.classList.add("active");
            }
        });
    }
    
    /* =========================
       EVENTOS
    ========================= */
    window.addEventListener("scroll", () => {
        mostrarSlides();
        actualizarMenu();
    });
    
    /* INIT */
    mostrarSlides();
    actualizarMenu();
});