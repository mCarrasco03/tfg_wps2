document.addEventListener('DOMContentLoaded', function(){
    var celdasHoras = document.querySelectorAll('td:empty');
  
    celdasHoras.forEach(function(celda){
        celda.addEventListener('click', function(){
            var hora = celda.dataset.hora;
            var dia = celda.dataset.dia;
            window.location.href = 'formularioReserva1.php?dia=' + dia + '&hora=' + hora;
        });
    });
  });
  

