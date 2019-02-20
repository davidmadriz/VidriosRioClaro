
<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: index.php');
}
?>



<?php include("includes/head.php"); ?>
<body style="background-color: #009FDF">

<br><br>
<div class="form2" style="text-align: center;">
	<a href='logout.php' class="float-right" style="padding-right: 15px;">Cerrar Sesion</a>


	





	<br>
	<br>
	<img src="imgs/logo.png" width="200px" style="padding-bottom: 15px">
	<a href="nuevoRegistro.php" class="btn btn-info">Nuevo Registro</a>
	<a href="tareasDiarias.php" target="_blank" class="btn btn-info">Control de Tareas</a>
	<h1 style="text-align: center; color: darkblue" >Control - Información de Clientes</h1>



<?php 
  {	
  $sql1= "select * from controlclientes";
  $query = $con->query($sql1);
  }
?>

	<table class="table" style="text-align: left;">
		<thead>
			<tr>
				<th>Cedula</th>
				<th>Nombre Completo</th>
				<th>Teléfono</th>
				<th>Correo</th>
				<th>Estatus de Trabajo</th>
				<th>Opciones</th>

			</tr>
		</thead>
		<tbody>
			<tr>
     <?php while ($r=$query->fetch_array()):?>
				
				<td><?php echo $r["cedula"]; ?></td>
				<td><?php echo $r["nombre"]." ".$r["apellidoUno"]." ".$r["apellidoDos"]; ?></td>
				<td><?php echo $r["telefonoUno"]; ?> | <?php echo $r["telefonoUno"]; ?></td>
				<td><?php echo $r["correo"]; ?></td>
				<td><?php echo $r["estatusTrabajo"]; ?></td>
				<td>
					<a href="editar.php?id=<?php echo $r["id"];?>">Editar</a>
					|
					 <a href="mostrar.php?id=<?php echo $r["id"] ?>">Mostar</a> 
					|
					<a href="eliminarRegistro.php?id=<?php echo $r["id"];?>" id="del-<?php echo $r["id"];?>" onclick="return confirm('¿Seguro de eliminar este Registro?')">Eliminar</a>
					
			</tr>
        <?php endwhile;?>
		</tbody>
	</table>
</div>

</html>