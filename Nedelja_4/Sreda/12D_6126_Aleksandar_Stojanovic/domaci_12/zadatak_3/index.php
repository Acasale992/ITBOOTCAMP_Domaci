<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3</title>
</head>
<body>
    <?php
        $broj1 = mt_rand(1,10);
        $broj2 = mt_rand(1,10);        
        $broj3 = mt_rand(1,10);

        $kvadrat1 = pow($broj1,2);
        $kvadrat2 = $broj2 ** 2;
        $kvadrat3 = $broj3 * $broj3;

        echo "
            <table style='border: 2px solid black;'>
                <tr>
                    <td>$broj1</td>
                    <td>$kvadrat1</td>
                </tr>
                <tr>
                    <td>$broj2</td>
                    <td>$kvadrat2</td>
                </tr>
                <tr>
                    <td>$broj3</td>
                    <td>$kvadrat3</td>
                </tr>
            </table>";
        ?>
</body>
</html>