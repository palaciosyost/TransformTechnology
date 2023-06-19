<?php


class db
{
    public static function conexion()
    {
        try {
            $conexion = new PDO('mysql:host=localhost; dbname=login-php;', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec('set character set utf8');
        } catch (Exception $errConexion) {
            echo 'ERROR: ' . $errConexion->getMessage();
            die(' EN LA LINEA: ' . $errConexion->getLine());
        }
        return $conexion;
    }
}
