<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas Básket</title>
    <link href="css/reservasPadel.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    
    <style>
        /* Estilos personalizados para la alerta de SweetAlert */
        .swal2-popup {
            border: 2px solid #333; /* Ajusta el grosor y el color del borde según tus preferencias */
        }
    </style>

    <script>
        function mostrarCuadroSalir() {
            // Mostrar alerta con dos opciones
            Swal.fire({
                title: '¿Qué deseas hacer?',
                showCancelButton: true,
                cancelButtonText: 'Salir al Menú Reservas',
                confirmButtonText: 'Salir al Menú Principal',
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    
                    window.location.href = 'index.php';
                } else {
                    
                    window.location.href = 'menuPadel.php'
                }
            });
        }
    </script>
</head>
<body>
    
<header>
    <nav>
        <a href="#pista1">Pista1</a>
        <a href="#pista2">Pista2</a>
        <a href="#pista3">Pista3</a>
        
    </nav>
</header>

<div id="scroll">
<a href="#"><i class='bx bx-chevron-up'></i></a>
<i class='bx bx-dots-vertical-rounded' ></i>
<a href="#pista1"><i class='bx bx-mouse'></i></a>
<i class='bx bx-dots-vertical-rounded' ></i>
<a href="#"><i class='bx bx-chevron-down'></i></a>
</div>
<div class="section" id="pista1">
    <div class="cont">
    <h2>Interior B - 1</h2>
    <p id="texto_ajuste1">Pista Interior con Suelo de Madera Dura</p>
    <button class="horario"><a href="#">Horario</a></button>
    </div>
    <div class="foto" id="foto">
        <img  src="img/cancha2.png">
    </div>

    
</div>
<div class="section" id="pista2">
<div class="cont">
    <h2>Interior B - 2</h2>
    <p id="texto_ajuste2">Pista Interior con Suelo de Madera Dura</p>
    <button class="horario"><a href="#">Horario</a></button>
    </div>
    <div class="foto" id="foto2">
        <img src="img/cancha2.png">
          
    </div>
    
</div>
<div class="section" id="pista3">
<div class="cont">
    <h2>Interior B - 3</h2>
    <p id="texto_ajuste3">Pista Interior con Suelo de Madera Dura</p>
    <button class="horario"><a href="#">Horario</a></button>
</div>
    <div class="foto" id="foto3">
        <img src="img/cancha2.png">   
    </div>
   
</div>


<button onclick="mostrarCuadroSalir()" class="salir">Salir</button>
</body>
</html>