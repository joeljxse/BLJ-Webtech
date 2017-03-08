<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Poll</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/normalize.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
      <?php include_once('functions2.php'); ?>
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
                                <li><h2><a href="../html/poll.html">&nbsp;&nbsp;Poll</a></h2></li>
                                <li><h2><a href="../php/pollresults.php">&nbsp;&nbsp;Poll Results</a></h2></li>
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
                           
                               
                                  <?php db_connect(); db_close(); ?>
                                 
                    
                               
                           <?php
                           
                           db_connect();
                           
                          
                           db_read();
                           db_close();
                                
                               
                    ?>
                     
                         </div>

                               
                </div>
                </div>
        </section>
          
    </body>
</html>




