<?php 

		$token = ($_POST["token"]);

		if ($token =="75XYOKSO") {
			
?>

<?php include("includes/head.php"); ?>
<body style="background-color: #009FDF">

<br><br>
<div class="form2" style="text-align: center;">
	<a href='home.php' class="float-right" style="padding-right: 15px;">Inicio</a>
	<a href='logout.php' class="float-right" style="padding-right: 15px;">Cerrar Sesion</a> 
	<br>
	<br>
	<br>
	<img src="imgs/logo.png" width="200px" style="padding-bottom: 15px">
	<h1 style="text-align: center; color: darkblue" >Control - Información de Usuarios</h1>



<?php 
  {	
  $sql1= "select * from usuarios";
  $query = $con->query($sql1);
  }
?>

	<table class="table" style="text-align: left;">
		<thead>
			<tr>
				<th>Nombre Completo</th>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th>Opciones</th>

			</tr>
		</thead>
		<tbody>
			<tr>
     <?php while ($r=$query->fetch_array()):?>
				
				<td><?php echo $r["nombre"]." ".$r["apellidoUno"]." ".$r["apellidoDos"]; ?></td>
				<td><?php echo $r["usuario"]; ?></td>
				<td><?php echo $r["contrasenna"]; ?></td>
				<td>
					
					<a href="eliminarUsuario.php?id=<?php echo $r["id"];?>" id="del-<?php echo $r["id"];?>" onclick="return confirm('¿Seguro de eliminar este usuario?')">Eliminar</a>
					
			</tr>
        <?php endwhile;?>
		</tbody>
	</table>
</div>


<?php 
		}else{
        print "<script>alert(\"Token incorrecto verifique el token si el problema persiste contacte a su proovedor del servicio.\"); window.history.back(); </script>";
			}

 ?>