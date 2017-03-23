// Die Variablen für die Buttons, Textfelder und Ausgabe-Divs

var testingDiv = document.getElementById("testingDiv");
var resultatDiv = document.getElementById("resultatDiv");
var plus = document.getElementById("plus");
var minus = document.getElementById("minus");
var mal = document.getElementById("mal");
var geteilt = document.getElementById("geteilt");


// Das Event für das Plus-Rechnen
plus.addEventListener("click",function(){
    
    // Die Zahlen werden in die Variablen übergeben
    var zahl1 = document.getElementById("zahl1").value;
    var zahl2 = document.getElementById("zahl2").value;

    // Überprüft, dass zwei Zahlen eingegeben wurden
    if(!zahl1 || !zahl2){
        resultatDiv.innerHTML="Bitte in beide Felder eine Zahl eingeben.";
    }

    
    else {

        //Konvertiert die Strings vom Textfeld zu Integer
        zahl1 = parseInt(zahl1);
        zahl2 = parseInt(zahl2);
        

        var resultat = zahl1 + zahl2;

        prozentBerechnen(resultat); 
    }
    
});


//-------------------------------------------------------------------------------------------------------------------------------------
// Die anderen drei Operationen sind genau gleich ausser, dass bei minus die negativen Zahlen noch zu einem Error umfunktioniert werden
// und die Operanden gewechelt werden (resultat = zahl1 + zahl2 wird zu resultat = zahl1 - zahl2 zum Beispiel)
//--------------------------------------------------------------------------------------------------------------------------------------

minus.addEventListener("click",function(){
    var zahl1 = document.getElementById("zahl1").value;
    var zahl2 = document.getElementById("zahl2").value;

    if(!zahl1 || !zahl2){
        resultatDiv.innerHTML="Bitte in beide Felder eine Zahl eingeben.";
    }
    else {
        zahl1 = parseInt(zahl1);
        zahl2 = parseInt(zahl2);
        

        var resultat = zahl1 - zahl2;
         var length = resultat.toString().length;

        var resultatStr = resultat.toString();
        var hunderterStelle = parseInt(resultatStr.charAt(resultatStr.length - 3));
        
       
        // Das erste Zeichen wird ausgelesen vom Resultat
        var  test1 = resultat.toString().charAt(0);
        
        //Wenn es ein Minus ist (negatives Resultat ) wird ein Error ausgegeben
        if (test1=="-"){
            document.getElementById("balken").style.width= "0%";
            document.getElementById("balken").innerHTML="ERROR";
      }
      else {
                prozentBerechnen(resultat);
      }
    }
});

//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
mal.addEventListener("click",function(){
    var zahl1 = document.getElementById("zahl1").value;
    var zahl2 = document.getElementById("zahl2").value;

    if(!zahl1 || !zahl2){
        resultatDiv.innerHTML="Bitte in beide Felder eine Zahl eingeben.";
    }
    else {
        zahl1 = parseInt(zahl1);
        zahl2 = parseInt(zahl2);
        
        var resultat = zahl1 * zahl2;
       
       prozentBerechnen(resultat);
    }
     
    
});


//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
geteilt.addEventListener("click",function(){
    var zahl1 = document.getElementById("zahl1").value;
    var zahl2 = document.getElementById("zahl2").value;

    if(!zahl1 || !zahl2){
        resultatDiv.innerHTML="Bitte in beide Felder eine Zahl eingeben.";
    }
    else {
        zahl1 = parseInt(zahl1);
        zahl2 = parseInt(zahl2);
        
        var resultat = zahl1 / zahl2;
            prozentBerechnen(resultat);
    }
     
    
});

//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
function prozentBerechnen(resultat){

          //Konvertiert das Resultat zu einem String (für nachher)
        var resultatStr = resultat.toString();

        //Lest die Hunderterstelle aus dem Resultat aus (die dritte von rechts)
        var hunderterStelle = parseInt(resultatStr.charAt(resultatStr.length - 3));

        //Wenn die Länge des Resultats 2 oder kleiner ist (die Zahl ist kleiner als 100)
        var length = resultat.toString().length;
        if (length <= 2){
            var prozent = 100 / 100 * resultat;
        }


        else {
                // Wenn die vierte Stelle von rechts nicht da ist (Wenn die Zahl kleiner als 1000 ist)
                if (resultatStr.charAt(resultatStr.length-4)==""){
                    var prozent = resultat * 100 / ((hunderterStelle+1)*100);
                }

                        else {
                            //Die Anzahl von Ziffern nach der Hunderterstelle
                            var laengeFuerGrosseZahlen = resultatStr.length - 3;
                        

                        
                            // anfangNaechsterHunderter:
                            //     Beispiel - 20150

                            //     laengeFuerGrosseZahlen ist 2 (2 Ziffern nach der Hunderterstelle 1)
                            //     es wird der Rest der Zahl ohne 150 (20) in die Variable anfangNaechsterHunderter geschrieben

                            for (var i = 0; i <=laengeFuerGrosseZahlen-1; i++){
                               
                               // Beim ersten mal muss man anstatt a = a+b, a = b schreiben
                                if (i==0){
                                var anfangNaechsterHunderter =  resultatStr.charAt(i); 
                                
                                }
                                    else {
                                        var anfangNaechsterHunderter = anfangNaechsterHunderter + resultatStr.charAt(i); 
                                        
                                    }
                                
                            }
                            
                            // Beim Beispiel von 20150 wird hier das 150 zu 100 
                            var naechsterHunderter = resultatStr.charAt(resultatStr.length-3)* 100;
                            // Und hier zu 200 (der nächste Hunderter)
                            naechsterHunderter = naechsterHunderter + 100;
                            
                            // Hier werden die 20 und die 200 zusammengefügt
                            var ganzerNaechsterHunderter = anfangNaechsterHunderter + naechsterHunderter; 
                            //Und hier die Prozentzahl für den Balken berechnet
                            var prozent = resultat * 100 / parseInt(ganzerNaechsterHunderter);
                            
                        }
                }
                
        
        document.getElementById("balken").style.width= prozent + "%";
        document.getElementById("balken").innerHTML=prozent + "%";
        resultatDiv.innerHTML="Resultat: "+ resultat;
}