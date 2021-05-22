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
    
        $s = 1; 
        $p=0;
        $i = 30;
        while ($s<100000){
            $p = $s;
            $s *=$i;
            $i--; 
        }

        echo "Proizvod prelazi 100.000 sa brojem <span style='color:red'>$s</span><br/>"; 
        echo "Poslednje pomnoženi broj je <span style='color:green'>";
        echo $i+1;
        echo "</span>.";

    ?>
</body>
</html>