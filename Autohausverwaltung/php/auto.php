<?php

    function db_connect(){
        global $db;
        $db = mysqli('localhost','root','','autohaus');
    }

    function db_close() {
        global $db;
        $db->close();
    }

    $vorname=htmlspecialchars($_POST['vorname']);
    $nachname=htmlspecialchars($_POST['nachname']);
    $autoname=htmlspecialchars($_POST['autoname']);

    $autobesitzer = new Autobesitzer($vorname, $nachname);
    $auto = new Auto($autoname);

   
   $besitzer = array(
                       
                array()
    );

    $besitzer[][] = $autobesitzer;
    $besitzer[][] = $auto;
    db_connect();
    
  
    echo "<table>";
        echo "<tr>";
            echo "<th>Vorname</th>";
            echo "<th>Nachname</th>";
            echo "<th>Autoname</th>";
        echo "</tr>";
        


        foreach ($besitzer as $temp){
            
            
              foreach ($temp as $temp2){          
                   echo "<tr>"; 
                    if ($temp[0]==$autobesitzer) {
                        echo "<td>";
                        echo $temp[0]->getVorname();
                        echo "</td>";
                        echo "<br>";
                        echo "<td>";
                        echo $temp[0]->getNachname();
                        
                       
                    }
                    else {
                        echo "<td>";
                        echo $temp[0]->getAutoname();
                        echo "</td>";
                    }
                    echo "</tr>";
                   
              }
             

                           
              
                                  
                            
            
            

        }
    echo "</table>";


   

    class Autobesitzer {

    private $vorname;
    private $nachname;

    public function __construct($vorname, $nachname){
            $this->vorname=$vorname;
            $this->nachname=$nachname;
    }

    public function getVorname(){
        return $this->vorname;
    }

     public function getNachname(){
        return $this->nachname;
    }


    }



    class Auto {

        private $autoname;

        public function __construct($autoname) {
                $this->autoname=$autoname;
        }

        public function getAutoname(){
            return $this->autoname;
        }
    }
?>