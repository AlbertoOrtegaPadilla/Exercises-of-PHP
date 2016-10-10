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
    </head>
    <body>
        
        <h1>TEMA 4</h1>
        
        <b>Ejercicio 19: </b><p>Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado
        mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen
        de las 5 que se deben dar a elegir mediante un formulario.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <form method="get">
            <input type="text" name="numero" autofocus/>
            <select id="elem" name="elem">
		<option >*</option>
                <option >+</option>
        	<option >-</option>
		<option >Ç</option>
		<option >#</option>
            </select>
            <input type="submit" value="MONTAR"/>		  
        </form>
        
        <center>
            <?php
                if(isset($_GET["numero"])){
                    $n = $i = $_GET["numero"];
                    $simbolo=$_GET["elem"];
                    for($i=1;$i<=$n;$i++){
                        for($j=1;$j<=$i;$j++){
                            echo $simbolo;
                        }
                        echo "<br />";
                    }
                }
            ?>
        </center>
    </body>
</html>
