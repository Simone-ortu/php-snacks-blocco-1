<?php
$mail = $_GET['mail'];
$name = $_GET['name'];
$age = $_GET['age'];
if((empty($nome) || empty($email) || empty($eta))){
    $message = 'Inserire i dati richiesti';
}
elseif(strlen($nome) >= 3 && strlen($email) >= 3 && is_numeric($eta)){
    if(strpos($email, '@')  && strpos($email, '.')){
        $message = 'Accesso riuscito';
    }
}
else{
    $message= 'Accesso negato';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php echo($message)
    ?>
    </div>
</body>
</html>
