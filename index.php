<?php
  if (isset($_POST['btn_enviar'])) 
  {
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contraseña = $_POST['contraseña'];
    $fecha = $_POST['fecha'];
    $url = $_POST['url'];
  }; 
  include("validaciones.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Actividad #1</title>
  <meta charset="utf-8">
  <link rel="stylesheet"  href="css/styles.css">
</head>
<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <h2>Formulario</h2>
    <label>Tratamiento</label>
    <select name="tratamiento">
      <option value="sr" selected="selected">Sr.</option>
      <option value="sra">Sra.</option>
      <option value="dr">Dr.</option>
      <option value="dra">Dra.</option>
    </select > 
    <label>Nombre</label>
    <input type="text" name="nombre" placeholder="Nombre" value="<?php if (isset($nombre)) {echo $nombre;}?>" pattern="[A-Za-z ]+" required="">
    <label>ID</label>
    <input type="number" name="dni" placeholder="ID" value="<?php if (isset($dni)) {echo $dni;}?>"  required="">
    <label>Email</label>
    <input type="text" name="correo" placeholder="Email" value="<?php if (isset($email)) {echo $email;}?>" required="">
    <label>Telefono</label>
    <input type="number" name="telefono" placeholder="Telefono" value="<?php if (isset($telefono)) {echo $telefono;}?>" required="">
    <label>Contraseña</label>
    <input type="password" name="contraseña" placeholder="Contraseña" value="<?php if (isset($contraseña)) {echo $contraseña;}?>"  required="">
    <label>Fecha</label>
    <input type="date" name="fecha" placeholder="Fecha" value="<?php if (isset($fecha)) {echo $fecha;}?>" required="">
    <label>URL</label>
    <input type="text" name="url" placeholder="URL" value="<?php if (isset($url)) {echo $url;}?>" required="">
    <input type="submit" value="enviar" name="btn_enviar" id="Boton" >    
  </form>
  <div class="valida"></div>
</body>
</html>
