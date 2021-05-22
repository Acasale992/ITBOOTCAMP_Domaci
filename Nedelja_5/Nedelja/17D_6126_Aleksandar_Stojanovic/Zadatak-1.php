<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 1</title>
</head>
<body>
    <?php 
    
        function paragraf(){
            global $span_ime, $span_prezime;
            echo "<p><span>$span_ime</span> <span>$span_prezime</span></p>";
        }
        
        $span_ime = "Aleksandar";
        $span_prezime = "Stojanovic";
        
        $slova_ime = strlen ($span_ime);
        $slova_prezime = strlen ($span_prezime);
        $duzina = $slova_ime + $slova_prezime;
        

        for ($i=1; $i<=$duzina; $i++)
            paragraf ();
    ?>
</body>
</html>