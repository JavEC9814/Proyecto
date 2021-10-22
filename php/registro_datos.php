<?php
    include 'Database.php';
    $doc_paciente = $_POST['numdoc'];
    $tipo_documento = $_POST['docu'];
    $nombre = $_POST['nom'];
    $apellido = $_POST['apell'];
    $genero = $_POST['gen'];
    $fecha_nacmiento = $_POST['naci'];
    $telefono = $_POST['tel'];
    $direcicon = $_POST['direc'];
    $EPS = $_POST['eps'];

    $sql = "INSERT INTO paciente (doc_paciente, tipo_documento, nombre, apellido, genero, fecha_nacmiento, telefono, direcicon, EPS) 
    VALUES ('$doc_paciente','$tipo_documento','$nombre','$apellido','$genero','$fecha_nacmiento','$telefono','$direcicon','$EPS')";

    $ver_documento = mysqli_query($conn, "SELECT * FROM paciente WHERE doc_paciente = '$doc_paciente'");

if(mysqli_num_rows($ver_documento) > 0){
    echo'
    <script>
    alert("Documento ya registrado, verifique nuevamente")
    window.location = "../../Proyecto/pages/inicio_Solmedi.html"
    </script>
    ';
    exit();
  }

  $ejecu = mysqli_query($conn, $sql);

  if($ejecu){
    echo '
    <script>
      alert("Datos agregados correctamente")
      window.location = "../../Proyecto/pages/registro_datos_Solmedi.html"
    </script>
    ';

}else{
  echo '
  <script>
    alert("Eror - No fue posible cargar los datos - intente nuevamente")
    window.location = "../../Proyecto/pages/registro_paciente_Solmedi.html"
  </script>
  
  ';
}
mysqli_close($conn);

?>