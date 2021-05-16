<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php zadatka 1</title>
</head>
<body>
    <?php
        $ime = $_POST ['ime'];
        $prezime = $_POST ['prezime'];

        $prvi_inicijal = substr ($ime, 0, 1);
        $drugi_inicijal = substr ($prezime, 0, 1);

        echo "Inicijali: $prvi_inicijal.$drugi_inicijal.";
    ?>
</body>
</html>