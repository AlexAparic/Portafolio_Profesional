<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Portafolio</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600&display=swap" rel="stylesheet">

<style>

html{
scroll-behavior:smooth;
}

body{
margin:0;
font-family:'Inter', sans-serif;
background:#0f172a;
display:flex;
flex-direction:column;
align-items:center;
padding:60px 0;
gap:80px;
}

/* TIPOGRAFIA */

h1, h2{
font-weight:600;
color:#F0F6FC;
}

.rol,
.sub,
.sobre-texto p{
font-weight:500;
font-style:italic;
color:#8B949E;
}

/* CONTENEDOR */

.container{
width:1000px;
background:linear-gradient(145deg,#020617,#020617,#030c1f);
border-radius:25px;
padding:40px 50px;
box-shadow:0 20px 60px rgba(0,0,0,0.6);

/* animación */
opacity:0;
transform:translateY(40px);
transition:all .7s ease;
}

/* slide visible */

.container.visible{
opacity:1;
transform:translateY(0);
}

/* MENU */

.menu{
display:flex;
justify-content:center;
gap:40px;
background:#111827;
padding:12px;
border-radius:20px;
margin-bottom:40px;
}

.menu a{
font-family:'Inter', sans-serif;
font-weight:500;
color:#8B949E;
text-decoration:none;
font-size:16px;
cursor:pointer;
}

.menu a.active{
font-weight:600;
color:#F0F6FC;
}

/* HERO */

.hero{
text-align:center;
padding:20px;
}

.foto{
width:200px;
height:200px;
border-radius:50%;
border:3px solid #061335;
margin-bottom:20px;
object-fit:cover;
}

h1{
font-size:24px;
margin:10px 0;
}

.frase{
margin-top:30px;
font-size:18px;
font-weight:600;
color:#F0F6FC;
}

/* SOBRE MI */

.sobre-mi{
display:flex;
align-items:center;
gap:50px;
}

.sobre-img img{
width:220px;
height:220px;
border-radius:50%;
object-fit:cover;
}

.sobre-texto{
max-width:600px;
}

.sobre-texto h2{
font-size:30px;
margin-bottom:10px;
}

.sobre-texto p{
line-height:1.6;
text-align:justify;
}

</style>
</head>

<body>

<!-- SLIDE 1 -->

<div class="container" id="inicio">

<nav class="menu">
<a href="#inicio">Inicio</a>
<a href="#sobre">Sobre mi</a>
<a href="#linkedin">Formación</a>
<a href="#cv">Proyectos Academicos</a>
</nav>

<div class="hero">

<img src="{{ asset('images/perfil.jpeg') }}" class="foto">

<h1>William Alexander Aparicio Zelaya</h1>

<p class="rol">Programador backend</p>

<p class="frase">
“Si funciona sin que lo veas, es backend.”
</p>

<p class="sub">
Toque la pantalla para continuar
</p>

</div>

</div>

<!-- SLIDE 2 -->

<div class="container" id="sobre">

<nav class="menu">
<a href="#inicio">Inicio</a>
<a href="#sobre">Sobre mi</a>
<a href="#linkedin">Formación</a>
<a href="#cv">Proyectos Academicos</a>
</nav>

<div class="sobre-mi">

<div class="sobre-img">
<img src="{{ asset('images/perfil.jpeg') }}">
</div>

<div class="sobre-texto">

<h2>Sobre mi:</h2>

<p>
Soy William Alexander Aparicio Zelaya, desarrollador back-end enfocado en la creación 
de soluciones eficientes, seguras y escalables. Tengo experiencia en el desarrollo 
de lógica de negocio, manejo de bases de datos y construcción de APIs, utilizando 
tecnologías como PHP, Laravel, Node.js y JavaScript.

Me motiva optimizar el rendimiento de los sistemas, aprender continuamente y 
afrontar nuevos retos tecnológicos, aportando valor mediante código limpio, 
estructurado y orientado a resultados.
</p>

</div>

</div>

</div>

<script>

/* animación al hacer scroll */

const slides = document.querySelectorAll(".container");

function mostrarSlides(){

slides.forEach(slide => {

const slideTop = slide.getBoundingClientRect().top;
const trigger = window.innerHeight * 0.75;

if(slideTop < trigger){
slide.classList.add("visible");
}else{
slide.classList.remove("visible");
}

});

}

window.addEventListener("scroll",mostrarSlides);

mostrarSlides();

</script>

</body>
</html>