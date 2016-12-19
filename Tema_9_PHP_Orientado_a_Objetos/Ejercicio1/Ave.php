<?php

include_once 'Animal.php';

class Ave extends Animal {
  
  public function __construct($s) {
    parent::__construct($s);
  }
  
  public function aseate() {
    return "<img src=\"https://i.ytimg.com/vi/TgVsdUrOOuo/hqdefault.jpg \">";
  }
  
  public function vuela() {
    return "3.....2....1.....<img src=\"http://cdn1.wallpapersok.com/uploads/picture/504/103/103504/ptica-pcheloedka-schurka.jpg?width=665 \">";
  }
  
  public function ponHuevo() {
    if ($this->getSexo() == "macho") {
      return "Soy macho, no puedo poner huevos peeeero.....<br><br>"
        . "<img src=\"http://img.desmotivaciones.es/201103/Animals16.jpg \">";
    } else {
      return "<img src=\"http://2.bp.blogspot.com/-ILHjcNrKuQM/T2dKbLBw5BI/AAAAAAAAAII/0wtD0epTrYY/s1600/3.jpg \">";
    }
  }
}