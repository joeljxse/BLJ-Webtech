
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
          <nav>
                      
                        <ul id="navlist" class="flex">
                            <li id="homeli"><a href="../html/index.html" name="Home">Home</a></li>
                            <li id="autoli"><a href="../php/auto.php" name="Autos">Autos</a></li>
                        </ul>
                       
                    </nav>
        <section class="content">
        
        
    <?php
    include_once('klassen.php');
    session_start();
   
   
    if (!isset($_POST['edit'])){error_reporting(0);}
    if (!isset($_POST['newauto'])){error_reporting(0);}

    $newauto=htmlspecialchars($_POST['newauto']);
    $edit=htmlspecialchars($_POST['edit']);



        $autobesitzer = $_SESSION['besitzer'];
       
       foreach($autobesitzer as $index=>$temp){
           
           if($index == $edit){
            echo "<div id='fontgroesser'>";
               echo "<h1>". $temp->getFullname(). "</h1>";
               echo "<h3>Ihre Autos: </h3>";
               if(isset($newauto)){$temp->addAuto($newauto);}
               echo $temp->getAutos();
               echo "<br><br>";
               echo "<form action='bearbeiten.php' method='post'>";
               echo "<label for=newauto'>Neues Auto hinzufügen:</label><br><br><input type='text' name='newauto'><input type='submit' value='Hinzufügen!'";
               
                echo "</div>";
           }
       }
        
      $_SESSION['besitzer']=$autobesitzer;

?>
    
        
    </section>
    </body>
</html>


