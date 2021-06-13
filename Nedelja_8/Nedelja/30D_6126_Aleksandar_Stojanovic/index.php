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
        include "Proizvod.php";
        $grupa = (isset($_GET['grupa']))? $_GET['grupa'] : "";
        $ws->header();
        $ws->meni();
        $lp->prikazi_sve_proizvode($grupa);
        $ws->footer();
        



    ?>
</body>
</html>