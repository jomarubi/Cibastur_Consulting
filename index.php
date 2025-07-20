<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <h1>Bienvenidos a Cibastur Consulting</h1>

  <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" style="stop-color:#0f2027;stop-opacity:1" />
      <stop offset="50%" style="stop-color:#203a43;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#2c5364;stop-opacity:1" />
    </linearGradient>
  </defs>

  <rect width="600" height="200" fill="url(#grad1)" rx="20"/>

  <!-- Círculo con engranaje simulando innovación -->
  <g transform="translate(50,100)">
    <circle r="40" fill="#ffffff20" stroke="white" stroke-width="4"/>
    <path d="M -10 -30 L 10 -30 L 15 -40 L 25 -30 L 20 -20 L 30 -10 L 20 0 L 30 10 L 20 20 L 25 30 L 15 40 L 10 30 L -10 30 L -15 40 L -25 30 L -20 20 L -30 10 L -20 0 L -30 -10 L -20 -20 L -25 -30 L -15 -40 L -10 -30 Z"
          fill="white" transform="scale(0.5)"/>
  </g>

  <!-- Texto -->
  <text x="120" y="95" font-family="Segoe UI, sans-serif" font-size="42" fill="white" font-weight="bold">
    CIBASTUR
  </text>
  <text x="120" y="140" font-family="Segoe UI, sans-serif" font-size="28" fill="#e0e0e0">
    Consulting I+D · Exoesqueletos
  </text>
</svg>

    <!-- Eslogan con estilo mejorado -->
    <div class="eslogan-box">
        <span class="eslogan-icon">⚙️</span>
        <span class="eslogan-text">Tecnología ergonómica que aligera tu esfuerzo.</span>
    </div>

    <p>Proyecto de I+D en exoesqueletos pasivos para la mejora ergonómica en entornos industriales.</p>
</div>
<div class="content">
  <h1>Pruebas de Exoesqueleto en Cibastur Consulting</h1>
  <p>En Cibastur Consulting estamos llevando a cabo pruebas con nuestro exoesqueleto de asistencia avanzada, diseñado para mejorar la movilidad y reducir el esfuerzo físico en entornos laborales y de rehabilitación. Este desarrollo forma parte de nuestro compromiso con la innovación tecnológica aplicada a la salud y la industria.</p>
  <button id="myBtn" onclick="myFunction()">Pausar</button>
</div>





<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>

<?php include 'includes/footer.php'; ?>
