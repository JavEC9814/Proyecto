<?php
    $conn=mysqli_connect("localhost","root","","solmedi");

    $message = '';

    if (!empty($_POST['tusu']) && !empty($_POST['email']) && !empty($_POST['usu']) && !empty($_POST['pass'])){
        $sql = "INSERT INTO `usuario` (tipo_usuario, correo_usuario, nombre_usuario, contraseña) VALUES (:tipo_usuario, :correo_usuario, :nombre_usuario, :contraseña)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':tipo_usuario',$_POST['tusu']);
        $stmt->bindParam(':correo_usuario',$_POST['email']);
        $stmt->bindParam(':nombre_usuario',$_POST['usu']);
        $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
        $stmt->bindParam(':contraseña', $password);

       /* if ($stmt->execute()) {
            $message = 'Successfully created new user';
          } else {
            $message = 'Sorry there must have been an issue creating your account';
          }*/

        }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="shorcut icon" type="image/x-icon" href="../assets/img/pestaña.JPG"> 
    <title>Solmedi</title>
</head>
<body>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

<div class="tabl">
        <div><img class="logo"  src = "../assets/img/Logo.JPG"></div>
        <div class="ccan"><img class ="can" src = "../assets/img/usuario.png"></div>
        <form class="sign" action="signup.php" method="post">
            <input class="spa" type="text" name="tusu" placeholder="Digite el tipo de usuario" required>
            <input class="spa" type="email" name="email" placeholder="Digite su correo" required>
            <input class="spa" type="text" name="usu" placeholder="Digite su nombre" required>
            <input class="spa" type="password" name="pass" placeholder="Digite su contraseña" required>
            <input class="bt" type="submit" value="Enviar">
            <p><a href="login.php">Iniciar sesion</a></p>
        </form>
    </div>
</body>
</html>