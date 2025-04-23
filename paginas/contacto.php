<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="icon" href="../img/contacto.svg" type="image/x-icon">
  <link rel="stylesheet" href="../css/estilos.css">
  <script src="../js/validacion.js" defer></script>
</head>
<body>
  <header class="text-center">
    <h1>Contacto</h1>
  </header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.html">Inicio</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="./comedor.html">Comedor</a></li>
          <li class="nav-item"><a class="nav-link" href="./informatica.html">Informática</a></li>
          <li class="nav-item"><a class="nav-link" href="./alumnos.html">Captación</a></li>
          <li class="nav-item"><a class="nav-link" href="./economica.html">Económica</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container mt-4">    
    <section>
      <h2>Formulario de contacto</h2>
      <form id="contactForm" method="POST" action="../procesos/validar-contacto.php" onsubmit="return validarFormulario()">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
          <div id="error_nombre" class="text-danger" style="display: none;"></div>
        </div>
        <div class="mb-3">
          <label for="correo" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="correo" name="correo">
          <div id="error_correo" class="text-danger" style="display: none;"></div>
        </div>
        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje</label>
          <textarea class="form-control" id="mensaje" name="mensaje" rows="5"></textarea>
          <div id="error_mensaje" class="text-danger" style="display: none;"></div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </section>
    <section>
      <h2>Ubicación</h2>
      <p>Visítanos en nuestras oficinas o programa una cita con nuestro equipo:</p>
      <div class="ratio ratio-16x9 mb-3">
        <iframe src="https://www.google.com/maps?q=Calle+Innovación+123,+08001+Barcelona&output=embed" allowfullscreen loading="lazy"></iframe>
      </div>
    </section>
  </main>

  <footer class="text-center mt-5">
    <p>&copy; 2025 Escuela Digital. Todos los derechos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
