<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Poll</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/normalize.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
      <?php 
       
           
            include_once('functions2.php'); ?>
             <p id="error"><?php
                                        $antwort1=htmlspecialchars($_POST['frage1']);
                                        $antwort2=htmlspecialchars($_POST['frage2']);
                                        $antwort3=htmlspecialchars($_POST['frage3']);
                                        $antwort4=htmlspecialchars($_POST['frage4']);
                                        $antwort5=htmlspecialchars($_POST['frage5']);
                                        $antwort6=htmlspecialchars($_POST['frage6']);
                                        $antwort7=htmlspecialchars($_POST['frage7']);
                                        $antwort8=htmlspecialchars($_POST['frage8']);
                                        $vorname=htmlspecialchars($_POST['firstname']);
                                        $nachname=htmlspecialchars($_POST['lastname']);
                                        $age=htmlspecialchars($_POST['age']);?> </p>
                                                            
            
    </head>
    <body id="poll">
        <section id="content">

                <div class="flex" id="mainflex">
                        
                        <aside id="aside" class="flex">
                            <div id="list">
                            <ul>
                                <li><h2><a href="../html/index.html">&nbsp;&nbsp;Home</a></h2></li>
                                <li><h2><a href="../html/discussion.html">&nbsp;&nbsp;Discussion</a></h2></li>
                                <li><h2><a href="#">&nbsp;&nbsp;Gallery</a></h2></li>
                                <li><h2><a href="#">&nbsp;&nbsp;About</a></h2></li>
                                <li><h2><a href="../php/community.php">&nbsp;&nbsp;Community</a></h2></li>
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

                    
                         <div>
                           
                               
                               
                                 
                    
                               
                           <?php
                           
                           db_connect();
                           
                           db_write($vorname,$nachname,$age,$antwort1,$antwort2,$antwort3,$antwort4,$antwort5,$antwort6,$antwort7,$antwort8);
                           db_read();
                           db_close();
                                
                               
                    ?>
                     
                         </div>

                               
                </div>
                </div>
        </section>
          
    </body>
</html>




