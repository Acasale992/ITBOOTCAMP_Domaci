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
            echo "<div>";
            for($i=1; $i<=$a; $i++){
                echo "<span>$i</span>";
            }
            echo "</div>";
        }

        createSpans(6);

        
    ?>
</body>
</html>