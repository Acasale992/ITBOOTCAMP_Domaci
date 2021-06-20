<?php
    class Baza{
        public $conn;

        function __construct($baza){
            $this->conn = new mysqli('localhost', 'root', '', $baza);

            if ($this->conn->connect_error)
                die('Greska: '. $this->conn->connect_error);
            else
                echo 'Povezivanje uspesno!';
        }

        function izvrsi_select($upit){
            $podaci = $this->conn->query($upit);
            if($podaci === false)
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            else{
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'niz'=>$niz];
            }
        }    

        function prikazi_destinacije(){
            $r = $this->izvrsi_select("select `drzava`, `grad`, `datum_polaska`, `datum_povratka` from putovanja join destinacije on destinacije.id=putovanja.id_destinacija");
            if ($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die ("neuspesan upit:".$r['poruka']);
            }
        }

        function prikazi_putnike(){
            $r = $this->izvrsi_select("select `ime_prezime`, `putovanje`, `datum_polaska`, `datum_povratka` from (`spisak_putnika` JOIN `putovanja` ON `spisak_putnika`.`putovanje`=`putovanja`.`id`)
            JOIN `putnici` ON `spisak_putnika`.`br_pasosa`=`putnici`.`br_pasosa`");
            if ($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die ("neuspesan upit:".$r['poruka']);
            }
        }

        function otkazi_rezervaciju($broj_pasosa){
            $this->conn->query("delete from spisak_putnika WHERE br_pasosa=$broj_pasosa");
        }

    }

    $b = new Baza('agencija');
    echo "<br><br>";

    $selekt = $b->izvrsi_select("select * from putnici");
    print_r($selekt);
    echo "<br><br>";

    $destinacije = $b->prikazi_destinacije();
    echo "<table border=1>";
    foreach($destinacije as $red){
        echo "<tr>";
        foreach($red as $val)
            echo '<td>'.$val.'</td>';
        echo "<tr>";
    }
    echo "<table>";
    echo "<br><br>";

    $putnici = $b->prikazi_putnike();
    echo "<table border=1>";
    foreach($putnici as $red){
        echo "<tr>";
        foreach($red as $val)
            echo '<td>'.$val.'</td>';
        echo "<tr>";
    }
    echo "<table>";
    echo "<br><br>";

    $otkazivanje = $b->otkazi_rezervaciju(33);





?>