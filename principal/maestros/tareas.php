<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Verifica si se ha recibido la tarjetaHTML
  if (isset($_POST["tarjetaHTML"])) {
    $tarjetaHTML = $_POST["tarjetaHTML"];

    // Abre el archivo "maestrias.html" en modo de escritura
    $archivo = fopen("../paginas/videos.html", "a");

    // Verifica si se pudo abrir el archivo correctamente
    if ($archivo) {
      // Escribe la tarjetaHTML en el archivo
      fwrite($archivo, $tarjetaHTML);

      // Cierra el archivo
      fclose($archivo);

      // Retorna una respuesta exitosa
      http_response_code(200);
      echo "Tarjeta agregada correctamente.";
      exit;
    } else {
      // Retorna un error en caso de que no se pueda abrir el archivo
      http_response_code(500);
      echo "Error al abrir el archivo.";
      exit;
    }
  }
}
?>
