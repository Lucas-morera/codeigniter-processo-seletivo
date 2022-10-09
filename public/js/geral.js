// req cep 
 function requisicao(){
        var cep = document.querySelector("input[name=cep]").value;
        var url = `https://ws.apicep.com/cep/${cep}.json`;
        $.ajax({
            url:url,
            type: "get",
            dataType: "json",
            success:function(dados){
                $("#rua").val(dados.address)
                $("#cidade").val(dados.city)
                $("#bairro").val(dados.district)
                $("#estado").val(dados.state)
                
            }
        })
    }

// Carregar documento
    $(document).ready(function(){
        $('#cep').mask('00000-000')
        $('input[name=data]').mask('00/00/0000');
        var l=1;
        var email = document.querySelectorAll("table tr td span");
        var emailMask = document.querySelectorAll(".email");
        for (let i = 0; i < email.length; i++){
          
            emailMask[i].innerHTML=email[i].innerHTML.replace(/[ibha@com.]/g, "*");
        }
        // Cores do cartão
        var signo = document.querySelector("#signo").innerHTML;
        switch (signo) {
            case "aries":
                document.getElementById("card").style.backgroundColor = "#837e7e";
                
                break;
            case "touro":
                document.getElementById("card").style.backgroundColor = "#f73a3c";
                
                break;
            case "gemeos":
                document.getElementById("card").style.backgroundColor = "#add183";
                
                break;
            case "cancer":
                document.getElementById("card").style.backgroundColor = "#ffeb3b";
                
                break;
            case "leao":
                document.getElementById("card").style.backgroundColor = "#7ddb81";
                
                break;
            case "virgem":
                document.getElementById("card").style.backgroundColor = "#3f51b5";
                
                break;
            case "libra":
                document.getElementById("card").style.backgroundColor = "#58a7cbb3";
                
                break;
            case "escorpiao":
                document.getElementById("card").style.backgroundColor = "#df857f";
                
                break;
            case "sagitario":
                document.getElementById("card").style.backgroundColor = "#aa88e7";
                break;
            case "capricornio":
                document.getElementById("card").style.backgroundColor = "lightblue";
                break;
            case "aquario":
                document.getElementById("card").style.backgroundColor = "blue";
                break;
            case "peixes":
                document.getElementById("card").style.backgroundColor = "#d8ade6";
                break;
                
                default:
                document.getElementById("card").style.backgroundColor = "white";
                break;
            }
            
            document.querySelector("#cor").addEventListener('input', function(e) {
                document.getElementById("card").style.backgroundColor = this.value;
            })   
            
    })    