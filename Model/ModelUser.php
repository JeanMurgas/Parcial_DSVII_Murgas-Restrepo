<?php
require_once './Config/ConnectionDB.php';
class usuario{
    public $id_usuario;
    public $nombre;
    public $apellido;
    public $contrasena;
    public $email;
    private $pdo; 
    private $result;

    public function Login(){
        try{
            
        }catch(PDOException $e){
            echo "La contraseña o el usuario son incorrectos";
            return null;
        }
    }

    public function InsertarUser(Usuario $stmt){
        try{
            $query = "INSERT INTO `usuarios`(`id_user`, `nombre`, `apellido`, `email`, `pass`) VALUES (null,':nombre',':apellido',':email',':pass')";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $this->apellido, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':pass', $this->contrasena, PDO::PARAM_STR);
            $this->result = $stmt->execute();

            if ($this->result) {
                return true;
            } else {
                throw new Exception("No se pudo insertar el nuevo usuario");
            }
        }catch(PDOException $e){
            throw new Exception("Error al insertar el usuario: " . $e->getMessage());
            return null;
        }
    }

    public function InicioSesion(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->nombre = $_POST["nombre"];
            $this->contrasena = $_POST["contrasena"];
        
            // Realiza una consulta a la base de datos para verificar las credenciales
            $query = "SELECT * FROM usuarios WHERE nombre = :nombre";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if ($user && password_verify($this->contrasena, $this->nombre["contrasena"])) {
                // Las credenciales son válidas, inicia una sesión para el usuario
                session_start();
                $_SESSION["user_id"] = $this->nombre["id"];
        
                // Redirige al usuario a su página de inicio o a la página principal
                header("Location: ?op=menu");
                exit();
            } else {
                // Las credenciales no son válidas, muestra un mensaje de error
                $error_message = "Credenciales incorrectas. Por favor, intenta de nuevo.";
            }
        }
    }

}

?>