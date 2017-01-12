<?php

    session_start();
    
    $codigo = $_POST['codigo'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    if(isset($titulo)){
        $_SESSION['codigo'] = $codigo;
        $_SESSION['titulo'] = $titulo;
        $_SESSION['contenido'] = $contenido;
    }

    // Carga la vista del formulario de Modificar de Articulos
    include '../view/formularioModificarArticulo.php';
