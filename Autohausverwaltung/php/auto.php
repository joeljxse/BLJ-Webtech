<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autohausverwaltung</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">

        <?php
                 include_once('functions.php');
                 $vorname=htmlspecialchars($_POST['vorname']);
                 $nachname=htmlspecialchars($_POST['nachname']);
                 $autoname=htmlspecialchars($_POST['autoname']);
                 $oldvorname=htmlspecialchars($_POST['oldvorname']);
                 $oldnachname=htmlspecialchars($_POST['oldnachname']);
                 $oldautoname=htmlspecialchars($_POST['oldautoname']);
                 
               


               
    ?>
    </head>
    <body>
            <nav>
                      
                        <ul id="navlist" class="flex">
                            <li id="homeli"><a href="../html/index.html" name="Home">Home</a></li>
                            <li id="autoli"><a href="../php/auto.php" name="Autos">Autos</a></li>
                        </ul>
                       
                    </nav>
<?php


 echo ausgabe($autoname, $vorname,$nachname,$oldvorname,$oldnachname,$oldautoname);
        
 ?>


</body>
</html>