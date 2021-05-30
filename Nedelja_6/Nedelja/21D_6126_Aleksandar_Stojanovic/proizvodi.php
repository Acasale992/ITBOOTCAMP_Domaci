<?php
    include_once ('proizvod.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proizvodi</title>
</head>
<body>
    <?php
        proizvod ('Smart bojler', 'bojler.png', 37900, 3000);
        proizvod ('Robot usisivač', 'usisivac.png', 66990, 6600);
        proizvod ('Prečišćivač vazduha', 'preciscivac.png', 13990, 0);
    ?>
</body>
</html>