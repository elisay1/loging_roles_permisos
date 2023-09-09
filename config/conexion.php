<?php
    // TODO: Iniciar la sesión (esto debe hacerse antes de cualquier salida al navegador)
    session_start();
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                /* TODO: Cadena de Conexion -Crear una instancia de PDO para la conexión*/
                $conectar = $this->dbh=new PDO("mysql:host=localhost;dbname=perdta", "root", "");
                return $conectar;
            }catch (Exception $e){
                // TODO: En caso de error, mostrar mensaje y detener el script
                print "Error Conexion BD". $e->getMessage() ."<br/>";
                die();
            }
        }

        public static function ruta(){
            /* TODO: Ruta de acceso del Proyecto */
            return "http://localhost:/sisper/";
        }
    }
?>