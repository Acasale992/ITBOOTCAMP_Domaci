<head>
    <style>
        div {
            width: 200px;
            display: inline-block;
        }
        img {
            height: 200px;
            width: 200px;
        }
        .crvena {
            color: red;
        }
        .zelena {
            color: green;
        }
    </style>
</head>
<body>
    <?php
        function proizvod($naziv, $slika, $cena, $popust){
            echo "<div>";
            echo "<img src='./slike/$slika'><br>";
            echo "<p>$naziv</p>";
        
            if($popust>0){
                $cena_sa_popustom = $cena - $popust;
                echo "<p class='crvena'>Redovna cena: $cena RSD</p>";
                echo "<p class='zelena'>Sa popustom: $cena_sa_popustom RSD</p>";
            }else
                echo "<p>Redovna cena: $cena RSD<p><br>";
            echo "</div>";
        }

        // proizvod ('a', 22, 333, 5);
    ?>
</body>
</html>