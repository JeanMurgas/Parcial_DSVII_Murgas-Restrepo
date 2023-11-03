<?php
/**
 * clase para la conexion a la base de datos
 */
 
class ConnectionDB{
    /**declaracion variables para la conexion BD */
   private static $instance = null;
    private $servername = "localhost";
    private $username = "ds72023";
    private $password = "ds72023";
    private $dbname = "bdds7";

    private $conn;

    private function __construct(){
        try{
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            die();
        }
   }


   /**metodo para obtener la conexion a la BD */

   private function getInstance(){
    if($this->instance == null){
        $this->instance = new ConnectionDB();
   }
   return $this->instance;
}

/**permitir obtencion de la instancia a la conexion a la bd */
   public function getConnection(){
    return $this->conn;
   }

/**cerrar conexion a la base de datos */

public function closeConnection(){
    $this->conn = null;
}

}

?>