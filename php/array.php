<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/array.css" rel="stylesheet">
    </head>
    <body>
   
  
<?php
        $vorname=$_POST['vorname'];
        $nachname=$_POST['nachname'];
        $handy=$_POST['handy'];
        $telefon=$_POST['telefon'];


        $array1 = array(
                            array('Hans', 'Muster', 'handy' => '079 851 13 57', 'telefon' => '071 985 04 19'),
                            array('Peter','Test','handy' => '079 851 13 57', 'telefon' => '071 985 04 19'),
                            array('Ben','Tester','handy' => '079 851 13 57', 'telefon' => '071 985 04 19'),
                            array('Leon','Testest','handy' => '079 851 13 57', 'telefon' => '071 985 04 19'),
                            array('Johanna','Tess','handy' => '079 851 13 57', 'telefon' => '071 985 04 19'),
                            array()
                        );



              

                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Vorname</th><th>Nachname</th><th>Handy</th><th>Telefon</th>";
                        echo "</tr>";

                        foreach($array1 as $temp) {
                            echo "<tr>";

                                    foreach($temp as $temp2){
                                            
                                            echo "<td>";
                                            echo $temp2. " ";
                                            echo "</td>";
                                             
                                            }
                                            
                               
                            echo "</tr>";
 
                        }
                        echo "</table>";


?>  

 <form action="array.php" method="post">
        <input type="text" name="vorname"> Vorname<br><br><br><br>
        <input type="text" name="nachname"> nachname<br><br><br><br>
        <input type="number" name="handy"> Handy<br><br><br><br>
        <input type="number" name="telefon"> Telefon<br><br><br><br>
        <input type="submit"value="hinzufügen">
        <?php 
        $array1[][$vorname, $nachname, 'handy'=> $handy, 'telefon' => $telefon];
        ?>
    </form>
</body>
</html>