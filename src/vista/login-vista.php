<?php
try {
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if (empty($user) or empty($pass)) {
?>
            <div class="alert-danger alerta" id="AlertaNone">
                <p class="text-danger mb-0">No se debe dejar espacios en blanco</p>
            </div>


<?php
        } else {
            $newUser = new login();
            $resultado = $newUser->get_usuario($user, $pass);

            if (isset($_SESSION['login'])) {
                switch ($_SESSION['login']) {
                    case 'administrador':
                        echo 1;
                        break;
                    case 'usuario':
                        echo 2;
                        break;
                }
            }
        }
    }
} catch (Exception $er) {
    die('ERROR DE SESION ' . $er->getMessage());
}
