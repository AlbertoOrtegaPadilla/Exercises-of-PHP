<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>

        </style>
    </head>
    <body>
        <br><br><br>
        <div class="container">
            <?php
                $provincia = $_GET['provincia'];
                $request = "http://api.openweathermap.org/data/2.5/weather?q=".$provincia.",\Spain&units=metric&appid=8f297e05f231b51cf0c3aa3be4ecfbf3";
                $datos = file_get_contents($request);
                $tiempo = json_decode($datos);
                echo "<h2 class=\"text-center\">El tiempo en ".$provincia." <a href=\"index.php\" class=\"btn btn-default\">Volver</a></h2><br>";
                echo "<p class=\"text-center\">Temperatura: ".$tiempo->{"main"}->{"temp"}."ºC</p>";
                echo "<p class=\"text-center\">Humedad: ".$tiempo->{"main"}->{"humidity"}."%</p>";
                echo "<p class=\"text-center\">Presión: ".$tiempo->{"main"}->{"pressure"}."mb</p>";
            ?>
        </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </body>
</html>