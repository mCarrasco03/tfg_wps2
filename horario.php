<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Horario de Reserva</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/horarioP1.css">
  <script src="js/horario.js"></script>
</head>
<body>
<?php include "includes/header_repag.php"?>
<div id="contenedor_horario">
  <div class="container mt-5">
    <h2 class="text-center">Horario Pista 1</h2>
    <div class="form-group">
  <label for="semana">Semana Actual:</label>
  <span id="semana"></span>
</div>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="hora">Hora</th>
          <th>Lunes</th>
          <th>Martes</th>
          <th>Miércoles</th>
          <th>Jueves</th>
          <th>Viernes</th>
          <th>Sábado</th>
          <th>Domingo</th>
        </tr>
      </thead>
      <tbody>
        <!-- Filas de horas -->
        <!-- Desde las 8:00 AM hasta las 9:00 PM -->
        <!-- Cada fila representa una hora de intervalo -->
        <!-- Puedes replicar estas filas para cada hora del día -->
        <!-- Ejemplo para una sola fila -->
        <tr>
          <td>08:00 - 09:00</td>
          <td data-hora="08:00 - 09:00" data-dia="Lunes"></td>
          <td data-hora="08:00 - 09:00" data-dia="Martes"></td>
          <td data-hora="08:00 - 09:00" data-dia="Miércoles"></td>
          <td data-hora="08:00 - 09:00" data-dia="Jueves"></td>
          <td data-hora="08:00 - 09:00" data-dia="Viernes"></td>
          <td data-hora="08:00 - 09:00" data-dia="Sábado"></td>
          <td data-hora="08:00 - 09:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>09:00 - 10:00</td>
          <td data-hora="09:00 - 10:00" data-dia="Lunes"></td>
          <td data-hora="09:00 - 10:00" data-dia="Martes"></td>
          <td data-hora="09:00 - 10:00" data-dia="Miércoles"></td>
          <td data-hora="09:00 - 10:00" data-dia="Jueves"></td>
          <td data-hora="09:00 - 10:00" data-dia="Viernes"></td>
          <td data-hora="09:00 - 10:00" data-dia="Sábado"></td>
          <td data-hora="09:00 - 10:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>10:00 - 11:00</td>
          <td data-hora="10:00 - 11:00" data-dia="Lunes"></td>
          <td data-hora="10:00 - 11:00" data-dia="Martes"></td>
          <td data-hora="10:00 - 11:00" data-dia="Miércoles"></td>
          <td data-hora="10:00 - 11:00" data-dia="Jueves"></td>
          <td data-hora="10:00 - 11:00" data-dia="Viernes"></td>
          <td data-hora="10:00 - 11:00" data-dia="Sábado"></td>
          <td data-hora="10:00 - 11:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>11:00 - 12:00</td>
          <td data-hora="11:00 - 12:00" data-dia="Lunes"></td>
          <td data-hora="11:00 - 12:00" data-dia="Martes"></td>
          <td data-hora="11:00 - 12:00" data-dia="Miércoles"></td>
          <td data-hora="11:00 - 12:00" data-dia="Jueves"></td>
          <td data-hora="11:00 - 12:00" data-dia="Viernes"></td>
          <td data-hora="11:00 - 12:00" data-dia="Sábado"></td>
          <td data-hora="11:00 - 12:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>12:00 - 13:00</td>
          <td data-hora="12:00 - 13:00" data-dia="Lunes"></td>
          <td data-hora="12:00 - 13:00" data-dia="Martes"></td>
          <td data-hora="12:00 - 13:00" data-dia="Miércoles"></td>
          <td data-hora="12:00 - 13:00" data-dia="Jueves"></td>
          <td data-hora="12:00 - 13:00" data-dia="Viernes"></td>
          <td data-hora="12:00 - 13:00" data-dia="Sábado"></td>
          <td data-hora="12:00 - 13:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>13:00 - 14:00</td>
          <td data-hora="13:00 - 14:00" data-dia="Lunes"></td>
          <td data-hora="13:00 - 14:00" data-dia="Martes"></td>
          <td data-hora="13:00 - 14:00" data-dia="Miércoles"></td>
          <td data-hora="13:00 - 14:00" data-dia="Jueves"></td>
          <td data-hora="13:00 - 14:00" data-dia="Viernes"></td>
          <td data-hora="13:00 - 14:00" data-dia="Sábado"></td>
          <td data-hora="13:00 - 14:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>14:00 - 15:00</td>
          <td data-hora="14:00 - 15:00" data-dia="Lunes"></td>
          <td data-hora="14:00 - 15:00" data-dia="Martes"></td>
          <td data-hora="14:00 - 15:00" data-dia="Miércoles"></td>
          <td data-hora="14:00 - 15:00" data-dia="Jueves"></td>
          <td data-hora="14:00 - 15:00" data-dia="Viernes"></td>
          <td data-hora="14:00 - 15:00" data-dia="Sábado"></td>
          <td data-hora="14:00 - 15:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>15:00 - 16:00</td>
          <td data-hora="15:00 - 16:00" data-dia="Lunes"></td>
          <td data-hora="15:00 - 16:00" data-dia="Martes"></td>
          <td data-hora="15:00 - 16:00" data-dia="Miércoles"></td>
          <td data-hora="15:00 - 16:00" data-dia="Jueves"></td>
          <td data-hora="15:00 - 16:00" data-dia="Viernes"></td>
          <td data-hora="15:00 - 16:00" data-dia="Sábado"></td>
          <td data-hora="15:00 - 16:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>16:00 - 17:00</td>
          <td data-hora="16:00 - 17:00" data-dia="Lunes"></td>
          <td data-hora="16:00 - 17:00" data-dia="Martes"></td>
          <td data-hora="16:00 - 17:00" data-dia="Miércoles"></td>
          <td data-hora="16:00 - 17:00" data-dia="Jueves"></td>
          <td data-hora="16:00 - 17:00" data-dia="Viernes"></td>
          <td data-hora="16:00 - 17:00" data-dia="Sábado"></td>
          <td data-hora="16:00 - 17:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>17:00 - 18:00</td>
          <td data-hora="17:00 - 18:00" data-dia="Lunes"></td>
          <td data-hora="17:00 - 18:00" data-dia="Martes"></td>
          <td data-hora="17:00 - 18:00" data-dia="Miércoles"></td>
          <td data-hora="17:00 - 18:00" data-dia="Jueves"></td>
          <td data-hora="17:00 - 18:00" data-dia="Viernes"></td>
          <td data-hora="17:00 - 18:00" data-dia="Sábado"></td>
          <td data-hora="17:00 - 18:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>18:00 - 19:00</td>
          <td data-hora="18:00 - 19:00" data-dia="Lunes"></td>
          <td data-hora="18:00 - 19:00" data-dia="Martes"></td>
          <td data-hora="18:00 - 19:00" data-dia="Miércoles"></td>
          <td data-hora="18:00 - 19:00" data-dia="Jueves"></td>
          <td data-hora="18:00 - 19:00" data-dia="Viernes"></td>
          <td data-hora="18:00 - 19:00" data-dia="Sábado"></td>
          <td data-hora="18:00 - 19:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>19:00 - 20:00</td>
          <td data-hora="19:00 - 20:00" data-dia="Lunes"></td>
          <td data-hora="19:00 - 20:00" data-dia="Martes"></td>
          <td data-hora="19:00 - 20:00" data-dia="Miércoles"></td>
          <td data-hora="19:00 - 20:00" data-dia="Jueves"></td>
          <td data-hora="19:00 - 20:00" data-dia="Viernes"></td>
          <td data-hora="19:00 - 20:00" data-dia="Sábado"></td>
          <td data-hora="19:00 - 20:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>20:00 - 21:00</td>
          <td data-hora="20:00 - 21:00" data-dia="Lunes"></td>
          <td data-hora="20:00 - 21:00" data-dia="Martes"></td>
          <td data-hora="20:00 - 21:00" data-dia="Miércoles"></td>
          <td data-hora="20:00 - 21:00" data-dia="Jueves"></td>
          <td data-hora="20:00 - 21:00" data-dia="Viernes"></td>
          <td data-hora="20:00 - 21:00" data-dia="Sábado"></td>
          <td data-hora="20:00 - 21:00" data-dia="Domingo"></td>
        </tr>
        
      </tbody>
    </table>
  </div>
  </div>
  <table class="table table-bordered">
      <thead>
        <tr>
          <th class="hora">Hora</th>
          <th>Lunes</th>
          <th>Martes</th>
          <th>Miércoles</th>
          <th>Jueves</th>
          <th>Viernes</th>
          <th>Sábado</th>
          <th>Domingo</th>
        </tr>
      </thead>
      <tbody>
        <!-- Filas de horas -->
        <!-- Desde las 8:00 AM hasta las 9:00 PM -->
        <!-- Cada fila representa una hora de intervalo -->
        <!-- Puedes replicar estas filas para cada hora del día -->
        <!-- Ejemplo para una sola fila -->
        <tr>
          <td>08:00 - 09:00</td>
          <td data-hora="08:00 - 09:00" data-dia="Lunes"></td>
          <td data-hora="08:00 - 09:00" data-dia="Martes"></td>
          <td data-hora="08:00 - 09:00" data-dia="Miércoles"></td>
          <td data-hora="08:00 - 09:00" data-dia="Jueves"></td>
          <td data-hora="08:00 - 09:00" data-dia="Viernes"></td>
          <td data-hora="08:00 - 09:00" data-dia="Sábado"></td>
          <td data-hora="08:00 - 09:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>09:00 - 10:00</td>
          <td data-hora="09:00 - 10:00" data-dia="Lunes"></td>
          <td data-hora="09:00 - 10:00" data-dia="Martes"></td>
          <td data-hora="09:00 - 10:00" data-dia="Miércoles"></td>
          <td data-hora="09:00 - 10:00" data-dia="Jueves"></td>
          <td data-hora="09:00 - 10:00" data-dia="Viernes"></td>
          <td data-hora="09:00 - 10:00" data-dia="Sábado"></td>
          <td data-hora="09:00 - 10:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>10:00 - 11:00</td>
          <td data-hora="10:00 - 11:00" data-dia="Lunes"></td>
          <td data-hora="10:00 - 11:00" data-dia="Martes"></td>
          <td data-hora="10:00 - 11:00" data-dia="Miércoles"></td>
          <td data-hora="10:00 - 11:00" data-dia="Jueves"></td>
          <td data-hora="10:00 - 11:00" data-dia="Viernes"></td>
          <td data-hora="10:00 - 11:00" data-dia="Sábado"></td>
          <td data-hora="10:00 - 11:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>11:00 - 12:00</td>
          <td data-hora="11:00 - 12:00" data-dia="Lunes"></td>
          <td data-hora="11:00 - 12:00" data-dia="Martes"></td>
          <td data-hora="11:00 - 12:00" data-dia="Miércoles"></td>
          <td data-hora="11:00 - 12:00" data-dia="Jueves"></td>
          <td data-hora="11:00 - 12:00" data-dia="Viernes"></td>
          <td data-hora="11:00 - 12:00" data-dia="Sábado"></td>
          <td data-hora="11:00 - 12:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>12:00 - 13:00</td>
          <td data-hora="12:00 - 13:00" data-dia="Lunes"></td>
          <td data-hora="12:00 - 13:00" data-dia="Martes"></td>
          <td data-hora="12:00 - 13:00" data-dia="Miércoles"></td>
          <td data-hora="12:00 - 13:00" data-dia="Jueves"></td>
          <td data-hora="12:00 - 13:00" data-dia="Viernes"></td>
          <td data-hora="12:00 - 13:00" data-dia="Sábado"></td>
          <td data-hora="12:00 - 13:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>13:00 - 14:00</td>
          <td data-hora="13:00 - 14:00" data-dia="Lunes"></td>
          <td data-hora="13:00 - 14:00" data-dia="Martes"></td>
          <td data-hora="13:00 - 14:00" data-dia="Miércoles"></td>
          <td data-hora="13:00 - 14:00" data-dia="Jueves"></td>
          <td data-hora="13:00 - 14:00" data-dia="Viernes"></td>
          <td data-hora="13:00 - 14:00" data-dia="Sábado"></td>
          <td data-hora="13:00 - 14:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>14:00 - 15:00</td>
          <td data-hora="14:00 - 15:00" data-dia="Lunes"></td>
          <td data-hora="14:00 - 15:00" data-dia="Martes"></td>
          <td data-hora="14:00 - 15:00" data-dia="Miércoles"></td>
          <td data-hora="14:00 - 15:00" data-dia="Jueves"></td>
          <td data-hora="14:00 - 15:00" data-dia="Viernes"></td>
          <td data-hora="14:00 - 15:00" data-dia="Sábado"></td>
          <td data-hora="14:00 - 15:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>15:00 - 16:00</td>
          <td data-hora="15:00 - 16:00" data-dia="Lunes"></td>
          <td data-hora="15:00 - 16:00" data-dia="Martes"></td>
          <td data-hora="15:00 - 16:00" data-dia="Miércoles"></td>
          <td data-hora="15:00 - 16:00" data-dia="Jueves"></td>
          <td data-hora="15:00 - 16:00" data-dia="Viernes"></td>
          <td data-hora="15:00 - 16:00" data-dia="Sábado"></td>
          <td data-hora="15:00 - 16:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>16:00 - 17:00</td>
          <td data-hora="16:00 - 17:00" data-dia="Lunes"></td>
          <td data-hora="16:00 - 17:00" data-dia="Martes"></td>
          <td data-hora="16:00 - 17:00" data-dia="Miércoles"></td>
          <td data-hora="16:00 - 17:00" data-dia="Jueves"></td>
          <td data-hora="16:00 - 17:00" data-dia="Viernes"></td>
          <td data-hora="16:00 - 17:00" data-dia="Sábado"></td>
          <td data-hora="16:00 - 17:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>17:00 - 18:00</td>
          <td data-hora="17:00 - 18:00" data-dia="Lunes"></td>
          <td data-hora="17:00 - 18:00" data-dia="Martes"></td>
          <td data-hora="17:00 - 18:00" data-dia="Miércoles"></td>
          <td data-hora="17:00 - 18:00" data-dia="Jueves"></td>
          <td data-hora="17:00 - 18:00" data-dia="Viernes"></td>
          <td data-hora="17:00 - 18:00" data-dia="Sábado"></td>
          <td data-hora="17:00 - 18:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>18:00 - 19:00</td>
          <td data-hora="18:00 - 19:00" data-dia="Lunes"></td>
          <td data-hora="18:00 - 19:00" data-dia="Martes"></td>
          <td data-hora="18:00 - 19:00" data-dia="Miércoles"></td>
          <td data-hora="18:00 - 19:00" data-dia="Jueves"></td>
          <td data-hora="18:00 - 19:00" data-dia="Viernes"></td>
          <td data-hora="18:00 - 19:00" data-dia="Sábado"></td>
          <td data-hora="18:00 - 19:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>19:00 - 20:00</td>
          <td data-hora="19:00 - 20:00" data-dia="Lunes"></td>
          <td data-hora="19:00 - 20:00" data-dia="Martes"></td>
          <td data-hora="19:00 - 20:00" data-dia="Miércoles"></td>
          <td data-hora="19:00 - 20:00" data-dia="Jueves"></td>
          <td data-hora="19:00 - 20:00" data-dia="Viernes"></td>
          <td data-hora="19:00 - 20:00" data-dia="Sábado"></td>
          <td data-hora="19:00 - 20:00" data-dia="Domingo"></td>
        </tr>
        <tr>
          <td>20:00 - 21:00</td>
          <td data-hora="20:00 - 21:00" data-dia="Lunes"></td>
          <td data-hora="20:00 - 21:00" data-dia="Martes"></td>
          <td data-hora="20:00 - 21:00" data-dia="Miércoles"></td>
          <td data-hora="20:00 - 21:00" data-dia="Jueves"></td>
          <td data-hora="20:00 - 21:00" data-dia="Viernes"></td>
          <td data-hora="20:00 - 21:00" data-dia="Sábado"></td>
          <td data-hora="20:00 - 21:00" data-dia="Domingo"></td>
        </tr>
        
      </tbody>
    </table>
  </div>
  </div>
  <script>
  document.addEventListener('DOMContentLoaded', function(){
    var semanaSpan = document.getElementById('semana');

    // Obtener la fecha actual
    var fechaActual = new Date();

    // Obtener la fecha de inicio de la semana
    var inicioSemana = getStartOfWeek(fechaActual);
    // Obtener la fecha de fin de la semana
    var finSemana = getEndOfWeek(fechaActual);

    // Mostrar la semana actual en el elemento span
    semanaSpan.textContent = "Semana del " + inicioSemana.toLocaleDateString() + " al " + finSemana.toLocaleDateString();
  });

  // Función para obtener la fecha de inicio de la semana
  function getStartOfWeek(date) {
    var startOfWeek = new Date(date);
    startOfWeek.setDate(date.getDate() - date.getDay() + 1); // Lunes
    return startOfWeek;
  }

  // Función para obtener la fecha de fin de la semana
  function getEndOfWeek(date) {
    var endOfWeek = new Date(date);
    endOfWeek.setDate(date.getDate() - date.getDay() + 7); // Domingo
    return endOfWeek;
  }
</script>

</body>
</html>
