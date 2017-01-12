<?php

require_once 'Conexion.php';

class Articulo {
  private $codigo;
  private $titulo;
  private $fecha;
  private $contenido;
  
  function __construct($codigo, $titulo, $fecha, $contenido) {
    $this->codigo = $codigo;
    $this->titulo = $titulo;
    $this->fecha = $fecha;
    $this->contenido = $contenido;
  }

  public function getCodigo() {
    return $this->codigo;
  }

  public function getTitulo() {
    return $this->titulo;
  }

  public function getFecha() {
    return $this->fecha;
  }

  public function getContenido() {
    return $this->contenido;
  }  
  
  public function insert() {
    $conexion = Conexion::connectDB();
    $insercion = "INSERT INTO articulo (titulo, contenido) VALUES (\"".$this->titulo."\", \"".$this->contenido."\")";
    $conexion->exec($insercion);
  }

  public function delete() {
    $conexion = Conexion::connectDB();
    $borrado = "DELETE FROM articulo WHERE codigo=\"".$this->codigo."\"";
    $conexion->exec($borrado);
  }
  
  public function update() {
    $conexion = Conexion::connectDB();
    $update = "UPDATE articulo SET titulo=\"".$this->titulo."\", contenido=\"$this->contenido\" WHERE codigo=\"$this->codigo\"";

    $conexion->exec($update);
  }
  
  public static function getArticulos() {
    $conexion = Conexion::connectDB();
    $seleccion = "SELECT codigo, titulo, fecha, contenido FROM articulo";
    $consulta = $conexion->query($seleccion);
    
    $articulos = [];
    
    while ($registro = $consulta->fetchObject()) {
      $articulos[] = new Articulo($registro->codigo, $registro->titulo, $registro->fecha, $registro->contenido);
    }
    
    return $articulos; 
  }
}
