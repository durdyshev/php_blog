document.getElementById("d1").addEventListener("click",function(
){
    console.log("HAHA");
    ajaxo(1);
});

document.getElementById("d2").addEventListener("click",function(
    ){
        console.log("HAHA");
        ajaxo(2);
    });

    document.getElementById("d3").addEventListener("click",function(
        ){
            console.log("HAHA");
            ajaxo(3);
        });
        document.getElementById("d4").addEventListener("click",function(
            ){
                console.log("HAHA");
                ajaxo(4);
            });
            document.getElementById("d5").addEventListener("click",function(
                ){
                    console.log("HAHA");
                    ajaxo(5);
                });
                document.getElementById("d6").addEventListener("click",function(
                    ){
                        console.log("HAHA");
                        ajaxo(6);
                    });
                    document.getElementById("d7").addEventListener("click",function(
                        ){
                            console.log("HAHA");
                            ajaxo(7);
                        });
                                                            

    function ajaxo(str){

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("hpage_services").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET","includes/getquery.php?id="+str,true);
        xmlhttp.send();


    }