<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require("archivoJSON.php");
            
            $datos = json_decode($miJson, true);
            for ($i=0; $i< 140; $i++){
                echo $i+1 .' ';
                print_r ($datos["sections"]["question"][$i]["questionData"][0]["data"]);
                echo '<br>';echo '<br>';
                                print_r ($datos["sections"]["question"][$i]["choiceData"][0]["data"][0]["data"]);
                echo '<br>';echo '<br>';
                                print_r ($datos["sections"]["question"][$i]["choiceData"][1]["data"][0]["data"]);
                echo '<br>';echo '<br>';
                                print_r ($datos["sections"]["question"][$i]["choiceData"][2]["data"][0]["data"]);
                echo '<br>';echo '<br>';
                                print_r ($datos["sections"]["question"][$i]["choiceData"][3]["data"][0]["data"]);
                echo '<br>';echo '<br>';
                                print_r ($datos["sections"]["question"][$i]["choiceData"][4]["data"][0]["data"]);
                echo '<br>';echo '<br>';
                                print_r ($datos["sections"]["question"][$i]["choiceData"][5]["data"][0]["data"]);
                echo '<br>';echo '<br>';
                print_r ($datos["sections"]["question"][$i]["hints"][0]["data"]);
                echo '<br>';echo '<br>';
            }
        ?>
    </body>
</html>
