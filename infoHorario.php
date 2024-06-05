<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Horario del Club</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #45a049;
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 24px;
        }

        .container {
            width: 90%;
            margin: 0 auto;
        }

        .schedule {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .schedule-item {
            border: 2px solid #ddd; /* Marcamos los bordes */
            width: 30%;
            margin-bottom: 20px;
            overflow: hidden;
            box-sizing: border-box; /* Evitamos que los bordes aumenten el tamaño del elemento */
        }

        .schedule-item h3 {
            background-color: #4CAF50;
            color: white;
            margin: 0;
            padding: 10px;
            text-align: center;
        }

        .schedule-item p {
            padding: 10px;
            text-align: center;
            margin: 0;
        }

        @media (max-width: 768px) {
            .schedule-item {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <?php include "includes/header_repag.php"?>
    <header>
        Información Horario del Club
    </header>
    <div class="container">
        <div class="schedule">
            <div class="schedule-item">
                <h3>Pádel</h3>
                <p>Lunes a Viernes: 8:00 AM - 10:00 PM</p>
                <p>Sábado y Domingo: 9:00 AM - 8:00 PM</p>
            </div>
            <div class="schedule-item">
                <h3>Tenis</h3>
                <p>Lunes a Viernes: 7:00 AM - 10:00 PM</p>
                <p>Sábado y Domingo: 8:00 AM - 8:00 PM</p>
            </div>
            <div class="schedule-item">
                <h3>Natación</h3>
                <p>Lunes a Viernes: 6:00 AM - 9:00 PM</p>
                <p>Sábado y Domingo: 7:00 AM - 7:00 PM</p>
            </div>
        </div>
    </div>
</body>
</html>
