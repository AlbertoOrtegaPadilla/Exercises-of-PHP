<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Practica1</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
          
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Elige tu provincia</h1><br><br>
 
                <form action="elTiempo.php" method="get" class="col s12">
                        <select name="provincia" class="form-control">
                            <option selected disabled value="">Provincia</option>
                            <option value='Almería' >Almería</option>
                            <option value='Cádiz' >Cádiz</option>
                            <option value='Córdoba' >Córdoba</option>
                            <option value='Granada' >Granada</option>
                            <option value='Huelva' >Huelva</option>
                            <option value='Jaén' >Jaén</option>
                            <option value='Malaga' >Málaga</option>
                            <option value='Sevilla' >Sevilla</option>
                        </select>
                     <br>
                    <input type="submit" value="Enviar" id="enviar" class="btn btn-default">
                   
                </form>
        </div>
            
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    </body>
</html>
