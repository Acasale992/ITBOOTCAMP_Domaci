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
        $prvi_broj = $_GET ['1'];
        $drugi_broj = $_GET ['2'];
        $treci_broj = $_GET ['3'];
        $cetvrti_broj = $_GET ['4'];

        // echo "$prvi_broj, $drugi_broj, $treci_broj, $cetvrti_broj<br/>";

        if ($drugi_broj>$prvi_broj AND $cetvrti_broj>$treci_broj){
                $zbir = 0;
                for ($i=$prvi_broj; $i<=$drugi_broj; $i+=1){
                    if ($i % 4 == 0){
                        $zbir += $i; 
                    }
                }
                $zbir1 = 0;
                for ($e=$treci_broj; $e<=$cetvrti_broj; $e+=1){
                    if ($e % 3 == 0){
                        $zbir1 += $e;
                    }
                }
        }else{
            die ("Uslov nije ispunjen.");
        }
        
        if ($zbir>$zbir1){
            echo "Prvi zbir ($zbir) je veći od drugog zbira ($zbir1).";
        }else{
            echo "Drugi zbir ($zbir1) je veći od prvog zbira ($zbir).";
        }
    ?>
</body>
</html>