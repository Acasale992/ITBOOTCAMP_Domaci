<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td{
        width: 30px;
        height:30px;
        border:1px solid black;
    }
    </style>
</head>
<body>
    <?php
        $broj = mt_rand (1,64);

        echo $broj;

        echo "<table>";
        for($i=1; $i<9; $i++){
            echo "<tr>";
            for($j = 1; $j<9; $j++){
                if($broj==($i*$j)){
                echo "<td style='background: black'></td>";
                }else{
                echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";



    
    ?>
</body>
</html>