<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $ganador = htmlspecialchars($_POST['ganador']);
    
    $to = 'preza7528@gmail.com'; // Reemplaza con la dirección de correo a la que quieres enviar los datos
    $subject = 'Nueva Apuesta';
    $message = "Nombre: $nombre\nGanador elegido: $ganador";
    $headers = "From: no-reply@tusitio.com"; // Puedes cambiarlo si tienes una dirección de correo para enviar
    
    if (mail($to, $subject, $message, $headers)) {
        echo "La apuesta ha sido enviada con éxito.";
    } else {
        echo "Hubo un error al enviar la apuesta.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
