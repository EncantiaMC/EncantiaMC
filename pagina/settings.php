<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encantia | Configuración</title>
    <link rel="icon" href="../img/logo.png" type="image/png">
    <link rel="stylesheet" href="../css/styles.css">
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
                <img src="img/settings.png" alt="Configuración">
            </a>
        </div>
    </div>
    <main>
        <div class="settings-content">
            <h1>Configuración</h1>
            <div class="theme-setting">
                <h2>Seleccionar Tema</h2>
                <div class="theme-options">
                    <label class="theme-option">
                        <input type="radio" name="theme" value="light"> Modo Claro
                    </label>
                    <label class="theme-option">
                        <input type="radio" name="theme" value="dark"> Modo Oscuro
                    </label>
                </div>
            </div>
        </div>
    </main>
</body>
</html>