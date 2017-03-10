
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <section class="content">
        
        
    <?php
    include_once('klassen.php');
    session_start();
   
   
    
    $edit=htmlspecialchars($_POST['edit']);

        $autobesitzer = $_SESSION['besitzer'];
       
       foreach($autobesitzer as $index=>$temp){
           
           if($index == $edit){
            echo "<div id='fontgroesser'>";
               echo "<h1>". $temp->getFullname(). "</h1>";
               echo "<h3>Ihre Autos: </h3>";
               echo $temp->getAutos();
               echo "<form action='bearbeiten.php' method='post'>";
               echo "<input type"
                echo "</div>";
           }
       }
        
    

?>
    </section>
    </body>
</html>


