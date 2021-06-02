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
        $niz = ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>28];

        function domaci($niz){
            $max = max($niz);
            $min = min($niz);
            $in = array_search($max,$niz);
            echo "Najuspešniji dan je $in<br/>";

            $zbir = 0;
            foreach($niz as $uspeh) {
                $zbir += $uspeh;
                $prosek = $zbir / count($niz);
            }

            echo "Prosek je  $prosek";
            echo "<br/>";
            
            $razlika = $max - $min;
            echo "Razlika je $razlika";
        }

        echo domaci($niz);
    ?>
</body>
</html>