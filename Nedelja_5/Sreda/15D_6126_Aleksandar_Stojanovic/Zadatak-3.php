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
        $ime1 = "Aleksandar";
        $ime2 = "Mina";

        $duze_ime = duze_ime();
        echo "<p style='color:red'>$duze_ime</p>";

        $krace_ime = krace_ime();
        echo "<p style='color:green'>$krace_ime</p>";
        
        
        function duze_ime(){
            global $ime1, $ime2;
            $duzina1 = strlen ($ime1);
            $duzina2 = strlen ($ime2);
            if ($duzina1 > $duzina2){
                return "$ime1";
            }else {
                return "$ime2";
            }
        }
        
        function krace_ime(){
            global $ime1, $ime2;
            $duzina1 = strlen ($ime1);
            $duzina2 = strlen ($ime2);
            if ($duzina1 > $duzina2){
                return "$ime2";
            }else {
                return "$ime1";
            }
            
        }
        
    ?>
</body>
</html>