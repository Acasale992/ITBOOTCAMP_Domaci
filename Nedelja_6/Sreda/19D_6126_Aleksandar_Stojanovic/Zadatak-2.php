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
        $number = mt_rand(1, 64);

        echo "Broj je: $number<br/>";

        $block = 1;

        echo "<table>";
        for($i = 0; $i < 8; $i++){
            $row = "<tr>";
            for($o = 0; $o < 8; $o++){
                if($block == $number){
                    $row .= "<td style='background-color: black; width: 30px; height: 30px; border: 1px solid;'></td>";
                } else {
                    $row .= "<td style='width: 30px; height: 30px; border: 1px solid;'></td>";
                }
                $block++;
            }
            $row .= "</tr>";
            echo $row;
        }

    ?>
</body>
</html>