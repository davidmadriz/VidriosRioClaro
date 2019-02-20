
<?php 
	// VALIDAR DATOS REQUERIDOS
	if (
		!empty($_POST["cedula"])
		&&($_POST["nombre"]) 
		&&($_POST["apellidoUno"])
		&&($_POST["apellidoDos"])
		&&($_POST["direccion"])
		&&($_POST["tipoTrabajo"])
		&&($_POST["tipoVidrio"])
		&&($_POST["estatusTrabajo"])
		&&($_POST["detalleTrabajo"])
	) {
	// INSERTAR LOS DATOS EN AL BD

		if(
			isset($_POST["cedula"]) 
			&&isset($_POST["nombre"]) 
			&&isset($_POST["apellidoUno"]) 
			&&isset($_POST["apellidoDos"]) 
			&&isset($_POST["direccion"]) 
			&&isset($_POST["telefonoUno"])
			&&isset($_POST["telefonoDos"])
			&&isset($_POST["correo"])
			&&isset($_POST["tipoTrabajo"])
			&&isset($_POST["fhContrato"])
			&&isset($_POST["fhEntrega"])
			&&isset($_POST["tipoVidrio"])
			&&isset($_POST["estatusTrabajo"])
			&&isset($_POST["precio"])
			&&isset($_POST["abonoTrabajo"])
			&&isset($_POST["pendientePagar"])
			&&isset($_POST["detalleTrabajo"])
			&&isset($_POST["observaciones"])
		){
			include "config/config.php";
	
			$sql = "insert into controlclientes(cedula, nombre, apellidoUno, apellidoDos, direccion, telefonoUno, telefonoDos, correo, tipoTrabajo, fhContrato, fhEntrega, tipoVidrio, estatusTrabajo, precio, abonoTrabajo, pendientePagar, detalleTrabajo, observaciones) value ( 
						\"$_POST[cedula]\", 
						\"$_POST[nombre]\", 
						\"$_POST[apellidoUno]\", 
						\"$_POST[apellidoDos]\", 
						\"$_POST[direccion]\", 
						\"$_POST[telefonoUno]\",
						\"$_POST[telefonoDos]\",
						\"$_POST[correo]\",
						\"$_POST[tipoTrabajo]\",
						\"$_POST[fhContrato]\",
						\"$_POST[fhEntrega]\",
						\"$_POST[tipoVidrio]\",
						\"$_POST[estatusTrabajo]\",
						\"$_POST[precio]\",
						\"$_POST[abonoTrabajo]\",
						\"$_POST[pendientePagar]\",
						\"$_POST[detalleTrabajo]\",
						\"$_POST[observaciones]\")";


			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='home.php';</script>";
	}	
		
	}
			echo "Ocurrio un error ejecutando la consulta, contacte a su proveedor al correo disow321@gmail.com, adjuntando en el asunto Error 2x0032DBQueryInsert";

	}	
		echo "<script type=\"text/javascript\">window.alert('Debe completar los datos requeridos por el sitema.');
		 window.history.back();</script>"; 
exit;


?>