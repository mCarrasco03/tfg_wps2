<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicación y responsables</title>
    <link rel="stylesheet" href="css/infoUbicacion.css">
</head>
<body>
    <?php include "includes/header_repag.php"?>
    <section id="section_mapa">
        <div id="contenedor_mapa" class="contenedores_ubicacion">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.845723565724!2d-3.5143666234964464!3d40.32358136130274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd423c10f245f32b%3A0x47eacd3bb2ed548e!2sPolideportivo%20Municipal%20Parque%20del%20Sureste!5e0!3m2!1ses!2ses!4v1716797635186!5m2!1ses!2ses" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div id="contenedor_responsables" class="contenedores_ubicacion">
            <div class="responsables">
                <h3>Gerente del Club</h3>
                <p>Nombre: Juan Pérez</p>
                <p>Teléfono: 123-456-789</p>
                <button class="call-button" onclick="window.location.href='tel:123-456-789'">Llamar</button>
            </div>
            <div class="responsables">
                <h3>Entrenador Principal</h3>
                <p>Nombre: María López</p>
                <p>Teléfono: 987-654-321</p>
                <button class="call-button" onclick="window.location.href='tel:987-654-321'">Llamar</button>
            </div>
            <div class="responsables">
                <h3>Encargado de Instalaciones</h3>
                <p>Nombre: Carlos García</p>
                <p>Teléfono: 456-123-789</p>
                <button class="call-button" onclick="window.location.href='tel:456-123-789'">Llamar</button>
            </div>
        </div>
    </section>
</body>
</html>
