<?php

    require_once 'twig/lib/Twig/Autoloader.php';
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
    $twig = new Twig_Environment($loader);
    
    $codigo = $_POST['codigo'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    // Carga la vista del formulario de Modificar de Articulos
    echo $twig->render('formularioModificarArticulo.html.twig', ['codigo' => $codigo,
                                                                    'titulo' => $titulo,
                                                                    'contenido' => $contenido]);
