$(document).ready(function() {
  $('#table_id').DataTable({
      "language": {
          "lengthMenu": "Mostrar _MENU_ registros por página",
          "zeroRecords": "No se encontraron resultados",
          "info": "Mostrando página _PAGE_ de _PAGES_",
          "infoEmpty": "No hay registros disponibles",
          "infoFiltered": "(filtrado de _MAX_ registros totales)",
          "search": "Buscar:",
          "paginate": {
              "first": "Primero",
              "last": "Último",
              "next": "Siguiente",
              "previous": "Anterior"
          }
      }
  });
  
  // Manejar el envío del formulario
  $('form').submit(function(e) {
      e.preventDefault();
      
      const fechaInicial = $('#fecha_inicial').val();
      const fechaFinal = $('#fecha_final').val();
      const metodoPago = $('#metodo_pago').val();
      
      // Hacer la petición AJAX al servidor
      $.ajax({
          url: '/reporte',
          type: 'GET',
          data: {
              fechaInicial: fechaInicial,
              fechaFinal: fechaFinal,
              metodoPago: metodoPago
          },
          success: function(data) {
              // Actualizar la tabla con los nuevos datos
              const table = $('#table_id').DataTable();
              table.clear();
              
              // Suponiendo que la respuesta es un array de objetos
              data.forEach(function(transaccion) {
                  table.row.add([
                      transaccion.id,
                      transaccion.fare, // Afluencia (podría ser fare)
                      transaccion.idEquipment, // Código de equipo
                      transaccion.idStation, // Estación (necesitarías un servicio para mapear ID a nombre)
                      'Línea ' + (transaccion.idStation % 3 + 1), // Ejemplo de línea
                      new Date(transaccion.transactionDate).getDate(), // Día
                      new Date(transaccion.transactionDate).getMonth() + 1, // Mes
                      new Date(transaccion.transactionDate).getFullYear() // Año
                  ]);
              });
              
              table.draw();
          },
          error: function(error) {
              console.error('Error al obtener datos:', error);
          }
      });
  });
});w