<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio - William Aparicio</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/porta.css'])

</head>

<body>

    <!-- SLIDE 1 - INICIO -->
    <div class="container" id="inicio">
        <div class="slide-content">
            <nav class="menu">
                <a href="#inicio" class="active" data-lang="inicio">Inicio</a>
                <a href="#sobre" data-lang="sobre">Sobre mi</a>
                <a href="#proyectos" data-lang="proyectos">Proyectos Académicos</a>
                <a href="#contacto" data-lang="contacto_menu">Contactame</a>
                <button id="lang-toggle" class="lang-btn">🌐 ES</button>
            </nav>

            <div class="hero">
                <div class="sobre-img">
                    <img src="{{ asset('images/perfil.jpeg') }}" class="foto">
                </div>
                <h1 data-lang="nombre">William Alexander Aparicio Zelaya</h1>
                <p class="rol" data-lang="rol">Programador backend</p>
                <p class="frase" data-lang="frase">"Si funciona sin que lo veas, es backend."</p>
            </div>
        </div>
    </div>


    <!-- SLIDE 2 - SOBRE MI -->
    <div class="container" id="sobre">
        <div class="slide-content">
            <nav class="menu">
                <a href="#inicio" data-lang="inicio">Inicio</a>
                <a href="#sobre" class="active" data-lang="sobre">Sobre mi</a>
                <a href="#proyectos" data-lang="proyectos">Proyectos Académicos</a>
                <a href="#contacto" data-lang="contacto_menu">Contactame</a>
            </nav>

            <!-- Foto + Descripción (una al lado de la otra) -->
            <div class="sobre-mi">
                <div class="sobre-img">
                    <img src="{{ asset('images/logo.jpeg') }}" class="foto">
                </div>
                <div class="sobre-texto">
                    <h2 data-lang="sobre_titulo">Sobre mi:</h2>
                    <p data-lang="sobre_texto1">
                        Soy William Alexander Aparicio Zelaya, desarrollador back-end enfocado en la creación
                        de soluciones eficientes, seguras y escalables. Tengo experiencia en el desarrollo
                        de lógica de negocio, manejo de bases de datos y construcción de APIs, utilizando
                        tecnologías como PHP, Laravel, Node.js y JavaScript.
                    </p>
                    <p data-lang="sobre_texto2">
                        Me motiva optimizar el rendimiento de los sistemas, aprender continuamente y
                        afrontar nuevos retos tecnológicos, aportando valor mediante código limpio,
                        estructurado y orientado a resultados.
                    </p>

                    <!-- BOTÓN CV (debajo de habilidades) -->
                    <div class="cv-container">
                    <a href="{{ asset('docs/Curriculum.pdf') }} "class="cv-btn" target="_blank" data-lang="cv">
                    Descargar CV
                    </a>
            </div>
                </div>
            </div>

            <!-- Habilidades (debajo, ocupando todo el ancho) -->
            <div class="skills-section">
                <h3 data-lang="skills_title">Habilidades Técnicas</h3>

                <div class="skills-container">
                    <!-- Lenguajes -->
                    <div class="skills-category">
                        <h4 data-lang="languages_title">Lenguajes</h4>
                        <div class="skills-grid">
                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name">JavaScript</span>
                                    <span class="skill-percent">85%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 85%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name">PHP</span>
                                    <span class="skill-percent">80%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 80%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name">HTML</span>
                                    <span class="skill-percent">70%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 70%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name">CSS</span>
                                    <span class="skill-percent">50%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 50%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name">Python</span>
                                    <span class="skill-percent">60%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Frameworks -->
                    <div class="skills-category">
                        <h4 data-lang="frameworks_title">Frameworks</h4>
                        <div class="skills-grid">
                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name">Laravel</span>
                                    <span class="skill-percent">95%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 95%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER REDES -->
            <div class="footer-redes">
                 <a href="https://www.linkedin.com/in/william-aparicio-3520031b2?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" data-lang="linkedin">LinkedIn</a>
                 <a href="https://github.com/AlexAparic" target="_blank" data-lang="github">GitHub</a>
            </div>
        </div>
    </div>

    <!-- SLIDE 3 - PROYECTOS ACADÉMICOS -->
    <div class="container" id="proyectos">
        <div class="slide-content">
            <nav class="menu">
                <a href="#inicio" data-lang="inicio">Inicio</a>
                <a href="#sobre" data-lang="sobre">Sobre mi</a>
                <a href="#proyectos" class="active" data-lang="proyectos">Proyectos Académicos</a>
                <a href="#contacto" data-lang="contacto_menu">Contactame</a>

            </nav>

            <div>
                <h2 style="margin-bottom:20px; text-align:center;" data-lang="proyectos_titulo">💻 Proyectos Académicos</h2>

                <div class="proyectos-grid">
                    <!-- Proyecto 1: Calculadora de Sueldos -->
                    <div class="proyecto-card">
                        <div class="proyecto-contenido">
                            <h3 data-lang="proyecto1_titulo">Calculadora de Sueldos</h3>
                            <div class="proyecto-imagen">
                                <video controls autoplay muted loop playsinline>
                                    <source src="{{ asset('images/calculadora-suel.mp4') }}" type="video/mp4">
                                    <span data-lang="video_error">Tu navegador no soporta el elemento de video.</span>
                                </video>
                            </div>
                            <div class="proyecto-tech">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">HTML</span>
                                <span class="tech-badge">CSS</span>
                                <span class="tech-badge">JavaScript</span>
                                <span class="tech-badge">MySQL</span>
                            </div>
                            <p data-lang="proyecto1_desc">Aplicación web que permite a los usuarios calcular sueldo de manera eficiente y precisa a partir de sus ingresos y deducciones.</p>
                            <p data-lang="rol12">Rol desempeñado: Desarrollador bankend</p>
                            <a href="https://github.com/AlexAparic/calculadora-sueldos" class="proyecto-link" target="_blank" data-lang="ver_proyecto">Ver proyecto →</a>
                        </div>
                    </div>

                    <!-- Proyecto 2: Fineconia -->
                    <div class="proyecto-card">
                        <div class="proyecto-contenido">
                            <h3 data-lang="proyecto2_titulo">Fineconia</h3>
                            <div class="proyecto-imagen">
                                <video controls autoplay muted loop playsinline>
                                    <source src="{{ asset('images/Fineconia.mp4') }}" type="video/mp4">
                                    <span data-lang="video_error">Tu navegador no soporta el elemento de video.</span>
                                </video>
                            </div>
                            <div class="proyecto-tech">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">HTML</span>
                                <span class="tech-badge">CSS</span>
                                <span class="tech-badge">JavaScript</span>
                                <span class="tech-badge">MariaDB</span>

                            </div>
                            <p data-lang="proyecto2_desc">Aplicación web que permite a los usuarios llevar un control más eficiente de sus finanzas personales, facilitando la organización de ingresos y gastos, ayudando a mejorar la administración económica personal.</p>
                            <p data-lang="rol12">Rol desempeñado: Desarrollador bankend</p>
                            <a href="https://github.com/XENITHCODE2025/Fineconia" class="proyecto-link" target="_blank" data-lang="ver_proyecto">Ver proyecto →</a>
                        </div>
                    </div>

                    <!-- Proyecto 3: AutoMarket - Red Social de Autos -->
                    <div class="proyecto-card">
                        <div class="proyecto-contenido">
                            <h3 data-lang="proyecto3_titulo">Red Social</h3>
                            <div class="proyecto-imagen">
                                <img src="{{ asset('images/AutoMarket.png') }}" class="proyecto-img">
                            </div>
                            <div class="proyecto-tech">
                                <span class="tech-badge">Node.js</span>
                                <span class="tech-badge">Jquery</span>
                                <span class="tech-badge">Express</span>
                                <span class="tech-badge">MongoDB</span>
                                <span class="tech-badge">Bootstrap</span>
                            </div>
                            <p data-lang="proyecto3_desc">Plataforma de comercio electronico completa enfocada en al venta y compra de autos de todo tipo con geolocalizacion exacta.</p>
                            <p data-lang="rol12">Rol desempeñado: Desarrollador bankend</p>
                            <a href="https://github.com/AlexAparic/RedSocial" class="proyecto-link" target="_blank" data-lang="ver_proyecto">Ver proyecto →</a>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
<!-- SLIDE 4 - CONTACTO -->
 <div id="alerta-contacto" class="alerta-contacto">
    Mensaje enviado correctamente
</div>
<div class="container" id="contacto">
    <div class="slide-content">

        <nav class="menu">
            <a href="#inicio" data-lang="inicio">Inicio</a>
            <a href="#sobre" class="active" data-lang="sobre">Sobre mi</a>
            <a href="#proyectos" data-lang="proyectos">Proyectos Académicos</a>
            <a href="#contacto" data-lang="contacto_menu">Contactame</a>
        </nav>
        <h2 class="contact-title" data-lang="contacto_titulo">Contáctame</h2>

        <form id="contactForm" action="{{ route('contacto.enviar') }}" method="POST" class="contact-form">
            @csrf

           <input
    type="text"
    name="nombre"
    data-lang="form_nombre"
    placeholder="Nombre completo"
    required>

<input
    type="email"
    name="correo"
    data-lang="form_email"
    placeholder="Correo electrónico"
    required>

<input
    type="text"
    name="asunto"
    data-lang="form_asunto"
    placeholder="Asunto"
    required>

<textarea
    name="mensaje"
    rows="6"
    data-lang="form_mensaje"
    placeholder="Escribe tu mensaje..."
    required></textarea>

            <button data-lang="form_enviar" type="submit">
                Enviar mensaje
            </button>
        </form>
      
    </div>
</div>

    <footer class="footer-global">
        <p data-lang="copyright">© 2026 William Aparicio</p>
        <div class="footer-links">
            <a href="https://www.linkedin.com/in/william-aparicio-3520031b2?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" data-lang="linkedin">LinkedIn</a>
            <a href="https://github.com/AlexAparic" target="_blank" data-lang="github">GitHub</a>
            <p data-lang="email">Correo: alexzelaya1703@gmail.com</a>
        </div>
    </footer>
    

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            let currentLang = "es";

            /* =========================
               DICCIONARIO COMPLETO
            ========================= */
            const translations = {
                es: {
                    // Menú
                    inicio: "Inicio",
                    sobre: "Sobre mi",
                    proyectos: "Proyectos Académicos",

                    // Hero
                    nombre: "William Alexander Aparicio Zelaya",
                    rol: "Programador backend",
                    frase: "\"Si funciona sin que lo veas, es backend.\"",

                    // Sobre mi
                    sobre_titulo: "Sobre mi:",
                    sobre_texto1: "Soy William Alexander Aparicio Zelaya, desarrollador back-end enfocado en la creación de soluciones eficientes, seguras y escalables. Tengo experiencia en el desarrollo de lógica de negocio, manejo de bases de datos y construcción de APIs, utilizando tecnologías como PHP, Laravel, Node.js y JavaScript.",
                    sobre_texto2: "Me motiva optimizar el rendimiento de los sistemas, aprender continuamente y afrontar nuevos retos tecnológicos, aportando valor mediante código limpio, estructurado y orientado a resultados.",

                    // Botones
                    cv: "Descargar CV",
                    ver_proyecto: "Ver proyecto →",

                    // Redes sociales
                    linkedin: "LinkedIn",
                    github: "GitHub",
                    email: "Correo: alexzelaya1703@gmail.com",

                    // Proyectos
                    proyectos_titulo: "💻 Proyectos Académicos",

                    proyecto1_titulo: "Calculadora de Sueldos",
                    proyecto1_desc: "Aplicación web que permite a los usuarios calcular sueldo de manera eficiente y precisa a partir de sus ingresos y deducciones.",

                    proyecto2_titulo: "Fineconia",
                    proyecto2_desc: "Aplicación web que permite a los usuarios llevar un control más eficiente de sus finanzas personales, facilitando la organización de ingresos y gastos, ayudando a mejorar la administración económica personal.",

                    proyecto3_titulo: "Red Social",
                    proyecto3_desc: "Plataforma de comercio electronico completa enfocada en al venta y compra de autos de todo tipo con geolocalizacion exacta.",

                    // Footer
                    copyright: "© 2026 William Aparicio",

                    // Errores
                    video_error: "Tu navegador no soporta el elemento de video.",

                    languages_title: "Lenguajes",
                    skills_title: "Habilidades",
                    contacto_menu: "Contactame",
                    contacto_titulo: "Contactame",
                    
                    form_nombre: "Nombre completo",
                    form_email: "Correo",
                    form_asunto: "Asunto",
                    form_mensaje: "Mensaje",
                    
                    form_enviar: "Enviar mensaje",


                    rol12: "Rol desempeñado: Desarrollador bankend"

                
                },

                en: {
                    // Menu
                    inicio: "Home",
                    sobre: "About me",
                    proyectos: "Academic Projects",

                    // Hero
                    nombre: "William Alexander Aparicio Zelaya",
                    rol: "Backend Developer",
                    frase: "\"If it works without you seeing it, it's backend.\"",

                    // About me
                    sobre_titulo: "About me:",
                    sobre_texto1: "I am William Alexander Aparicio Zelaya, a back-end developer focused on creating efficient, secure, and scalable solutions. I have experience in business logic development, database management, and API construction, using technologies such as PHP, Laravel, Node.js and JavaScript.",
                    sobre_texto2: "I am motivated by optimizing system performance, continuously learning, and facing new technological challenges, adding value through clean, structured, and results-oriented code.",

                    // Buttons
                    cv: "Download CV",
                    ver_proyecto: "View project →",

                    // Social media
                    linkedin: "LinkedIn",
                    github: "GitHub",
                    email: "Email: alexzelaya1703@gmail.com",

                    // Projects
                    proyectos_titulo: "💻 Academic Projects",

                    proyecto1_titulo: "Salary Calculator",
                    proyecto1_desc: "Web application that allows users to calculate salary efficiently and accurately based on their income and deductions.",

                    proyecto2_titulo: "Fineconia",
                    proyecto2_desc: "Web application that allows users to have more efficient control of their personal finances, facilitating the organization of income and expenses, helping to improve personal economic administration.",

                    proyecto3_titulo: "Social Network",
                    proyecto3_desc: "Complete e-commerce platform focused on buying and selling all types of cars with exact geolocation.",

                    // Footer
                    copyright: "© 2026 William Aparicio",

                    // Errors
                    video_error: "Your browser does not support the video element.",

                    languages_title: "Languages",
                    skills_title: "Skills",
                    contacto_menu: "Contact",
                    contacto_titulo: "Contact Me",

                    form_nombre: "Full name",
                    form_email: "Email",
                    form_asunto: "Subject",
                    form_mensaje: "Message",
                    
                    form_enviar: "Send message",

                    rol12: "Role played: Backend Developer"


                }
            };

            /* =========================
               CAMBIAR IDIOMA
            ========================= */
            function changeLanguage(lang) {
    currentLang = lang;

    document.querySelectorAll("[data-lang]").forEach(el => {

        const key = el.getAttribute("data-lang");

        if (!translations[lang][key]) return;

        if (
            el.tagName === "INPUT" ||
            el.tagName === "TEXTAREA"
        ) {
            el.placeholder = translations[lang][key];
        } else {
            el.textContent = translations[lang][key];
        }
    });

    const langBtn = document.getElementById("lang-toggle");

    if (langBtn) {
        langBtn.textContent = lang === "es" ? "🌐 ES" : "🌐 EN";
    }

    localStorage.setItem("preferred_language", lang);
}

            /* =========================
               BOTÓN
            ========================= */
            const langToggle = document.getElementById("lang-toggle");
            if (langToggle) {
                // Cargar idioma guardado
                const savedLang = localStorage.getItem("preferred_language");
                if (savedLang && (savedLang === "es" || savedLang === "en")) {
                    currentLang = savedLang;
                    changeLanguage(currentLang);
                }

                // Evento click
                langToggle.addEventListener("click", () => {
                    const newLang = currentLang === "es" ? "en" : "es";
                    changeLanguage(newLang);
                });
            }

            /* =========================
               SCROLL CENTRADO
            ========================= */
            document.querySelectorAll('.menu a').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

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

        const form = document.getElementById('contactForm');

if(form){

    form.addEventListener('submit', async (e) => {

        e.preventDefault();

        const formData = new FormData(form);

        try{

            const response = await fetch(form.action,{
                method:'POST',
                body:formData,
                headers:{
                    'X-Requested-With':'XMLHttpRequest'
                }
            });

            const data = await response.json();

            if(data.success){

                // limpiar formulario
                form.reset();

                // mostrar alerta
                const alerta = document.getElementById('alerta-contacto');

                alerta.textContent = data.message;
                alerta.classList.add('show');

                // ocultar después de 4 segundos
                setTimeout(() => {
                    alerta.classList.remove('show');
                }, 4000);
            }

        }catch(error){
            console.error(error);
        }

    });

}
        
    </script>
</body>

</html>