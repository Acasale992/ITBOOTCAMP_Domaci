<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 5 za vezbu</title>
</head>
<body>
    <?php
        $boje = ["green", "blue", "yellow"]; 
        $reci = ["sto", "stolica", "mobilni"]; 

        function span1($b, $r){
            foreach($b as $in=>$el){
                echo "<span style='color:$b[$in]'>$r[$in]</span>";
            }
        }
        
        span1($boje,$reci);

    ?>
</body>
</html>