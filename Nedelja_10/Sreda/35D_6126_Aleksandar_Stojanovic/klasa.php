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

        class Baza{
            public $conn;
    
            function __construct($baza){
                $this->conn = new mysqli('localhost', 'root', '', $baza);
                if ($this->conn->connect_error)
                    die('Greska: '. $this->conn->connect_error);
                
                else
                    echo 'Konektovan!';
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

            function id_destinacije($drzava, $grad){
                $r = $this->izvrsi_select("SELECT `id` FROM `destinacije` WHERE `drzava`='$drzava' AND `grad`='$grad' ");
                if($r['uspesno'] == true){
                    return $r['niz'][0]['id'];
                }else{
                    die("Neuspesan upit: ".$r['poruka']);
                }
            }

            function putovanja($id){
                $r = $this->izvrsi_select("SELECT * FROM `putovanja` WHERE `id_destinacija`='$id' ");
                if($r['uspesno'] == true){
                    return $r['niz'];
                }else{
                    die("Neuspesan upit: ".$r['poruka']);
                }
            }

            function otkazivanje($id){
                $r = $this->izvrsi_select("DELETE FROM `spisak_putnika` WHERE `putovanje`='$id' ");
            }

        }

        $b = new Baza('agencija');
        echo "<br><br>";

        $id=$b->id_destinacije('Austrija', 'Bec');

        echo "ID destinacije Beč je ".$id;
        echo "<br><br>";


        $putovanja=$b->putovanja('1');

        echo "Sva putovanja sa ID 1:<br>";
        echo "<table border='1'>";
        foreach($putovanja as $red) {
            echo "<tr>";
            foreach($red as $val)
                echo '<td>'. $val . '</td>';
            echo "</tr>";
        }
        echo "</table>";
        echo "<br><br>";

        $b->otkazivanje("1");
        




    ?>
</body>
</html>