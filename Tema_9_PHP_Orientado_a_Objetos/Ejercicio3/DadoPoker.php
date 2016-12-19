<?php
  class Dados {
    // atributos de clase
    private static $caras= ["As", "K", "Q", "J","7","8"];
    private static $tiradasTotales = 0;
   
    // métodos de clase
    public static function getTiradastotales() {
      return self::$tiradasTotales;
    }
    
    public static function setTiradastotales($tiradas) {
      self::$tiradasTotales = $tiradas;
    }
    
    //atributos de instancia
    private $caraMostrada;
    
    //Constructor
    public function __construct() {
      $this->caraMostrada = self::$caras[0];
    }
    
    //metodos de instancia
    public function tira(){
      $this->cara = self::$caras[rand(0, 5)];
      self::$tiradasTotales++;
    }
    
    public function nombreFigura(){
      return $this->caraMostrada;
    }
    
    
  }
