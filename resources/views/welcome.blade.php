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
            </nav>

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

                    <!-- BOTÓN CV -->
                    <a href="{{ asset('docs/cv.pdf') }}" download class="cv-btn" data-lang="cv">
                        Descargar CV
                    </a>
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
                            <a href="https://github.com/AlexAparic/calculadora-sueldos" class="proyecto-link" data-lang="ver_proyecto">Ver proyecto →</a>
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
                            <a href="https://github.com/XENITHCODE2025/Fineconia" class="proyecto-link" data-lang="ver_proyecto">Ver proyecto →</a>
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
                            <a href="https://github.com/AlexAparic/RedSocial" class="proyecto-link" data-lang="ver_proyecto">Ver proyecto →</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="footer-global">
        <p data-lang="copyright">© 2026 William Aparicio</p>
        <div class="footer-links">
            <a href="https://www.linkedin.com/in/william-aparicio-3520031b2?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" data-lang="linkedin">LinkedIn</a>
            <a href="https://github.com/AlexAparic" target="_blank" data-lang="github">GitHub</a>
            <p>Correo: alexzelaya1703@gmail.com</a>
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
                email: "Correo",
                
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
                video_error: "Tu navegador no soporta el elemento de video."
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
                email: "Email",
                
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
                video_error: "Your browser does not support the video element."
            }
        };

        /* =========================
           CAMBIAR IDIOMA
        ========================= */
        function changeLanguage(lang) {
            currentLang = lang;
            
            document.querySelectorAll("[data-lang]").forEach(el => {
                const key = el.getAttribute("data-lang");
                if (translations[lang][key]) {
                    el.textContent = translations[lang][key];
                }
            });
            
            // Actualizar texto del botón
            const langBtn = document.getElementById("lang-toggle");
            if (langBtn) {
                langBtn.textContent = lang === "es" ? "🌐 ES" : "🌐 EN";
            }
            
            // Guardar preferencia
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

                if(target){
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

        function mostrarSlides(){
            slides.forEach(slide => {
                const rect = slide.getBoundingClientRect();

                if(rect.top < window.innerHeight * 0.75 && rect.bottom > window.innerHeight * 0.25){
                    slide.classList.add("visible");
                } else {
                    slide.classList.remove("visible");
                }
            });
        }

        /* =========================
           MENÚ ACTIVO
        ========================= */
        function actualizarMenu(){
            let current = "";

            slides.forEach(section => {
                const rect = section.getBoundingClientRect();

                if(rect.top <= window.innerHeight/2 && rect.bottom >= window.innerHeight/2){
                    current = section.id;
                }
            });

            document.querySelectorAll(".menu a").forEach(link => {
                link.classList.remove("active");
                if(link.getAttribute("href") === "#" + current){
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
    </script>
</body>

</html>