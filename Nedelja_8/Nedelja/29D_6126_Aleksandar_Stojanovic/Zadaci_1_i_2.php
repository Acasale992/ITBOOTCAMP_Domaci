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

        //Zadatak 1

        class SastojakHrane{
            public $naziv, $mera, $kalorije;

            function __construct($naziv, $mera, $kalorije){
                $this->naziv = $naziv;
                $this->mera = $mera;
                $this->kalorije = $kalorije;
            }

            function promeniMeru($naziv, $nova_mera){
                if($this->naziv == $naziv)
                    $this->mera = $nova_mera;
            }

            function prikazi_sastojak(){
                echo "<p>Naziv sastojka: $this->naziv, mera: $this->mera, kalorije: $this->kalorije</p><br>";
            }

        }

        // $sastojak = new SastojakHrane("sir", "100g", "200kcal");
        // $sastojak->prikazi_sastojak();
        // $sastojak->promeniMeru("sir", "2199g");
        // $sastojak->prikazi_sastojak();


        // Zadatak 2

        class Jelo{
            public $naslov, $opis, $niz_sastojaka;

            function __construct($naslov, $opis, $podaci){
                $this->naslov = $naslov;
                $this->opis = $opis;
                $this->niz_sastojaka = [];

                for($i=0; $i<count($podaci); $i++){
                    $pr = new SastojakHrane($podaci[$i]['naziv'], $podaci[$i]['mera'], $podaci[$i]['kalorije']);
                    array_push($this->niz_sastojaka, $pr);
                }
            }

            function prikazi(){
                echo "<p>Naziv jela: $this->naslov, opis: $this->opis, sastojci: ";
                for($i=0; $i<count($this->niz_sastojaka); $i++)
                $this->niz_sastojaka[$i]->prikazi_sastojak();
                echo "</p>";
            }

            function promeniMeru($naziv, $nova_mera){
                foreach($this->niz_sastojaka as $sastojak){
                    if($sastojak->naziv == $naziv){
                        $sastojak->mera = $nova_mera;
                    }
                }
            }
        }

        $podaci = [
            ["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
            ["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
            ["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
            ["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
        ];
        
        $jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
        $jelo->prikazi();
        echo "=========================================================";
        $jelo->promeniMeru("brasno", "400g");
        $jelo->prikazi();
        



    ?>
</body>
</html>