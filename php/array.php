<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $name=$_POST['name'];
            $vorname=$_POST['vorname'];

            $array1 =array(array($name,$vorname));
            
            
            echo $array1[0][0];
            echo $array1[0][1];
            echo $array1[1][0];
            echo $array1[1][1];
            


 
        ?>    
    </body>
</html>


