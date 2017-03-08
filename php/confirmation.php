
<!DOCTYPE html>
<html lang="en">
<head>
<title>Discussion</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/normalize.css" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">
<?php
$anrede=$_POST['anrede'];
$vorname=$_POST['vorname'];
$name=$_POST["name"];
$road=$_POST['road'];
$place=$_POST['place'];
$mail=$_POST['mail'];
$message=$_POST['message'];
$confirmation=$_POST['confirmation'];

    include_once('functions.php');
    db_connect();
    db_write($vorname, $name, $place, $message,$confirmation);
    db_close();
?>
</head>
<body id="confirmation">



<section id="content">

    <div class="flex" id="mainflex">
            
            <aside id="aside" class="flex">
                <div id="list">
                <ul>
                    <li><h2><a href="../html/index.html">&nbsp;&nbsp;Home</a></h2></li>
                    <li><h2><a href="../html/discussion.html">&nbsp;&nbsp;Discussion</a></h2></li>
                    <li><h2><a href="#">&nbsp;&nbsp;Gallery</a></h2></li>
                    <li><h2><a href="#">&nbsp;&nbsp;About</a></h2></li>
                    <li><h2><a href="../html/poll.html">&nbsp;&nbsp;Umfrage</a></h2></li>
                    <li><h2><a href="../php/pollresults.php">&nbsp;&nbsp;Umfrage Ergebnisse</a></h2></li>
                </ul>
                </div>
                <div id="spacer">
                </div>
                <div id="socialmedia">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>

                    
                </div>
                <div id="copyright">
                    <h4>Copyright</h4>
                    
                        All images and content belong to me, Joel Jose.
                    
                </div>
            </aside>
        <div class="flex" id="flexforbutton">
            <div id="confirmation">
               
                <?php if($anrede != 'Andere'): ?>
                   <h2>Thank you for your message <?php echo"$anrede";echo" ";echo"$vorname";echo" ";echo"$name";?> 
                   <?php else: ?>
                   <h2>Thank you for your message <?php echo"$vorname";echo" ";echo"$name";?>
                   <?php endif ?>
                   
                        <?php 
                                if ($confirmation == "true"): ?>
                                <h3>Here is your data:</h3>
                                <p>Name: <?php echo "$vorname"; echo " "; echo "$name"; ?></p>
                                <?php 
                                    if($place!="" and $road!=""): ?>
                                        <p>Place: <?php echo"$place";echo ", ";echo"$road"; ?></p>
                                    <?php endif ?>
                                <?php
                                    if ($mail!=""):?>
                                        <p>E-Mail: <?php echo"$mail"; ?></p>
                                    <?php endif ?>

                                <p>Your Message: <?php echo"$message"; ?></p>
                            <?php endif ?>
                
                    </div>
                <div class="flex">
                    <div>
                    <form action="../html/index.html">
                        <input class="button" type="submit" value="Go back to Home">
                        </form>
                </div>
                     <div>
                    <form action="../php/community.php">
                        <input class="button" type="submit" value="See all messages">
                        </form>
                </div>
</div>
</section>

</body>
</html>
