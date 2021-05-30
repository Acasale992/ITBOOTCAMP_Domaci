<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 1</title>
</head>
<body>
    <?php
    
        function niz($a,$b){
            $n= [];
            for($i=0; $i<10; $i++)
                $n[$i]=mt_rand($a,$b);
            return $n;
        }

        $niz = niz(50,150);
        print_r($niz);
        echo "<br><br>";

        function brojevi($n){
            $dvocifreni=0;
            $trocifreni=0;
            for($i=0; $i<count($n); $i++){
                if($n[$i]<100)
                    $dvocifreni++;
                else
                    $trocifreni++;
            }
            if($dvocifreni>$trocifreni)
                echo "Ima više dvocifrenih brojeva";
            elseif($trocifreni>$dvocifreni)            
                echo "Ima više trocifrenih brojeva";
            else
                echo "Broj je jednak";
        }

        brojevi($niz);

    ?>
</body>
</html>