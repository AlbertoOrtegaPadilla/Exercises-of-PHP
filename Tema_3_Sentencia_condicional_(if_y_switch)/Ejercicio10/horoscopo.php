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
        
        <h1>TEMA 3</h1>
        
        <b>RESULTADO: </b><br><br>
        
        <?php
            $dia = $_GET['d'];
            $mes = $_GET['m'];
            
            switch($mes) {
                case "enero":
                    if (($dia >= 1 && $dia <= 19) || ($dia == 20)) {
                        
                        echo "ERES CAPRICORNIO.";
                    } else if ($dia >= 20 && $dia <= 31) {
                        
                        echo "ERES AQUARIO.";
                    }else {
                        
                        echo " Error! Seguramente te equivocastes en algo  verificalo: dia = $dia, mes = $mes";
                    }
                break;
                case "febrero":
                    if ($dia >= 1 && $dia <= 18) {
                        
                        echo "ERES AQUARIO.";
                    }else if ($dia >= 19 && $dia <= 28) {
                        
                        echo "ERES PISCIS.";
                    }else {
                        
                        echo " Error! Seguramente te equivocastes en algo  verificalo: dia = $dia, mes = $mes";
                    }
                break;
                case "marzo":
                    if ($dia >= 1 && $dia <= 20) {
                        
                        echo "ERES PISCIS.";
                    }else if ($dia >= 21 && $dia <= 31) {
                        
                        echo "ERES ARIES.";
                    }else {
                        
                        echo " Error! Seguramente te equivocastes en algo  verificalo: dia = $dia, mes = $mes";
                    }
                break;
                case "abril":
                    if ($dia >= 1 && $dia <= 20) {
                        
                        echo "ERES ARIES.";
                    }else if ($dia >= 21 && $dia <= 30) {
                        
                        echo "ERES TAURO.";
                    }else {
                        
                        echo " Error! Seguramente te equivocastes en algo  verificalo: dia = $dia, mes = $mes";
                    }
                break;
                case "mayo":
                    if ($dia >= 1 && $dia <= 20) {
                        
                        echo "ERES TAURO.";
                    }else if ($dia >= 21 && $dia <= 31) {
                        
                        echo "ERES GEMINIS.";
                    }else {
                        
                        echo " Error! Seguramente te equivocastes en algo  verificalo: dia = $dia, mes = $mes";
                    }
                break;
                case "junio":
                    if ($dia >= 1 && $dia <= 20) {
                        
                        echo "ERES GEMINIS.";
                    }else if ($dia >= 21 && $dia <= 30) {
                        
                        echo "ERES CANCER.";
                    }else {
                        
                        echo " Error! Seguramente te equivocastes en algo  verificalo: dia = $dia, mes = $mes";
                    }
                break;
                case "julio":
                    if ($dia >= 1 && $dia <= 20) {
                        
                        echo "ERES CANCER.";
                    }else if ($dia >= 21 && $dia <= 31) {
                        
                        echo "ERES LEO.";
                    }else {
                        
                        echo " Error! Seguramente te equivocastes en algo  verificalo: dia = $dia, mes = $mes";
                    }
                break;
                case "agosto":
                    if ($dia >= 1 && $dia <= 20) {
                        
                        echo "ERES LEO.";
                    }else if ($dia >= 21 && $dia <= 31) {
                        
                        echo "ERES VIRGO.";
                    }else {
                        
                        echo " Error! Seguramente te equivocastes en algo  verificalo: dia = $dia, mes = $mes";
                    }
                break;
                case "septiembre":
                    if ($dia >= 1 && $dia <= 22) {
                        
                        echo "ERES VIRGO.";
                    }else if ($dia >= 23 && $dia <= 30) {
                        
                        echo "ERES LIBRA.";
                    }else {
                        
                        echo " Error! Seguramente te equivocastes en algo  verificalo: dia = $dia, mes = $mes";
                    }
                break;
                case "octubre":
                    if ($dia >= 1 && $dia <= 22) {
                        
                        echo "ERES LIBRA.";
                    }else if ($dia >= 23 && $dia <= 30) {
                        
                        echo "ERES ESCORPIO.";
                    }else {
                        
                        echo " Error! Seguramente te equivocastes en algo  verificalo: dia = $dia, mes = $mes";
                    }
                break;
                case "noviembre":
                    if ($dia >= 1 && $dia <= 22) {
                        
                        echo "ERES ESCORPIO.";
                    }else if ($dia >= 23 && $dia <= 30) {
                        
                        echo "ERES SAGITARIO.";
                    }else {
                        
                        echo " Error! Seguramente te equivocastes en algo  verificalo: dia = $dia, mes = $mes";
                    }
                break;
                case "diciembre":
                    if ($dia >= 1 && $dia <= 20) {
                        
                        echo "ERES SAGITARIO.";
                    }else if ($dia >= 21 && $dia <= 31) {
                        
                        echo "ERES CAPRICORNIO.";
                    }else {
                        
                        echo " Error! Seguramente te equivocastes en algo  verificalo: dia = $dia, mes = $mes";
                    }
                break;
                default:
                    
                    echo " Error! Seguramente te equivocastes en algo  verificalo: <b>DIA</b> = $dia, <b>MES</b> = $mes";
            }
        ?>
    </body>
</html>
