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

        //Zadatak pod a
        function ucitavanje(){
            $tekst = $_GET["tekst"];
            $n = explode (" ", $tekst);
            return $n;
        }

        
        //Zadatak pod b
        function tri_parna($niz){
            $ima = false;
            $brojac=0;
            foreach($niz as $broj){
                if($broj%2==0){
                    $brojac++;
                    if($brojac>=3){
                        $ima=true;
                    }
                }
            }
            return $ima;
        }


        //Zadatak pod c
        function manji_od_hiljadu($niz){
            $ima = true;
            foreach($niz as $broj){
                if($broj > 1000){
                    $ima = false;
                }
            }
            return $ima;
        }
        

        //Zadatak pod d

        $niz = ucitavanje();
        echo "Niz je".join(" ",$niz)."<br>";

        $parni = tri_parna($niz);
        var_dump($parni);
        echo "<br>";

        $manji = manji_od_hiljadu($niz);
        var_dump($manji);



    ?>
</body>
</html>