$(document).ready(function() {
    // Selecciona el formulario por su ID
    var tarjetaForm = $("#tarjetaForm");
  
    // Escucha el evento de envío del formulario
    tarjetaForm.submit(function(event) {
      event.preventDefault(); // Evita que el formulario se envíe de forma tradicional
  
      // Obtiene los valores de los campos del formulario
      var titulo = $("#titulo").val();
      var imagen = $("#imagen").val();
      var descripcion = $("#descripcion").val();
      var urlpdf = $("#urlpdf").val();
  
      // Crea la tarjeta HTML con los valores ingresados
      var tarjetaHTML = `
        <div class="col-md-4">
          <div class="card">
            <img src="${imagen}" class="card-img-top" alt="${titulo}">
            <div class="card-body  gris">
              <h5 class="card-title  doradoTexto">${titulo}</h5>
              <p class="card-text">${descripcion}</p>
              <form action="${urlpdf}">
                <button class="btn dorado blancoTexto">Abrir PDF</a>
              </form>
            </div>
          </div>
        </div>
      `;
  
      // Envía la tarjeta al archivo "tareas.php" utilizando AJAX
      $.ajax({
        url: "pdf.php",
        method: "POST",
        data: { tarjetaHTML: tarjetaHTML },
        success: function(response) {
          console.log("Tarjeta agregada correctamente.");
        },
        error: function(xhr, status, error) {
          console.error("Error al agregar la tarjeta:", error);
        }
      });
    });
  });
  