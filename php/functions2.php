<?php
 
          
   function db_connect (){
        global $dbObj;
        $dbObj =  new mysqli('localhost','root','','webtech');
    }

       function db_close() {
        global $dbObj;
        $dbObj->close();
    }

     function db_write($vorname, $nachname, $age, $antwort1, $antwort2, $antwort3, $antwort4, $antwort5, $antwort6, $antwort7, $antwort8){
        global $dbObj;
        $sql = "INSERT INTO umfrage(frage1,frage2,frage3,frage4,frage5,frage6,frage7,frage8,vorname,nachname,age) VALUES ('$antwort1','$antwort2','$antwort3','$antwort4','$antwort5','$antwort6','$antwort7','$antwort8','$vorname','$nachname','$age')";
        $dbObj->query($sql);
     }

    function db_read(){
        global $dbObj;
        
        $sql="SELECT * FROM umfrage";
       

      
             $result=$dbObj->query($sql);     
    
        
        
      
           
            foreach ($result as $temp) {
                   echo "<div id='results'>";
                
                
                    echo "<h2>";
                        echo $temp['vorname'] . " " . $temp['nachname'];
                    echo"<br>";

                    echo "</h2>";

                        echo "<h3>  Wie gefällt dir meine Seite? </h3>";
                        echo " <p> ". $temp['frage1'] . "</p>";

                        echo "<br>";
                                        
                        
                        echo "<h3>   Was ist deine Lieblingsfarbe? </h3>";
                        echo " <p> ". $temp['frage2'] . "</p>";

                        echo "<br>";
                        
                        
                        echo "<h3>   Wenn ein Schläger und ein Ball zusammen 1.10 Fr. kosten und der Schläger 1 Franken teurer ist als der Ball, wie teuer ist dann der Ball?  </h3>";
                        echo " <p> ". $temp['frage3'] . "</p>";

                        echo "<br>";
                        
                        echo "<h3> Wie lange brauchst du normalerweise von Zuhause bis zum ZBW? [in Stunden]  </h3>";
                        echo " <p> ". $temp['frage4'] . "</p>";

                        echo "<br>";
                        
                        echo "<h3>  Tee oder Kaffee?  </h3>";
                        echo " <p> ". $temp['frage5'] . "</p>";

                        echo "<br>";
                        
                        echo "<h3>  Hund oder Katze? </h3>";
                        echo " <p> ". $temp['frage6'] . "</p>";

                        echo "<br>";
                        
                        echo "<h3>  Meinung zu Ananas auf Pizza?  </h3>";
                        echo " <p> ". $temp['frage7'] . "</p>";

                        echo "<br>";

                          echo "<h3>  Lieblingslied?  </h3>";
                        echo " <p> ". $temp['frage8'] . "</p>";

                        echo "<br>";
                        
                        
                echo "</div>";                         
                                        
                                        }
               
                
            }


            
    ?>