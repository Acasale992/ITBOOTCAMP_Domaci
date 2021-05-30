<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
</head>
<body>
    <?php
        $stringovi = ["potop", "buducnost", "lul", "nije", "ana", "subota"];

        function palindrom($niz){
            foreach ($niz as $rec)
                if($rec === strrev($rec))
                    echo "$rec, ";
        }

        palindrom($stringovi);        

    ?>
</body>
</html>