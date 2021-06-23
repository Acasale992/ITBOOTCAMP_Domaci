<?php 

    class Baza {
        public $conn;

        function __construct($baza) {
            $this->conn = new mysqli('localhost', 'root', '', $baza);

            if ($this->conn->connect_error) {
                die('Greska: ' . $this->conn->connect_error);
            } else {
                echo 'Konektovan!';
            }
        }

        function izvrsi_select($upit) {
            $podaci = $this->conn->query($upit);
            if ($podaci === false) {
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            } else {
                return $niz = $podaci->fetch_all(MYSQLI_ASSOC);
              
            }
        }

        function izvrsi_upit($upit) {
            $odg = $this->conn->query($upit);
            if($odg === false) {
                die('Nije izvrsen upit: ' . $this->conn->error);
            } else {
                echo "Uspesno izvrsen upit!";
            }
        }


        function daj_proizvode() {
            $proizvodi = $this->izvrsi_select("SELECT * FROM proizvodi");
            return $proizvodi;
        }

        function daj_proizvod($id) {
            $proizvod = $this->izvrsi_select("SELECT * FROM proizvodi WHERE id=$id");
            return $proizvod[0];
        }
        
    }

    $b = new Baza('korpa');


?>