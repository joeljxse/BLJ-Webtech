<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autohausverwaltung</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
<?php
    include_once('klassen.php');
    session_start();
    
    
    $autobesitzer=$_SESSION['besitzer'];
    
    

    function db_connect(){
        global $db;
        $db = new mysqli('localhost','root','','webtech');
    }

    function db_close() {
        global $db;
        $db->close();
    }

    function db_write($vorname, $nachname, $autoname){
        global $db;
        $sql = "INSERT INTO autohaus(vorname, nachname, autoname) VALUES ('$vorname','$nachname','$autoname)";
        $db->query($sql);
    }

    function db_read(){
        global $db;
        $sql = "SELECT * FROM autohaus";
        $db->query($sql);

    }
//-------------------------------------------------------------------------------------------------------------------------    
    $vorname=htmlspecialchars($_POST['vorname']);
    $nachname=htmlspecialchars($_POST['nachname']);
    $autoname=htmlspecialchars($_POST['autoname']);

    $autobesitzer[] = new Autobesitzer($vorname, $nachname);
    
    

// Array Version ----------------------------------------------------------------------------------------------------------
      

            
            
            echo '<table id="ausgabe" >';
                 echo "<tr>";
                 echo "<th class='bye'><th id='imhaus'><i> Autos im Haus: </i></th></th><th class='bye'></th>";
                  echo "</tr>";
                echo "<tr>";
                    echo "<th>Vorname</th>";
                    echo "<th>Nachname</th>";
                    echo "<th>Autoname</th>";
                echo "</tr>";
                

                foreach ($autobesitzer as $temp){
                    echo "<tr>";
                        $temp->addAuto($autoname);
                        echo "<td>"; echo $temp->getVorname(); echo "</td>";
                        echo "<td>"; echo $temp->getNachname(); echo "</td>";
                        echo "<td>"; echo $temp->getAutos(); echo "</td>";
                    echo "</tr>";
               
                }
            echo "</table>";

            $_SESSION['besitzer']=$autobesitzer;
            
?>

</body>
</html>