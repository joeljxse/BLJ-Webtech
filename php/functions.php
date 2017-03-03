<?php 

   function db_connect (){
        global $dbObj;
        $dbObj =  new mysqli('localhost','root','','webtech');
    }

    function db_write($firstname, $name, $place, $message, $confirmation){
        global $dbObj;
        $sql = "INSERT INTO table1(firstname, name, place, message,confirmation) VALUES ('$firstname', '$name', '$place', '$message',$confirmation)";
        $dbObj->query($sql);
    }

    function db_read($conf){
        global $dbObj;
        $sql1 = "SELECT * FROM table1 WHERE confirmation=1" ;
        $sql2 = "SELECT * FROM table1 WHERE confirmation=0";

        if($conf=="true"){
        $result = $dbObj->query($sql1);
        
        }
        else if($conf=="false"){
            $result = $dbObj->query($sql2);
        }
        
           
            foreach ($result as $temp) {

                echo "<div class='comment'>";
                echo "<h3>User #".$temp['id']."</h3>";
                    echo "<p>Name: ".$temp['firstname']." ";
                    echo $temp['name']."<br></p>";
                    echo "<p>From: ".$temp['place']. "</p>";
                    echo "<br><p>Their Message: <br><br>".$temp['message']. "</p>";
                    
                echo "</div>";
                }
                
                
            }
            

           
    
    function db_close() {
        global $dbObj;
        $dbObj->close();
    }
?>