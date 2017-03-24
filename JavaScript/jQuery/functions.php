<?php

    function db_connect(){
        global $db;
        $db = mysqli_connect('localhost','root','','webtech');
        
    }

    function db_close() {
        global $db;
        $db->close();
    }

    function db_write($username, $versuche){
        
        global $db;
        $sql = "INSERT INTO memory('username','versuche') VALUES ('$username', '$versuche')";

        $db->query($sql);
        
    }

    function db_read(){
        global $db;
        $sql = "SELECT username AND versuche FROM memory";
        $result = $db->query($sql);

        foreach ($result as $temp){
            echo "$temp";
        }
    }
?>