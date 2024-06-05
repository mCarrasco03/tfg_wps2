<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Tu Empresa</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/header.css" type="text/css">

</head>
<body>
    <header id="particles">
        <nav>
            <div id="contenedor_nav">
                <img src="./img/logo_empresa2.png" alt="Logo de la empresa" id="imagen_logo">
                <div id="lista_nav">
                    <ul>
                        <li><a href="index.php">INICIO</a></li>
                        <li><a href="infoHorario.php">HORARIO</a></li>
                        <li id="menu_despliegue">
                            <a href="#">RESERVAS <span class="flecha-abajo">&#9661;</span></a>
                            <ul id="submenu">
                                <li><a href="reservasPadel.php" id="submenu_elemento">Pádel</a></li>
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
        
    </header>
    
<script src="./js/scriptHeader.js"></script>
</body>
</html>
