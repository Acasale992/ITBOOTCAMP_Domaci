<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .crveni {
        color: red;
    }
    .zeleni {
        color: green;
    }
    </style>
</head>
<body>
    <?php
        $niz = ["priroda", "pejzaz", "oko", "nas", "svet", "word5"];

        function span($niz){
            foreach ($niz as $rec){
                if(strlen($rec)<5)
                echo "<span class='crveni'>$rec, </span>";
                elseif(strlen($rec)>5)
                echo "<span class='zeleni'>$rec, </span>";
                else
                echo "<span>$rec, </span>";
            }    
        }

        span($niz);
    ?>
</body>
</html>