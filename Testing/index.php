<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
        <body>
            <form action="index.php" method="post">
                Name: <input type="text" name="name">
                Frucht: <select name="fruchtwahl">
                    <option value="apfel">Apfel</option>
                    <option value="orange">Orange</option>
                    <option value="birne">Birne</option>
                    <input type="submit" name="" value="">
                </select>
            </form>
        <?php
        session_start();
            $kunden = $_SESSION['kunden'];
            $fruchtWahl = htmlspecialchars($_POST['fruchtwahl']);
            $name = htmlspecialchars($_POST['name']);

            $kunden[] = $name;
            

            echo "Kunden:";
            foreach ($kunden as $temp){
                echo $temp;
                echo "<br>";
            }


            $_SESSION['kunden'] = $kunden;
        ?>


    </body>
</html>




