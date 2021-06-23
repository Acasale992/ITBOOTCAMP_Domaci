<?php 

    include_once('klasa_korpa.php');
    include_once('baza.php');

    if(isset($_GET['akcija']) && $_GET['akcija'] == 'dodaj') {
        $id = $_GET['id_proizvoda'];
        $proizvod = $k->daj_proizvod($id);
        $k->dodaj_proizvod($id, $proizvod['naziv'], $proizvod['cena'], 1);
        $k->prikazi();
    }


?>