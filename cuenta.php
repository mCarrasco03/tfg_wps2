<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="css/includes.css" rel="stylesheet" type="text/css">
    <link href="css/cuenta.css" rel="stylesheet" type="text/css">
    <title>Pagina Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="modelo/sesion.php" method="post">
                <h1>Crear Cuenta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>o usa tu email para registrarte</span>
                <input type="text" placeholder="DNI o NIF" id="dni" name="dni">
                <input type="text" placeholder="Email" id="email" name="email">
                <input type="password" placeholder="Contraseña" id="contrasena" name="contrasena">
                <button type="submit">Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Inicia sesión</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>o usa tu correo</span>
                <input type="text" placeholder="DNI">
                <input type="password" placeholder="Contraseña">
                <a href="#">Olvidaste tu contraseña?</a>
                <button>Iniciar sesión </button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>¿Qué hay de nuevo</h1>
                    <p>Introduce tus datos personales para usar el sitio web</p>
                    <button class="hidden" id="login">Iniciar sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hola Amigo!</h1>
                    <p>Registrate con tus datos personales para usar el sitio web</p>
                    <button class="hidden" id="register">Registrarse</button>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="js/scriptCuenta.js"></script>
</body>

</html>