<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <title>TFG | MK </title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="css/includes.css" rel="stylesheet" type="text/css">

</head>
<body id="cuerpo">

    <div>
<?php include "includes/header.php";?>
</div>


<section>

    <div id="section_reservas">
        
        <div id="info_reservas">
        <img src="./img/logo_empresa2.png">
        <h1>Sobre World Padel Sports    </h1>
       Si juegas al pádel y al baloncesto y quieres jugar un partido de amigos o entrenar para una competición este es tu Club. 
       Ponemos a vuestra disposición 5 pistas de pádel y 3 canchas de baloncesto. ¡Reserva tu hueco ya!
        <a href="menuPadel.php">Reservas</a> 
        </div>
        

    </div>
   
</section>

<section id="deportes">

        <div id="deportes_header">
            <h1>Deportes</h1>
            <a href="#">Ver Más</a>
        </div>
        
        <div id="contenedor_deporte">
        
            <div id="contenedor">
            <div id="video-background">
        <video autoplay muted loop id="video">
            <source src="./video/video_padel.mp4" type="video/mp4">
        </video>
    </div>
           
                <div id="info_deporte">
                    
                <i class='bx bx-tennis-ball'></i>  
                                  <h1>Entrena Pádel</h1>
                    
                    
                </div>
            </div>
            <div id="contenedor">
            <div id="video-background">
        <video autoplay muted loop id="video">
            <source src="./video/video_basket.mp4" type="video/mp4">
        </video>
    </div>
    <div id="info_deporte">
        <i class='bx bx-basketball'></i>  
        <h1>Entrena Basket</h1>
        
    </div>
</div>
            <div id="contenedor">
            <div id="video-background">
        <video autoplay muted loop id="video">
            <source src="./video/vid_natacion.mp4" type="video/mp4">
        </video>
    </div>
                <div id="info_deporte">
                <i class='bx bx-swim'></i>  
                  <h1>Entrena natación</h1>
    
                </div>
            </div>
        </div>
    </section>
    <div id="flecha_subir">
    <a href="#cuerpo"><button>
        <i class='bx bx-up-arrow-alt' style='font-size: 35px;'></i>
    </button></a>
    </div>
    <div>
<?php include "includes/footer.php";?>
</div>
    <script src="js/script.js" type="text/javascript"></script>
</body>
</html>