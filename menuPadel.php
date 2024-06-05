<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Pádel</title>
    <link rel="stylesheet" href="css/menuPadel.css" type="text/css">
    
</head>

<body>
    <?php include "includes/header_repag.php"?>
    <div class="section">
        <div class="title">Reserva Tu Pista Favorita</div>

        <div class="image-container">
            <img src="img/padel_menu.jpg" alt="Imagen 1">
            <img src="img/basket_menu.jpg" alt="Imagen 2">
            <img src="img/piscina.jpg" alt="Imagen 3">
        </div>

        <div class="button-container">
            <button class="button" onclick="irPistaPrimera()">Pista 1</button>
            <button class="button" onclick="irCanchaPrimera()">Cancha 1</button>
            <button class="button">Club Natación</button>
        </div>
        <div class="button-container">
            <button class="button1" onclick="irPistaSegunda()">Pista 2</button>
            <button class="button1" onclick="irCanchaSegunda()">Cancha2</button>
            <button class="button1" >Botón 3.2</button>
        </div>
        <div class="button-container">
            <button class="button1" onclick="irPistaTercera()">Pista 3</button>
            <button class="button1" onclick="irCanchaTercera()">Cancha 3</button>
            <button class="button1">Botón 2</button>
        </div>
        <div class="button-container">
            <button class="button1" onclick="irPistaCuarta()">Pista 4</button>
        </div>
        <div class="button-container">
            <button class="button1" onclick="irPistaQuinta()">Pista 5</button>
        </div>
    </div>
</body>
<script src="js/scriptMenuPadel.js"></script>
</html>
