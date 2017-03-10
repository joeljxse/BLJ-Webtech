
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
    <h2> Tragen sie hier Ihr neues Auto ein:</h2>
        <?php
      
            include_once('functions.php');
            echo "<h2> Ihr Name: </h2> ";
       
            echo "<select>";
            echo "<option>";
                echo getOldNames();
                echo "</option>";
            echo "</select>";
        
        


        ?>

    </section>
    </body>
</html>
