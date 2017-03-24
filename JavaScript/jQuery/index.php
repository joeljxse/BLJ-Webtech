<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>    
        <title>Memory</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <?php include_once("functions.php");
            $username = htmlspecialchars($_POST["username"]);
            $versuche = htmlspecialchars($_POST["versucheForDB"]);
            

            if($username != ""){
                    
           
                
                db_connect();
                db_write($username,$versuche);
                db_read();
                db_close();
            
            }
            
        
         ?>
        <script>
            $(document).ready(function(){

                    
                    var zaehler = 0;
                    var srcPic1;
                    var idPic1;
                    var srcPic2;
                    var idPic2;

                    var punktzahl = 0;
                    var versuche = 0;
                    

                   $(".memoryCard").on("click",function(){
                        var id = $(this).attr('id');
                        var src = $("#"+id+"i").attr('src');
                        

                        if (zaehler <2){
                            $("#"+id + "i").fadeIn("slow");

                                if (zaehler == 0){
                                    srcPic1 = $("#" + id + "i").attr('src');
                                    idPic1 = "#" + id + "i";
                                    zaehler++;
                                   
                                }
                                else {
                                    srcPic2 = $("#" + id + "i").attr('src');
                                    idPic2 = "#" + id + "i";
                                    zaehler++;
                                    
                                    
                                }
                        }
                        else {
                                    if (srcPic1 == srcPic2){
                                            $(idPic1).attr('class','stay');
                                            $(idPic2).attr('class','stay');
                                            punktzahl++;
                                            
                                                if (punktzahl==8){
                                                    alert("Du hast gewonnen! Du hast "+versuche+" Versuche gebraucht.");
                                                    
                                                }
                                                versuche++;
                                            $("#punktzahlH2").html("Punktzahl: "+punktzahl);
                                            zaehler = 0;
                                            
                                            $("#versucheH2").css("name",versuche);
                                            $("#versucheForDB").html(versuche);
                                    }
                                    else {
                                        $(".memoryPic").css("display","none");
                                        zaehler = 0;
                                        versuche++;
                                        $("#versucheH2").html("Versuche: "+versuche);
                                        $("#versucheForDB").css("name",versuche);
                                    }
                         }
                        
                   });
                   
                    

            });

        </script>

        
    </head>
    <body>
        <div id="anzeige">
        <h2 id="punktzahlH2">Punktzahl: </h2><h2 id="versucheH2">Versuche: </h2>
        </div>        
        
        <table id="memoryTable">
            <tr id="row1">
                <td class="memoryCard" id="1"><img id="1i" class="memoryPic" src="taube.png"></img></td>
                <td class="memoryCard" id="2"><img id="2i" class="memoryPic" src="storch.jpg"></img></td>
                <td class="memoryCard" id="3"><img id="3i" class="memoryPic" src="gans.jpg"></img></td>
                <td class="memoryCard" id="4"><img id="4i" class="memoryPic" src="eule.jpg"></img></td>
            </tr>
            
            <tr id="row2">
                <td class="memoryCard" id="5"><img id="5i" class="memoryPic" src="huhn.jpg"></img></td>
                <td class="memoryCard" id="6"><img id="6i" class="memoryPic" src="adler.jpg"></img></td>
                <td class="memoryCard" id="7"><img id="7i" class="memoryPic" src="Ente.jpg"></img></td>
                <td class="memoryCard" id="8"><img id="8i" class="memoryPic" src="gans.jpg"></img></td>
            </tr>
            <tr id="row3">
                <td class="memoryCard" id="9"><img id="9i" class="memoryPic" src="storch.jpg"></img></td>
                <td class="memoryCard" id="10"><img id="10i" class="memoryPic" src="eule.jpg"></img></td>
                <td class="memoryCard" id="11"><img id="11i" class="memoryPic" src="rabe.jpg"></img></td>
                <td class="memoryCard" id="12"><img id="12i" class="memoryPic" src="adler.jpg"></img></td>
            </tr>
            <tr id="row4">
                <td class="memoryCard" id="13"><img id="13i" class="memoryPic" src="Ente.jpg"></img></td>
                <td class="memoryCard" id="14"><img id="14i" class="memoryPic" src="rabe.jpg"></img></td>
                <td class="memoryCard" id="15"><img id="15i" class="memoryPic" src="huhn.jpg"></img></td>
                <td class="memoryCard" id="16"><img id="16i" class="memoryPic" src="taube.png"></img></td>
            </tr>
        </table>
        <div id="rangliste">
            <table>
                <h2>Rangliste</h2>
                <tr>
                <th>Username</th>

                <th>Versuche</th>
                <th>Date/Time</th>
            </tr>
            <tr>
            </tr>
            </table>
            <form action="index.php" method="POST">
                <input type="text" name="username" placeholder="Username...">
                <input type="submit"  onclick="eintragen()" value="Rangliste eintragen / aktualisieren">
                <input type="text" name="versucheForDB" ></input>
            </form>
        </div>
        <div id="scriptDiv">
            
        </div>
    </body>
</html>