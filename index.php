<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hlavný nadpis</h1>
    <?php
        echo "Výpis";
        // echo 'Výpis';
        // echo ("Výpis");
            $meno = "Peter";
            echo "$meno <br>";
            echo "$meno <br>";
            echo $meno."<br>";
            //var_dump
            var_dump($meno);

            //POLIA
            $farby = array("červená","modrá","zelená"); //INDEXOVANE POLIA
            echo $farby [0]; //Vypíše: červená
            echo("<br>");

            foreach($farby as $farba){
                echo "Farba: ". $farba. "<br>";
            }
            foreach($farby as $farba){
            }
            //python dictionary  kluc : hodnota
            $data = array("Peter" => 25,
                      "Jana" => 30,
                      "Marek" => 20 
                    );
            foreach($data as $name => $age){
                echo "$name má $age rokov <br>";
            }

            // komentár
            $futbal = array("lopta","offside","goal");
            echo("<br>");

            foreach($futbal as $football){
                echo "Football: ". $football. "<br>";
            }
            
    ?>
</body>
</html>