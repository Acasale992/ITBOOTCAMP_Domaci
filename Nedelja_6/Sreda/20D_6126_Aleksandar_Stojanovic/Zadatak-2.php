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
        function createSpans($a){
            $div = "<div>";
            for($i=1; $i<=$a; $i++){
                $div .= "<span>$i</span>";
            }
            $div .= "</div>";
            return $div;
        }

        $s= createSpans(6);
        echo $s;

        
    ?>
</body>
</html>