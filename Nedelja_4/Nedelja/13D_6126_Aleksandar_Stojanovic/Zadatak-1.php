<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Zadatak 1a</title>
</head>
<body>
    <div>Zadatak 1a:<br />
    <?php
        $broj1 = mt_rand (1,100);
        $broj2 = mt_rand (1,100);

        if ($broj1 > $broj2) {
            echo "<span style=color:green>$broj1</span><br />";
        }else {
            echo "<span style=color:red>$broj1</span><br />";
        }
        if ($broj2 > $broj1) {
            echo "<span style=color:green>$broj2</span>";
        }else {
            echo "<span style=color:red>$broj2</span>";
        }
    ?>
    </div><br />
    <div>Zadatak 1b:<br />
    <style>
    .zelena {
        color:green;
    }
    .crvena {
        color: red;
    }
    </style>
    <?php
        $broj1 = mt_rand (1,100);
        $broj2 = mt_rand (1,100);  
        $boja = "zelena";
        $boja1 = "crvena"; 
        
        if($broj1 > $broj2){
            echo "<p class='$boja'>$broj1</p>";
            echo "<p class='$boja1'>$broj2</p>";
        }else {
            echo "<p class='$boja1'>$broj1</p>";
            echo "<p class='$boja'>$broj2</p>";
        }
    ?>
    </div>
</body>
</html>