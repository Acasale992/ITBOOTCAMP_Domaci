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
        $niz = [2, 4, 6, 8];

        function nema_nule($niz){
            $nema = true;
            foreach($niz as $broj){
                if($broj == 0){
                    $nema = false;
                }
            }
            return $nema;
        }

        $nule = nema_nule($niz);
        var_dump($nule);

    ?>
</body>
</html>