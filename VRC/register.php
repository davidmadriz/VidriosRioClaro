


<?php include("includes/head.php") ?>

<body style="background-color: blue">
	<br>

    <!-- Trigger the modal with a button -->
  <a style=" color: #ffffff; float: right; margin-right: 10px;" href="" data-toggle="modal" data-target="#myModal">  Mantenimiento de usuarios</a>
<p style=" color: #ffffff; float: right; margin-left: 10px; margin-right: 10px;"> | </p>
<a style=" color: #ffffff; float: right;" href="index.php">Incio</a>  



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Introduciar clave de registro</h4>
        </div>
        <div class="modal-body">
          <p>Insegreso a mantenimiento de usuarios.</p>
        </div>

        <form action="usuarios.php" method="POST">
        <input type="password" name="token" class=" form-control" style="margin-left: 10%; margin-bottom: 25px;text-align: center; width: 80%; font-size: 14px">
        <button type="submit" class="btn btn-default" style="margin-left:42%; margin-bottom: 10px">Verificar</button>
    </form>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



<?php
include("config/config.php");

if(isset($_POST['submit'])) {
	$name = $_POST['nombre'];
	$lastName1 = $_POST['apellidoUno'];
	$lastName2 = $_POST['apellidoDos'];
	$user = $_POST['usuario'];
	$pass = $_POST['contrasenna'];
	$token = $_POST['token'];





	if($name == "" || $lastName1 == "" || $lastName2 == "" || $user == "" || $pass == "" || $token != "75XYOKSO" ) {
    
        print "<script>alert(\"Verifique que el token ingresado sea el correcto, proporcionado por el administrador del sitio.\"); window.history.back(); </script>";
	
	} else {
		mysqli_query($mysqli, "INSERT INTO usuarios(nombre, apellidoUno, apellidoDos, usuario, contrasenna) VALUES('$name', '$lastName1', '$lastName2', '$user', '$pass')")
			or die("No se puede concluir con la insercion de datos.");
    

    print "<script>alert(\"Registrado satisfactoriamente.\");window.location='home.php';</script>";
	
	}
} else {
?>

<br>
<form class="form-horizontal" name="form1" method="post" action="" style="margin-left: 30%; margin-right: 30%; background-color: #eee; padding: 40px; border-radius: 15px; width: 40%">
<fieldset>

<!-- Form Name -->
<legend style="text-align:  center;">Registro de Nuevo usuario</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="nombre">Nombre</label>  
  <div class="col-md-9">
  <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="apellido">Apellido 1</label>  
  <div class="col-md-9">
  <input id="apellido" name="apellidoUno" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
	
<div class="form-group">
  <label class="col-md-3 control-label" for="apellido">Apellido 2</label>  
  <div class="col-md-9">
  <input id="apellido" name="apellidoDos" type="text" placeholder="" class="form-control input-md" required="">
  </div>
</div>
    



<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="contra">Usuario</label>
  <div class="col-md-9">
    <input id="usuario" name="usuario" type="text" placeholder="" class="form-control input-md" required="">
  </div>
</div>
    

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="contra2">Contraseña</label>
  <div class="col-md-9">
    <input id="contrasenna" name="contrasenna" type="password" placeholder="" class="form-control input-md" required="">
  </div>
</div>


<div class="form-group">
  <label class="col-md-3 control-label" for="contra2">Token</label>
  <div class="col-md-9">
    <input id="token" name="token" type="password" placeholder="" class="form-control input-md" required="">
  </div>
</div>
    
    <div class="form-group">
	  <label class="col-md-3 control-label""></label>
	  <div class="col-md-9">
	<input type="submit" name="submit" value="Registrar" class="btn btn-primary" style="width: 100%; height: 40px">
	    
	  </div>
	</div>
	</form>
<?php
}
?>
</body>
</html>
