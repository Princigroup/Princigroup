<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Configurar tu correo de destino
    $destinatario = "tamarapinillos@princigeneralconsulting.com"; // Aquí pones tu correo
    $asunto = "Nuevo mensaje de contacto";

    // Construir el cuerpo del mensaje
    $cuerpo = "Has recibido un nuevo mensaje de contacto:\n\n";
    $cuerpo .= "Nombre: $nombre\n";
    $cuerpo .= "Correo Electrónico: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    // Enviar el correo
    $headers = "From: $email";
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>
