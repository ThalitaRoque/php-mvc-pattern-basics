<?php

  class Conectar {

    public static function conexion(){
        $conexion = new mysqli("localhost:3307", "root", "", "mvc0");
        return $conexion;

    }
  }


?>