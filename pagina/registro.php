<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encantia | Registro</title>
    <link rel="icon" href="../img/logo.png" type="image/png">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../src/settings/script.js" defer></script>
    <script src="../src/settings/settings.js" defer></script> <!-- Ruta actualizada -->
</head>
<body>
    <div class="navbar">
        <div class="links">
            <a href="../index.php">Inicio</a>
            <a href="https://encantia-webstore.tebex.io/">Tienda</a>
            <a href="https://form.jotform.com/242551838413356">Soporte</a>
            <a href="infosrv.php">Información del Servidor</a>
            <a href="login.php">Iniciar Sesión</a>
            <a href="registro.php">Registro</a>
        </div>
        <div class="logo">
            <a href="index.php">
                <img src="../img/logo.png" alt="Logo">
            </a>
        </div>
        <div class="settings">
            <a href="settings.php">
                <img src="../img/settings.png" alt="Configuración">
            </a>
        </div>
    </div>
    <main>
        <div class="form-container">
            <h2>Registrarse</h2>
            <form action="registro.php" method="post">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Confirmar Contraseña:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit">Registrarse</button>
            </form>
            <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
        </div>
    </main>
</body>
</html>