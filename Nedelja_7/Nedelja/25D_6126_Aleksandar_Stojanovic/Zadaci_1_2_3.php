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

        $x = [ 
            ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
            ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
            ['ime'=>"Mina", "godine"=>28, "grad"=>"BG", "pozicija"=>"CFO"]];        

        // Zadatak 1

        array_push ($x, ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"], 
                        ['ime'=>"Stevan", "godine"=>55, "grad"=>"BG", "pozicija"=>"serviser"],
                        ['ime'=>"Jelena", "godine"=>45, "grad"=>"BG", "pozicija"=>"menadzer"], 
                        ['ime'=>"Marko", "godine"=>35, "grad"=>"NS", "pozicija"=>"programer"],
                    );
        
        echo "Niz sa dodate 4 osobe:<br><br>";
        print_r($x);     
        echo "<br><br>";
        
        // zadatak 2

        function programeri($niz){
            for($i=0; $i<count($niz); $i++){
                if($niz[$i]['pozicija'] == 'programer'){
                    echo "<span>".$niz[$i]['ime'].", </span>";
                }
            }
        }

        echo "Programeri su: ";programeri($x);
        echo "<br><br>";

        // zadatak 3

        function podaci($x, $osoba){
            $osobe=[];
            foreach($x as $element){
                if($osoba == $element['ime']){
                    echo join(", ", $element);
                }
                if(stripos($element['ime'], "s") !== false ){
                    array_push($osobe, $element['ime']);
                }
            }
            echo "<p>".join(", ", $osobe)."</p>";
        }

        podaci($x, 'Mina');
        
    ?>
</body>
</html>