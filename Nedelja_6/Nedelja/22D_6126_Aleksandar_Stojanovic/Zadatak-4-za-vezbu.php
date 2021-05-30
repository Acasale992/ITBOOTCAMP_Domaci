<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 4 za vezbu</title>
    <style>
        .oznacen{
            background-color: blue;
        }
    </style>
</head>
<body>
    <?php
        $meni = ["Stavka 1", "Stavka 2", "Stavka 3", "Stavka 4"];

        //Zadatak 4 pod a
        function lista($niz, $oznacen){
            echo "<ul>";
            foreach($niz as $ind=>$stavka){
                if($oznacen==$ind)
                    echo "<li class='oznacen'>$stavka</li>";
                else
                    echo "<li>$stavka</li>";
            }
            echo "</ul>";
        }

        lista($meni, 1);

        //Zadatak 4 pod b
        function lista2($niz, $oznacen){
            echo "<ul>";
            foreach($niz as $stavka){
                if($oznacen===$stavka)
                    echo "<li class='oznacen'>$stavka</li>";
                else
                    echo "<li>$stavka</li>";
            }
            echo "</ul>";
        }

        lista2($meni, 'Stavka 3');

    ?>
</body>
</html>