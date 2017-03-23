
var testingDiv = document.getElementById("testingDiv");
var resultatDiv = document.getElementById("resultatDiv");
var plus = document.getElementById("plus");
var minus = document.getElementById("minus");
var mal = document.getElementById("mal");
var geteilt = document.getElementById("geteilt");


plus.addEventListener("click",function(){
    var zahl1 = document.getElementById("zahl1").value;
    var zahl2 = document.getElementById("zahl2").value;

    if(!zahl1 || !zahl2){
        resultatDiv.innerHTML="Bitte in beide Felder eine Zahl eingeben.";
    }
    else {
        zahl1 = parseInt(zahl1);
        zahl2 = parseInt(zahl2);
        
        var resultat = zahl1 + zahl2;
        var length = resultat.toString().length;

        var resultatStr = resultat.toString();
        var hunderterStelle = parseInt(resultatStr.charAt(resultatStr.length - 3));


        if (length <= 2){
            var prozent = 100 / 100 * resultat;
        }
        else {
            
                if (resultatStr.charAt(resultatStr.length-4)==""){
                    var prozent = resultat * 100 / ((hunderterStelle+1)*100);
                }
                else {
                    var laengeFuerGrosseZahlen = resultatStr.length - 3;
                   

                   

                     for (var i = 0; i <=laengeFuerGrosseZahlen-1; i++){
                         if (i==0){
                         var anfangNaechsterHunderter =  resultatStr.charAt(i); 
                         
                        }
                        else {
                            var anfangNaechsterHunderter = anfangNaechsterHunderter + resultatStr.charAt(i); 
                            
                        }
                          
                     }

                    var naechsterHunderter = resultatStr.charAt(resultatStr.length-3)* 100;
                    naechsterHunderter = naechsterHunderter + 100;
                    
                    
                    var ganzerNaechsterHunderter = anfangNaechsterHunderter + naechsterHunderter; 
                    
                    var prozent = resultat * 100 / parseInt(ganzerNaechsterHunderter);
                    
                }
        }
        
       


        document.getElementById("balken").style.width= prozent + "%";
        document.getElementById("balken").innerHTML=prozent + "%";
        resultatDiv.innerHTML="Resultat: "+ resultat;

       
    }
     
    
});

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
        
       
        
        var  test1 = resultat.toString().charAt(0);
        

        if (test1=="-"){
            document.getElementById("balken").style.width= "0%";
            document.getElementById("balken").innerHTML="ERROR";
      }
      else {
      if (length <= 2){
            var prozent = 100 / 100 * resultat;
        }
        else {
           
                if (resultatStr.charAt(resultatStr.length-4)==""){
                    var prozent = resultat * 100 / ((hunderterStelle+1)*100);
                }
                else {
                    var laengeFuerGrosseZahlen = resultatStr.length - 3;
                   

                   

                     for (var i = 0; i <=laengeFuerGrosseZahlen-1; i++){
                         if (i==0){
                         var anfangNaechsterHunderter =  resultatStr.charAt(i); 
                         
                        }
                        else {
                            var anfangNaechsterHunderter = anfangNaechsterHunderter + resultatStr.charAt(i); 
                            
                        }
                          
                     }

                    var naechsterHunderter = resultatStr.charAt(resultatStr.length-3)* 100;
                    naechsterHunderter = naechsterHunderter + 100;
                    
                    
                    var ganzerNaechsterHunderter = anfangNaechsterHunderter + naechsterHunderter; 
                    
                    var prozent = resultat * 100 / parseInt(ganzerNaechsterHunderter);
                    
                }

        }
        

        document.getElementById("balken").style.width= prozent + "%";
        document.getElementById("balken").innerHTML=prozent + "%";
        resultatDiv.innerHTML="Resultat: " + resultat;
    }
    }

});


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
        var length = resultat.toString().length;

        var resultatStr = resultat.toString();
        var hunderterStelle = parseInt(resultatStr.charAt(resultatStr.length - 3));


        if (length <= 2){
            var prozent = 100 / 100 * resultat;
        }
        else {
            
                if (resultatStr.charAt(resultatStr.length-4)==""){
                    var prozent = resultat * 100 / ((hunderterStelle+1)*100);
                }
                else {
                    var laengeFuerGrosseZahlen = resultatStr.length - 3;
                   

                   

                     for (var i = 0; i <=laengeFuerGrosseZahlen-1; i++){
                         if (i==0){
                         var anfangNaechsterHunderter =  resultatStr.charAt(i); 
                         
                        }
                        else {
                            var anfangNaechsterHunderter = anfangNaechsterHunderter + resultatStr.charAt(i); 
                            
                        }
                          
                     }

                    var naechsterHunderter = resultatStr.charAt(resultatStr.length-3)* 100;
                    naechsterHunderter = naechsterHunderter + 100;
                    
                    
                    var ganzerNaechsterHunderter = anfangNaechsterHunderter + naechsterHunderter; 
                    
                    var prozent = resultat * 100 / parseInt(ganzerNaechsterHunderter);
                    
                }
        }
        
       


        document.getElementById("balken").style.width= prozent + "%";
        document.getElementById("balken").innerHTML=prozent + "%";
        resultatDiv.innerHTML="Resultat: "+ resultat;

       
    }
     
    
});

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
        var length = resultat.toString().length;

        var resultatStr = resultat.toString();
        var hunderterStelle = parseInt(resultatStr.charAt(resultatStr.length - 3));


        if (length <= 2){
            var prozent = 100 / 100 * resultat;
        }
        else {
            
                if (resultatStr.charAt(resultatStr.length-4)==""){
                    var prozent = resultat * 100 / ((hunderterStelle+1)*100);
                }
                else {
                    var laengeFuerGrosseZahlen = resultatStr.length - 3;
                   

                   

                     for (var i = 0; i <=laengeFuerGrosseZahlen-1; i++){
                         if (i==0){
                         var anfangNaechsterHunderter =  resultatStr.charAt(i); 
                         
                        }
                        else {
                            var anfangNaechsterHunderter = anfangNaechsterHunderter + resultatStr.charAt(i); 
                            
                        }
                          
                     }

                    var naechsterHunderter = resultatStr.charAt(resultatStr.length-3)* 100;
                    naechsterHunderter = naechsterHunderter + 100;
                    
                    
                    var ganzerNaechsterHunderter = anfangNaechsterHunderter + naechsterHunderter; 
                    
                    var prozent = resultat * 100 / parseInt(ganzerNaechsterHunderter);
                    
                }
        }
        
       


        document.getElementById("balken").style.width= prozent + "%";
        document.getElementById("balken").innerHTML=prozent + "%";
        resultatDiv.innerHTML="Resultat: "+ resultat;

       
    }
     
    
});