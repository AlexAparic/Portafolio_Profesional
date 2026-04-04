<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>William Aparicio - Portfolio Backend</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
        }

        /* Toolbar */
        .toolbar {
            background: #1a1a2e;
            padding: 20px;
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .toolbar-btn {
            background: transparent;
            border: none;
            color: #888;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .toolbar-btn:hover {
            color: #fff;
            background: rgba(255,255,255,0.1);
        }

        .toolbar-btn.active {
            background: #0f3460;
            color: white;
            box-shadow: 0 4px 15px rgba(15, 52, 96, 0.5);
        }

        /* Slides container */
        .slides-container {
            position: relative;
            min-height: 500px;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s ease-in-out;
            transform: translateX(50px);
            padding: 40px;
        }

        .slide.active {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
            position: relative;
        }

        /* Slide content styles */
        .profile-section {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .profile-name {
            font-size: 3em;
            color: #1a1a2e;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .profile-title {
            font-size: 1.5em;
            color: #0f3460;
            margin-bottom: 30px;
            font-weight: 400;
            border-bottom: 3px solid #e94560;
            display: inline-block;
            padding-bottom: 10px;
        }

        .quote-box {
            background: linear-gradient(135deg, #667eea20, #764ba220);
            padding: 30px;
            border-radius: 15px;
            margin: 30px 0;
            font-size: 1.3em;
            font-style: italic;
            color: #1a1a2e;
            border-left: 5px solid #e94560;
        }

        .touch-message {
            color: #666;
            font-size: 1.1em;
            cursor: pointer;
            padding: 15px 30px;
            background: #f0f0f0;
            border-radius: 50px;
            display: inline-block;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .touch-message:hover {
            background: #e0e0e0;
            border-color: #0f3460;
            transform: scale(1.05);
        }

        .about-text {
            font-size: 1.2em;
            line-height: 1.8;
            color: #333;
            text-align: justify;
            max-width: 800px;
            margin: 0 auto;
        }

        .linkedin-section {
            text-align: center;
        }

        .linkedin-card {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 15px;
            margin: 20px auto;
            max-width: 500px;
        }

        .linkedin-link {
            display: inline-block;
            background: #0e76a8;
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.2em;
            transition: all 0.3s ease;
        }

        .linkedin-link:hover {
            background: #0a5c83;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(14, 118, 168, 0.4);
        }

        .cv-section {
            text-align: center;
        }

        .download-cv-btn {
            display: inline-block;
            background: #0f3460;
            color: white;
            padding: 18px 50px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.2em;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .download-cv-btn:hover {
            background: #1a1a2e;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(15, 52, 96, 0.4);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .toolbar {
                gap: 10px;
                padding: 15px;
            }
            
            .toolbar-btn {
                font-size: 14px;
                padding: 8px 12px;
            }
            
            .profile-name {
                font-size: 2em;
            }
            
            .slide {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Toolbar / Navigation -->
        <div class="toolbar">
            <button class="toolbar-btn active" data-slide="inicio">Inicio</button>
            <button class="toolbar-btn" data-slide="sobre-mi">Sobre mi</button>
            <button class="toolbar-btn" data-slide="linkedin">Perfil de LinkedIn</button>
            <button class="toolbar-btn" data-slide="cv">Descargar CV</button>
        </div>

        <!-- Slides -->
        <div class="slides-container">
            <!-- Slide Inicio -->
            <div class="slide active" id="slide-inicio">
                <div class="profile-section">
                    <h1 class="profile-name">William Alexander Aparicio Zelaya</h1>
                    <h2 class="profile-title">Programador backend</h2>
                    
                    <div class="quote-box">
                        "Si funciona sin que lo veas, es backend."
                    </div>
                    
                    <div class="touch-message" onclick="changeSlide('sobre-mi')">
                        Toque la pantalla para continuar
                    </div>
                </div>
            </div>

            <!-- Slide Sobre mi -->
            <div class="slide" id="slide-sobre-mi">
                <div class="profile-section">
                    <h1 class="profile-name">Sobre mi</h1>
                    <p class="about-text">
                        Soy William Alexander Aparicio Zelaya, desarrollador back-end enfocado en la creación de soluciones eficientes, seguras y escalables. Tengo experiencia en el desarrollo de lógica de negocio, manejo de bases de datos y construcción de APIs, utilizando las mejores prácticas y tecnologías modernas para garantizar un rendimiento óptimo.
                    </p>
                </div>
            </div>

            <!-- Slide LinkedIn -->
            <div class="slide" id="slide-linkedin">
                <div class="profile-section linkedin-section">
                    <h1 class="profile-name">Perfil de LinkedIn</h1>
                    <div class="linkedin-card">
                        <p style="margin-bottom: 30px; color: #666;">Conecta conmigo profesionalmente</p>
                        <a href="#" class="linkedin-link" target="_blank">
                            Visitar LinkedIn
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide CV -->
            <div class="slide" id="slide-cv">
                <div class="profile-section cv-section">
                    <h1 class="profile-name">Descargar CV</h1>
                    <div style="margin: 40px 0;">
                        <button class="download-cv-btn" onclick="alert('Descargando CV...')">
                            📄 Descargar Curriculum
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Función para cambiar de slide
        function changeSlide(slideId) {
            const slides = document.querySelectorAll('.slide');
            const buttons = document.querySelectorAll('.toolbar-btn');
            
            // Remover clase active de todos los slides y botones
            slides.forEach(slide => {
                slide.classList.remove('active');
            });
            
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });
            
            // Activar el slide correspondiente
            const activeSlide = document.getElementById(`slide-${slideId}`);
            if (activeSlide) {
                activeSlide.classList.add('active');
            }
            
            // Activar el botón correspondiente
            const activeButton = document.querySelector(`[data-slide="${slideId}"]`);
            if (activeButton) {
                activeButton.classList.add('active');
            }
        }

        // Event listeners para los botones del toolbar
        document.querySelectorAll('.toolbar-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const slideId = e.target.getAttribute('data-slide');
                changeSlide(slideId);
            });
        });

        // También se puede cambiar con las teclas de flecha (opcional)
        document.addEventListener('keydown', (e) => {
            const slides = ['inicio', 'sobre-mi', 'linkedin', 'cv'];
            const currentSlide = document.querySelector('.slide.active');
            const currentId = currentSlide.id.replace('slide-', '');
            let currentIndex = slides.indexOf(currentId);
            
            if (e.key === 'ArrowRight' && currentIndex < slides.length - 1) {
                changeSlide(slides[currentIndex + 1]);
            } else if (e.key === 'ArrowLeft' && currentIndex > 0) {
                changeSlide(slides[currentIndex - 1]);
            }
        });
    </script>
</body>
</html>