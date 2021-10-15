<?php
    include 'Database.php';
    $tipo_usuario = $_POST['tusu'];
    $correo_usuario = $_POST['email'];
    $nombre_usuario = $_POST['usu'];
    $password = $_POST['pass'];
    
    $sql = "INSERT INTO usuario (tipo_usuario, correo_usuario, nombre_usuario, contraseña) 
            VALUES ('$tipo_usuario','$correo_usuario','$nombre_usuario','$password')";

    $ver_correo = mysqli_query($conn, "SELECT * FROM usuario WHERE correo_usuario = '$correo_usuario'");
    $ver_usuario = mysqli_query($conn, "SELECT * FROM usuario WHERE nombre_usuario = '$nombre_usuario'");

    if(mysqli_num_rows($ver_correo) > 0){
      echo'
      <script>
      alert("Correo ya registrado, intente nuevamente")
      window.location = "../../Proyecto/index.html"
      </script>
      ';
      exit();
    }

    if(mysqli_num_rows($ver_usuario) > 0){
      echo'
      <script>
      alert("Usuario ya registrado, intente nuevamente")
      window.location = "../../Proyecto/index.html"
      </script>
      ';
      exit();
    }

    $ejecu = mysqli_query($conn, $sql);

    if($ejecu){
      echo '
      <script>
        alert("Datos agregados correctamente")
        window.location = "../../Proyecto/index.html"
      </script>
      ';
  
  }else{
    echo '
    <script>
      alert("Eror - No fue posible cargar los datos - intente nuevamente")
      window.location = "../../Proyecto/index.html"
    </script>
    
    ';
  }
  mysqli_close($conn);
?> 
