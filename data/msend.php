<?php

$empfaenger = "steveshadow70@gmail.com";


$vorname = $_POST['vorname'];
$name = $_POST['name'];
$email = $_POST['email'];
$nachricht = $_POST['nachricht'];

 $betreff = "Optik Tack Kontaktaufnahme"  ;


mail($empfaenger, $betreff, "Neue Nachricht von:" ."\r\n" ."\r\n".$vorname." " .$name  ."\r\n"."\r\n"."E-mail: " .$email ."\r\n" ."\r\n"."\r\n"."Nachricht: "."\r\n"."\r\n".$nachricht  );

//header("HTTP/1.1 301 Moved Permanently");

header("location:../index.php?mail=send");

//exit;



?>