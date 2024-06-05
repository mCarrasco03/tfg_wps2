<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas Pádel</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="css/reservasPadel.css" rel="stylesheet" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    
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
    <nav> <!-- Menú de navegación entre pistas -->
        <a href="#pista1">Pista1</a>
        <a href="#pista2">Pista2</a>
        <a href="#pista3">Pista3</a>
        <a href="#pista4">Pista4</a>
        <a href="#pista5">Pista5</a>
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
    <h2>Exterior P - 1</h2>
    <p id="texto_ajuste1">Pista Exterior con césped artificial bicapa</p>
    <a href="horario.php"><button class="horario">Horario</button></a>  
    </div>
    <div class="foto" id="foto">
        <img  src="img/pista1.png" id="pista1img">
    </div>

    
</div>
<div class="section" id="pista2">
<div class="cont">
    <h2>Exterior P - 2</h2>
    <p id="texto_ajuste2">Pista Exterior con césped artificial bicapa</p>
    <button class="horario"><a href="#">Horario</a></button>
    </div>
    <div class="foto" id="foto2">
        <img  src="img/pista1.png" id="pista1img">
          
    </div>
    
</div>
<div class="section" id="pista3">
<div class="cont">
    <h2>Interior P - 3</h2>
    <p>Pista Central Panorámica con césped texturizado</p>
    <button class="horario"><a href="#">Horario</a></button>
</div>
    <div class="foto" id="foto3">
        <img src="img/pista2.png">   
    </div>
   
</div>
<div class="section" id="pista4">
<div class="cont">
    <h2>Interior P - 4</h2>
    <p id="texto_ajuste4">Pista Exterior con césped de alta densidad</p>
    <button class="horario"><a href="#">Horario</a></button>
</div>
    <div class="foto" id="foto4">
        <img src="img/pista2.png">
    </div>
    
</div>
<div class="section" id="pista5">
<div class="cont">
    <h2>Interior P - 5</h2>
    <p id="texto_ajuste5">Pista Interior con césped WPT</p>
    <button class="horario"><a href="#">Horario</a></button>
</div>
    
    <div class="foto" id="foto5">
        <img src="img/pista2.png" > 
    </div>
    
</div>
<button onclick="mostrarCuadroSalir()" class="salir">Salir</button>

</body>
</html>