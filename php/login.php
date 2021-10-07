<?php
$conn=mysqli_connect("localhost","root","","solmedi");
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$consulta="SELECT*FROM usuario where nombre_usuario ='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:../pages/inicio_Solmedi.html");

}else{
  echo '
  <script>
    alert("Datos incorrectos - Por favor verifique nuevamente")
  </script>
  
  '
    ?>
    <?php
    include("../pages/Login_Solmedi.html");

  ?>
  <!--<h1 class="bad">Datos incorrectos - Por favor verifique nuevamente</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);