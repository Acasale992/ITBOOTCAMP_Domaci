<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaci 13, zadatak 2</title>
</head>
<body>
    <?php
        $broj1 = mt_rand (1,100);
        $broj2 = mt_rand (1,100);
        $broj3 = mt_rand (1,100);

        echo "Brojevi su: $broj1,$broj2,$broj3<br /><br />";
        echo "Isti brojevi poređani po rastućem redosledu: ";

        if($broj1 > $broj2 AND $broj1 > $broj3 AND $broj2 > $broj3){
            echo "$broj3,$broj2,$broj1";
        }elseif($broj1 > $broj2 AND $broj1 > $broj3 AND $broj3 > $broj2){
            echo "$broj2,$broj3,$broj1";
        }elseif ($broj2 > $broj1 AND $broj2 > $broj3 AND $broj1 > $broj3){
            echo "$broj3,$broj1,$broj2";
        }elseif ($broj2 > $broj1 AND $broj2 > $broj3 AND $broj3 > $broj1){
            echo "$broj1,$broj3,$broj2";
        }elseif ($broj3 > $broj1 AND $broj3 > $broj2 AND $broj1 > $broj2){
            echo "$broj2,$broj1,$broj3";
        }elseif ($broj3 > $broj1 AND $broj3 > $broj2 AND $broj2 > $broj1){
            echo "$broj1,$broj2,$broj3";
        }
    ?>
</body>
</html>