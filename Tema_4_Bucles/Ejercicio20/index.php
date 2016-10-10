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
        
        <b>Ejercicio 20: </b><p>Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <form method="get">
            <input type="text" name="numero" autofocus/>
            <select id="elem" name="elem">
		<option >*</option>
		<option >#</option>
            </select>
            <input type="submit" value="MONTAR"/>		  
        </form>
        
        <?php
            echo "<br><br>";
            if(isset($_GET["numero"])){
                $n = $i = $_GET["numero"];
                $simbolo=$_GET["elem"];
                    
                for($i = 0; $i < $n; $i++) {
                    for($j = 0; $j < $n - ($i + 1); $j++) {
                        echo "&nbsp;&nbsp;";
                    }
                    for($j = 0; $j < $i * 2 + 1; $j++) {
                        if ($i == 0 || $i == $n - 1 || $j == 0 || $j == $i * 2) {
                            echo $simbolo;
                        } else {
                                echo "&nbsp;&nbsp;";
                            }
                    }
                        echo "<br>";
                }
            }
        ?>
    </body>
</html>
