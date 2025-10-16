<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/b221190096/Crud-Animales/vendor/autoload.php";

    class Conexion {
        public static function conectar() {
           try {
                $servidor = "127.0.0.1";
                $puerto = "27017";
                $usuario = "backend";
                $password = "backend2025";
                $BD = "crud_animales";
                $cadenaConexion = "mongodb://" .
                    $usuario . ":" .
                    $password . "@" .
                    $servidor . ":" .
                    $puerto . "/" .
                    $BD .
                    "?authSource=admin";
                $cliente = new MongoDB\Client($cadenaConexion);
                return $cliente->selectDatabase($BD);
           } catch (\Throwable $th) {
               return $th->getMessage();
           }
        }
    }

?>

