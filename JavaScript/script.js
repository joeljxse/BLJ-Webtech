var content = document.getElementbyId=("buttontext");
var button = document.getElementbyId=("button1");

                button.addEventListener("click",function(){
                        content.innerHTML="I've been pressed once!";
                });

                button.addEventListener("dblclick",function(){
                        content.innerHTML="<a id='link1'>I've been pressed twice!</a>";
                        var link = document.getElementbyId("link1");
                        link.addEventlistener("dblclick",testfunction);
                });


                function testfunction() {
                    content.innerHTML = "The content has been double-clicked!";
                };

