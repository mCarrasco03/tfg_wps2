<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Reserva</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/formularioReserva1.css">
</head>
<body>
<?php include "includes/header_repag.php"?>
<div id="contenedor_horas">
<div class="container mt-5" id="contenedor_reservas">
  <h2 class="text-center" id="texto_reservas"></br>Reservar Hora</h2>
  <?php 
  // Verificar si se ha pasado el día y la hora desde la URL
  if(isset($_GET['dia']) && isset($_GET['hora'])) {
    $dia = $_GET['dia'];
    $hora = $_GET['hora'];
    // Mostrar el día seleccionado en una fila
    echo '<p class="text-center">Día Seleccionado: ' . $dia . '</p>';
    // Mostrar la hora seleccionada en otra fila
    echo '<p class="text-center">Hora Seleccionada: ' . $hora . '</p>';
  }
  ?>
  <form action="#" method="post">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="telefono">DNI:</label>
      <input type="tel" class="form-control" id="telefono" name="telefono" required>
    </div>
    <div class="form-group">
      <label for="comentario">Comentario:</label>
      <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Reservar</button>
  </form>
</div>
</div>
</body>
</html>
