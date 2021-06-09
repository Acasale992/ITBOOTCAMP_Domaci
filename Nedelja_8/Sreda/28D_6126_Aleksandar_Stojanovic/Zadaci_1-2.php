<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadaci 1 i 2</title>
</head>
<body>
    <?php
        //27D Zadatak 1 

        class Krevet{

            public $duzina, $sirina, $materijal;
            // private $cena;
            protected $cena;

            function __construct($duzina, $sirina, $materijal, $cena){
                $this->duzina = $duzina;
                $this->sirina = $sirina;
                $this->materijal = $materijal;
                $this->cena = $cena;
            }

            public function citanje_cene(){  
                return $this->cena;
            }

            function __ToString(){
                return "Krevet je duzine ".$this->duzina." cm i sirine ".$this->sirina." cm napravljen od ".$this->materijal." po ceni ".$this->cena." dinara";
            }

            function popust($popust){ //-----------> zadatak 3
                $this->cena = $this->cena - ($this->cena*($popust/100));
                return $this->cena;
            }

        }

        //27D Zadatak 2

        // $krevet1 = new Krevet(200,100,"drvo",30000);
        // $krevet2 = new Krevet(180,80,"metal",20000);

        // $cena_kreveta1 = $krevet1->citanje_cene();
        // $cena_kreveta2 = $krevet2->citanje_cene();

        // if($cena_kreveta1>$cena_kreveta2)
        //     echo $krevet1;
        // else
        //     echo $krevet2;
        
        // //27D Zadatak 3

        // echo "<br>";
        // $krevet3 = new Krevet(210,90,"plastika",10000);
        // echo $krevet3;
        // echo "<br>";
        // $krevet3->popust(10);
        // echo $krevet3;

        //28D Zadatak 1

        class Baldahin extends Krevet{

            public $visina, $cena_baldahina;

            function __construct($duzina, $sirina, $materijal, $cena, $visina, $cena_baldahina){
                parent::__construct($duzina, $sirina, $materijal, $cena);
                $this->visina = $visina;
                $this->cena_baldahina = $cena_baldahina;
            }

            //28D Zadatak 2
            function __ToString(){
                return "Cena kreveta bez baldahina je ".$this->cena.", a cena sa baldahinom ".$this->cena+$this->cena_baldahina." dinara";
            }
        }

        $extra_krevet = new Baldahin(250, 220, "drvo", 50000, "2m", 9999);
        echo "<br>";
        echo $extra_krevet;
    ?>
</body>
</html>