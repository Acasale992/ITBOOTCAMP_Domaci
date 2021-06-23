<?php 
    session_start();

    if(!isset($_SESSION['stavke_korpe'])) {
        $_SESSION['stavke_korpe'] = [];
    }

    class Korpa {
        public $stavke_korpe;

        function __construct() {
            $this->stavke_korpe = $_SESSION['stavke_korpe'];
        }

        function dodaj_proizvod($id, $naziv, $cena, $kolicina) {
            $nasao = false; 
            for($i=0; $i<count($this->stavke_korpe); $i++) {
                if($this->stavke_korpe[$i]['id'] == $id) {
                    $this->promeni_kolicinu($id, $kolicina);
                    $nasao = true;
                    break;
                }
            }
            if($nasao === false) {
                $nova_stavka = ['id'=>$id, 'naziv'=>$naziv, 'cena'=>$cena, 'kolicina'=>$kolicina];
                array_push($this->stavke_korpe, $nova_stavka);
            }
            $_SESSION['stavke_korpe'] = $this->stavke_korpe;
        }

        function prikazi() {
            echo "<pre>" , print_r($this->stavke_korpe, true) , "</pre>";
        }

        function promeni_kolicinu($id, $kol) {
            for($i=0; $i<count($this->stavke_korpe); $i++) {
                if ($this->stavke_korpe[$i]['id'] == $id) {
                    $this->stavke_korpe[$i]['kolicina'] += $kol;
                }
            }
            $_SESSION['stavke_korpe'] = $this->stavke_korpe;
        }

        function obrisi_proizvod($id) {
            for($i=0; $i<count($this->stavke_korpe); $i++) {
                if ($this->stavke_korpe[$i]['id'] == $id) {
                    array_splice($this->stavke_korpe, $i, 1);
                }
            }
            $_SESSION['stavke_korpe'] = $this->stavke_korpe;
        }

    }

    $k = new Korpa();
    //$k->dodaj_proizvod(3, 'Vodka', 2000, 2);
    // $k->dodaj_proizvod(2, 'Viski', 8000, 2);
    // $k->dodaj_proizvod(3, 'Sok', 20, 1);
    // $k->prikazi();
    // $k->promeni_kolicinu(1, 2);
    // $k->obrisi_proizvod(2);
    // $k->prikazi();




?>