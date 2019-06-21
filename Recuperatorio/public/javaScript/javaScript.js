var document=document || {};
var window = window || {};

  window.onload = function() {
              document.getElementById('otro').onclick = function () {
                   
  
                  var div =document.getElementById("padre");
 var clon = document.getElementById('formu').cloneNode(false);
                  var clon1 = document.getElementById('nombre').cloneNode(false);
                  var clon2 = document.getElementById('email').cloneNode(false);
                  var clon3 = document.getElementById('nota1').cloneNode(false);
var clon1 = document.getElementById('nota2').cloneNode(false);
                  var clon4 = document.getElementById('nota3').cloneNode(false);
                  var clon5 = document.getElementById('enviarb').cloneNode(false);
                  clon5.setAttribute("type","submit");
                  var clon6 = document.getElementById('otro').cloneNode(false);
                  
                  clon.appendChild(clon1);
                  clon.appendChild(clon2);
                  clon.appendChild(clon3);
                  clon.appendChild(clon4);
                  clon.appendChild(clon5);
                  clon.appendChild(clon6);
                  
                  div.appendChild(clon);
                  
                  
                 /* var formulario=document.createElement('form');
                 
                        var inputnom  =document.createElement('input');
                  inputnom.setAttribute("name","nombre");
                  
                        var inputemail  =document.createElement('input');
                  inputemail.setAttribute("name","email");
              
                        var inputnota1  =document.createElement('input');
                  inputnota1.setAttribute("name","primerNota");
                        var inputnota2  =document.createElement('input');
                  inputnota2.setAttribute("name","segundaNota");
                        var inputnota1  =document.createElement('input');
                  inputnota3.setAttribute("name","tercerNota");
                  
                 formulario.appendChild(inputnom);
                  formulario.appendChild(inputemail);
                  formulario.appendChild(inputnota1);
                  formulario.appendChild(inputnota2);
                  formulario.appendChild(inputnota3);
                  
              div.appendChild(formulario);
            
              
              */
              }
            

  
  
  

  }
    