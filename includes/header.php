<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Empresa</title>
    <link rel="stylesheet" href="css/header.css" type="text/css">
</head>
<body>
<div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>¡Bienvenido!</h2>
            <p>¿Qué te gustaría hacer?</p>
            <div class="button-container">
                <button class="register-button" onclick="irRegistro()">Registrarse</button>
                <button class="login-button">Iniciar sesión</button>
            </div>
        </div>
    </div>
    <header id="particles">
        <nav>
            <div id="contenedor_nav">
                <img src="./img/logo_empresa2.png" alt="Logo de la empresa" id="imagen_logo">
                <div id="lista_nav">
                    <ul>
                        <li><a href="index.php">INICIO</a></li>
                        <li><a href="infoHorario.php">HORARIO</a></li>
                        <li id="menu_despliegue">
                            <a href="menuPadel.php">RESERVAS <span class="flecha-abajo">&#9661;</span></a>
                            <ul id="submenu">
                                <li><a href="reservasPadel.php" id="submenu_elemento"> Pádel</a></li>
                                <li><a href="reservasBasket.php" id="submenu_elemento"> Baloncesto</a></li>
                            </ul>
                        </li>
                        <li><a href="infoContacto.php">CONTACTO</a></li>
                        <li><a href="tienda.php">TIENDA</a></li>
                    </ul>
                    
                </div>
                <div id="iconos_menu">
                        <a href="#" ><i class="fa-solid fa-gear fa-2x" id="icono_config"></i></a>
                        <div id="submenu_config">
                        <ul id="submenu_lista">
                            <li><button id="boton_dalto"><a href="#" id="texto_dalton">Modo Noche</a><i class="fa-solid fa-circle-half-stroke fa-2x" id="icono_dalton"></i></li>
                            <li><button><a href="cuenta.php" id="texto_perfil">Mi cuenta</a><i class="fa-solid fa-circle-user fa-2x" id="icono_perfil"></i></button></li>
                            <li><button><a href="#"id="texto_jugar"> Jugados</a><i class="fa-solid fa-clipboard fa-2x" id="icono_jugar"></i></button></li>
                        </ul>
                        </div>
                </div>
            </div>
        </nav>
        <div id="texto_info">
            <h1>World Padel Sports</h1>
            <h3>Organiza tus partidos rapidamente</h3>
            <a href="#section_reservas" class="scroll"><i class='bx bxs-down-arrow'></i></a>
        </div>
    </header>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>    
<script src="./js/scriptHeader.js"></script>
</body>
</html>
