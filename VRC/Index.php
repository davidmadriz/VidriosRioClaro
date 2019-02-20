<?php session_start(); ?>
<html>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
<?php include("includes/head.php"); ?>

<body>


<?php
include("config/config.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['usuario']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['contrasenna']);

	if($user == "" || $pass == "") {
		echo "Usuario y/o contraseña incorrectos.";
		echo "<br/>";
		echo "<a href='index.php'>Regresar</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE usuario ='$user' AND contrasenna='$pass'")
					or die("Error en la ejecucion de la consulta.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['usuario'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['nombre'] = $row['nombre'];
			$_SESSION['id'] = $row['id'];
		} else {
				print "<script>alert(\"Usuario y/o contraseña incorrectos.\");window.location='home.php';</script>";
			 
		}

		if(isset($_SESSION['valid'])) {
			header('Location: home.php');			
		}
	}
} else {
?>
	  <form name="form1" method="post" action="">
    <div class="grad"></div>
    <div class="header">
     <img src="imgs/logotranspw.png" width="150px">
    </div>
    <br>
    <div class="login">
        <input type="text" placeholder="Usuario" name="usuario"><br>
        <input type="password" placeholder="Contraseña" name="contrasenna"><br><br>
        <button type="submit" name="submit" class="btn btn-default" style="width: 250px">Iniciar Sesion</button>
        <br><br>
      <a href='register.php'>Registar Usuarios</a>
    </div>

  </form>
<?php
}
?>
</body>
</html>
