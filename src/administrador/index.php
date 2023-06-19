<?php
session_start();
if (isset($_GET['cerrar'])) {
    session_destroy();
    header('location: ../../index.php');
}

if (isset($_SESSION['login'])) {

    if ($_SESSION['login'] !== 'administrador') {
        header('location: ../../index.php');
    }
} else {
    if ($_SESSION['login'] !== 'administrador') {
        header('location: ../../index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>

<body>
    administrador
</body>

</html>