<?php

        $array1 = array(
                            array('Hans', 'Muster'),
                            array('Peter','Test'),
                            array('Ben','Tester'),
                            array('Leon','Testest'),
                            array('Johanna','Tess'),
                        );

        $handy = []
                        

                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Vorname</th><th>Nachname</th>";
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