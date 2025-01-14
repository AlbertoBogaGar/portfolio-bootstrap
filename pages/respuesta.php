<?php
// php -S localhost:8000

if (isset($_POST)) {
    
    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $mensaje = $_POST['texto'] ?? '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Confirmación de Contacto</title>
</head>
<body>
    <header class="container">
        <ul class="nav justify-content-center fixed-top w-75 m-auto rounded-5 mt-2">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
            </li>
        </ul>
    </header>

    <main class="container w-75 mt-5 pt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center mb-4">Confirmación de Contacto</h1>
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                    <p class="card-text">Gracias por contactarnos, <?php echo htmlspecialchars($nombre); ?>. Hemos recibido tu mensaje:</p>
                    <ul>
                        <li><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></li>
                        <li><strong>Correo:</strong> <?php echo htmlspecialchars($correo); ?></li>
                        <li><strong>Mensaje:</strong> <?php echo htmlspecialchars($mensaje); ?></li>
                    </ul>
                    <p class="card-text">Nos pondremos en contacto contigo pronto.</p>
                <?php else: ?>
                    <p class="card-text">No se ha recibido ningún dato del formulario.</p>
                <?php endif; ?>
                <div class="text-center mt-4">
                    <a href="../index.html" class="btn btn-primary">Volver a la página principal</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-4 mt-5">
        <div class="container text-center">
            <p>&copy; 2023 Alberto Boga. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

