<?php
    $promenljiva1 = 200;
    $promenljiva2 = 80;
    $zbir = $promenljiva1 + $promenljiva2;
    $količnik = $promenljiva1 / $promenljiva2;
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
    <?php   
        echo $promenljiva1 * $promenljiva2;
    ?><br />
    <?=($promenljiva1 - $promenljiva2)?><br />
    <?php 
        echo "$zbir"
    ?><br />
    <?=$količnik?>

</body>
</html>
