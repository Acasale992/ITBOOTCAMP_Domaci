<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3</title>
</head>
<body>
    <?php

        $s= " ";
        for ($i=30; $i<=99; $i++){
            $prva_cifra = substr ($i, 0, 1);
            $druga_cifra = substr ($i, 1);
            if ($prva_cifra % 3 == 0 OR $druga_cifra % 4 == 0)
                continue;

            $s.="$i, ";
        }
        echo "Brojevi od 30 do 99 čija prva cifra nije deljiva sa 3, a druga 4 su: $s<br/>";

    ?>
</body>
</html>