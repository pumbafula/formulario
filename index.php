<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <form id="formulario01">
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
                <div class="valid-feedback">
                    Ingrese Nombre!
                </div>
            </div>
            <div class="form-group">
                <label>Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
                <div class="valid-feedback">
                    Ingrese Apellido!
                </div>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" id="email" name="email" required>
                <div class="valid-feedback">
                    Ingrese email!
                </div>
            </div>
            <div class="form-group">
                <label>Fecha Nacimiento:</label>
                <input type="date" class="form-control" id="fecnac" name="fecnac" required>
                <div class="valid-feedback">
                    Ingrese Fecha Nacimiento!
                </div>
            </div>
            <input id="btnenvia" type="button" value="enviar">
        </form>

        
        <script>
            $("#btnenvia").click(function(event){
                var form=$("#formulario01");
                
                if(form[0].checkValidity()===false){
                    event.preventDefault();
                    event.stopPropagation();    
                }
                else{
                    cargadatos();
                }
                form.addClass("was-validated");  
                
                
            });
            
            function cargadatos(){
                var nombre=$("nombre").val();
                var email=$("email").val();
                $("#mensaje").load("cargadatos.php",{"nombre":nombre,"email":email});
            }
            
        </script>
    </body>
</html>
