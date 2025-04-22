<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);
    $correo = trim($_POST["correo"]);
    $contenido = trim($_POST["mensaje"]);

    if (!empty($nombre) && !empty($correo) && !empty($contenido)) {
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $destinatario = "tucorreo@ejemplo.com"; // CAMBIA esto por tu correo real
            $asunto = "Mensaje desde el formulario de contacto";
            $mensaje_correo = "Nombre: $nombre\nCorreo: $correo\n\nMensaje:\n$contenido";

            if (mail($destinatario, $asunto, $mensaje_correo)) {
                $mensaje = "Mensaje enviado correctamente.";
            } else {
                $mensaje = "Error al enviar el mensaje. Inténtalo más tarde.";
            }
        } else {
            $mensaje = "Correo electrónico no válido.";
        }
    } else {
        $mensaje = "Por favor, completa todos los campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
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
            <li class="nav-item"><a class="nav-link" href="./contacto.php">Contacto</a></li>
          </ul>
      </div>
    </div>
  </nav>

  <main class="container mt-4">
    <section>
      <h2>Formulario de contacto</h2>
      <?php if (!empty($mensaje)): ?>
        <div class="alert alert-info"><?= $mensaje ?></div>
      <?php endif; ?>
      <form method="GET" action="contacto.php">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
          <label for="correo" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje</label>
          <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </section>

    <section class="mt-4">
      <h2>Información de contacto</h2>
      <p><strong>Dirección:</strong> Calle Escuela, nº 123, Castellón</p>
      <p><strong>Teléfono:</strong> 964 000 000</p>
      <p><strong>Email:</strong> contacto@escueladigital.com</p>
    </section>
  </main>

  <footer class="text-center mt-5">
    <p>&copy; 2025 Escuela Digital. Todos los derechos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
