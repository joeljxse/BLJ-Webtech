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

    function db_read(){
        global $dbObj;
        $sql = "SELECT * FROM table1";
         $result = $dbObj->query($sql);

           
            foreach ($result as $temp) {
                {
                echo "<div class=comment>";
                echo "<h3>User #".$temp['id']."</h3>";
                    echo "<p>Name: ".$temp['firstname']." ";
                    echo $temp['name']."<br></p>";
                    echo "<p>From: ".$temp['place']. "</p>";
                    echo "<br><p>Their Message: <br><br>".$temp['message']. "</p>";
                    echo $temp['confirmation'];
                echo "</div>";
                }
                
            }
            

           
    }
    function db_close() {
        global $dbObj;
        $dbObj->close();
    }
?>