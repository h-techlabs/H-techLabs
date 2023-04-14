<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST['nombre']));
    $email = filter_var(trim($_POST["email"]));
    $msg = strip_tags(trim($_POST["msg"]));


   $recipient = "josehernandez01092006@gmail.com";
   $subject = "Contacto de HtechLabs de $name";

   $email_content = "Nombre: $name\n";
   $email_content .= "Emai: $email\n\n";
   $email_content .= "Mensaje: \n$msg\n";

   $headers = "From: $name <$email>";

   mail($recipient, $subject, $email_content, $headers);

   header("Location: finish-contact.html");
} else {
    http_response_code(403);
    echo "Ha habido un error";
    exit;
}









?>