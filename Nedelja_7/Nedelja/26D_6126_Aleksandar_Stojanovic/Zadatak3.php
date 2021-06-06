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
            ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
        ];

        //Zadatak 1

        $x = array_map(function($osoba){
            $osoba['godine_staza'] = mt_rand(1, 3);
                return $osoba;
            }, $x); 

        //print_r($x);     

        //Zadatak 2

        uasort($x, function($a, $b){
            if($a['godine_staza']>$b['godine_staza'])
                return 1;
            else
                return -1;
        });

        // print_r($x);

        //Zadatak 3

            
        $max = 0;
        for($i=0; $i<count($x); $i++){
            if($max < $x[$i]['godine_staza'])
                $max = $x[$i]['godine_staza'];
        }
        
        echo "Najveci broj godina staza: ";
        print_r($max);
        echo "<br><br>";

        $najveci_staz = array_filter ($x, function ($osoba){
            if($osoba['godine_staza'] >= 3)
                return true;
            else    
                return false;
        });

        print_r($najveci_staz);
    ?>
</body>
</html>