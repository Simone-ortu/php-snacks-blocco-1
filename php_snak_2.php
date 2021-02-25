<?php
$name = $_GET['name']; 
$mail = $_GET['mail'];
$age = $_GET['age']

if(empty($nome) || empty($email) || empty($eta)){
    $message = 'Prego, inserire i dati richiesti';
} elseif(strlen($nome) >= 3 && strlen($email) >= 3 && is_numeric($eta)){
    if(strpos($email, '@')  && strpos($email, '.')){
        $message = 'Accesso riuscito';
    }


?>