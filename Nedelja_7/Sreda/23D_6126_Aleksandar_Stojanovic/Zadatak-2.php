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
        function napravi_niz(){
            $niz=[];
            $duzina = 5;
            for($i=0; $i<$duzina; $i++){
                $niz[$i]=mt_rand (10,20);
            }
            return $niz;
        }

        $niz = napravi_niz();
        echo "Niz je: ".join(", ", $niz)."<br>";

        function iznad_proseka($postojeci_niz){
            $novi_niz = [];
            $zbir=0;
            foreach($postojeci_niz as $broj){
                $zbir += $broj;
            }
            $prosek = ($zbir/count($postojeci_niz));
            foreach($postojeci_niz as $broj){
                if ($broj > $prosek){
                    array_push($novi_niz,$broj);
                }  
            }
            return $novi_niz;
        }    
        
        $novi_niz=iznad_proseka($niz);
        echo "Brojevi veći od aritmetičke sredine niza su: ".join(", ",$novi_niz);    
    ?>
</body>
</html>