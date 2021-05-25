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
        function LargestNumber($a, $b, $c){
            if($a>$b AND $a>$c){
                return "Largest number is $a.";
            }elseif($b>$a AND $b>$c){
                return "Largest number is $b.";
            }elseif($c>$a AND $c>$b){
                return "Largest number is $c.";
            }
        }

        echo LargestNumber (20,7,10);

    ?>
</body>
</html>