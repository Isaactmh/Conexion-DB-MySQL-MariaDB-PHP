<?php

//Conexion DB
class Conexion
{
    public function conectar(){
        //Server
        $host = "localhost";  //IP o nombre del servidor (MySQL o MariaDB)
        $user = "root";       // Usuario de la Base de datos
        $pass = "1021";       // Contraseña de la cuenta de usuario
        $db   = "Tecnicomp"; //Base de datos a la que va la Conexion
        $encoding = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); //Recodifica el resultado en UTF8 para evotar problema con acentos y ñ

        try{
            $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass, $encoding);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo "Error al conectar con MySQL ".$e->getMessage();
        }
    }
}
