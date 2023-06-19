<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="bg"></div>
    <div class="contenedor">
        <img src="./src/img/logo.png" alt="logo.png">
        <div class="alertas">
        
        </div>
        <div class="content">
            <div class="titulo">
                <h1>Inicia Sesion</h1>
                <p>Transform Technology</p>
            </div>
            <form id="form" method="post">
                <div class="form form-user">
                    <div class="content-form">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px;" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <input type="text" name="user" placeholder="Usuario">
                    </div>


                </div>
                <div class="form form-password">
                    <div class="content-form">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px;" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        </svg>
                        <input type="password" name="pass" placeholder="Contraseña">
                    </div>

                </div>
                <div class="enlaces">
                    <span>no tienes cuenta? registrate <a href="">aqui..</a> </span>
                </div>
                <input type="submit" value="Ingresar" class="btn-principal">
            </form>
        </div>
    </div>
    <script src="./src/js/ajax.js"></script>
    <script src="./src/js/tempAlert.js"></script>
</body>

</html>