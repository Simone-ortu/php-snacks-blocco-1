<?php
$matches = [
    [
        'home'=>'Olimpia Milano',
        'visitors'=> 'Cantu',
        'homePoints'=> 55,
        'visitorsPoints'=> 60

    ],
    [
        'home'=>'Olimpia Milano',
        'visitors'=>'Reggiana',
        'homePoints'=>102,
        'visitorsPoints'=> 70
    ],
    [
        'home'=> 'Dinamo Sassari',
        'visitors'=>'VL Pesaro',
        'homePoints'=>99,
        'visitorsPoints'=>74
    ]
    ];
$arrayLenght=count($matches);

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
    <?php for($i =0; $i < $arrayLenght; $i++){
        $home= $matches[$i]['home'];
        $visitors= $matches[$i]['visitors'];
        $homePoints= $matches[$i]['homePoints'];
        $visitorsPoints= $matches[$i]['visitorsPoints'];
        ?>
        <h2><?php echo($home)?>- <?php echo($visitors)?> | <?php echo($homePoints)?> - <?php echo($visitorsPoints)?> </h2>

   <?php } ?>





</body>
</html>