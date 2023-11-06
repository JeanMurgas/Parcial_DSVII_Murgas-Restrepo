<?php
require_once('C:\xampp\htdocs\Parcial_DSVII_Murgas-Restrepo\Model\db.php');
class ticket{
    public $titulo;
    public $descripcion;
    public $fecha_creacion;
    public $estado; #Esta variable se usa para manejar estados(abierto, cerrado, en proceso)
    private $pdo; 
    private $result;

    public function __construct()
    {
        $this->pdo = Db::StartUp();
    }

    public function _CrearTicket(){
        try{
            $query = "INSERT INTO `ticket`(`id_ticket`, `titulo`, `descripcion`, `fecha_creacion`, `estado`) VALUES (null, :nombre, :apellido, :email, :contrasena)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':titulo', $this->titulo, PDO::PARAM_STR);
            $stmt->bindParam(':descripcion', $this->descripcion, PDO::PARAM_STR);
            $stmt->bindParam(':fecha_creacion', $this->fecha_creacion, PDO::PARAM_STR);
            $stmt->bindParam(':estado', $this->estado, PDO::PARAM_STR);
            
            if ($stmt->execute()) {
                return true;
            } else {
                throw new Exception("No se pudo insertar el nuevo usuario");
            }
        } catch(PDOException $e){
            throw new Exception("Error al insertar el usuario: " . $e->getMessage());
            return null;
        }
    }

}
?>