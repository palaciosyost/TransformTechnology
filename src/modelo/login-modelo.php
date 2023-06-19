<?php

class login
{
    private $database;
    public function __construct()
    {
        require_once 'conexion.php';
        $this->database = db::conexion();
    }

    public function get_usuario($user, $pass)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE correo = :user AND contraseña = :pass ";
            $query = $this->database->prepare($sql);
            $query->bindValue(':user', $user);
            $query->bindValue(':pass', $pass);
            $query->execute();
            $resul = $query->fetch(PDO::FETCH_ASSOC);

            if ($resul) {
                $rol = $resul['rol'];
                session_start();
                $_SESSION['login'] = $rol;
            } else {
?>
                <div class="alert-danger" id="AlertaNone">
                    <p class="text-danger mb-0">ERROR credenciales no encontrados</p>
                </div>


<?php
            }
        } catch (Exception $erLogin) {
            echo 'ERROR: ' . $erLogin->getMessage();
            die(' EN LA LINEA: ' . $erLogin->getLine());
        }
        return $resul;
    }
}
