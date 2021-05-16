<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP zadatka 2</title>
</head>
<body>
    <?php
        $ime_i_prezime = $_POST ['input'];

        $prvi_inicijal = substr ($ime_i_prezime, 0, 1);
        $drugi_inicijal = strpos ($ime_i_prezime, " ");
        $drugi_inicijal2 = $drugi_inicijal + 1;
        $drugi_inicijal3 = substr ($ime_i_prezime, $drugi_inicijal2, 1);

        echo "$prvi_inicijal.$drugi_inicijal3.";
    ?>
</body>
</html>