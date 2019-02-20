<?php
if(
	
		!empty($_POST["cedula"])
		&&($_POST["nombre"]) 
		&&($_POST["apellidoUno"])
		&&($_POST["apellidoDos"])
		&&($_POST["direccion"])
		&&($_POST["tipoTrabajo"])
		&&($_POST["tipoVidrio"])
		&&($_POST["estatusTrabajo"])
		&&($_POST["detalleTrabajo"])

){
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


			$sql = "update controlclientes set 
				cedula=	\"$_POST[cedula]\",
				nombre=	\"$_POST[nombre]\", 
				apellidoUno=	\"$_POST[apellidoUno]\", 
				apellidoDos=	\"$_POST[apellidoDos]\", 
				direccion=	\"$_POST[direccion]\", 
				telefonoUno=	\"$_POST[telefonoUno]\",
				telefonoDos=	\"$_POST[telefonoDos]\",
				correo=	\"$_POST[correo]\",
				tipoTrabajo=	\"$_POST[tipoTrabajo]\",
				fhContrato=	\"$_POST[fhContrato]\",
				fhEntrega=	\"$_POST[fhEntrega]\",
				tipoVidrio=	\"$_POST[tipoVidrio]\",
				estatusTrabajo=	\"$_POST[estatusTrabajo]\",
				precio=	\"$_POST[precio]\",
				abonoTrabajo=	\"$_POST[abonoTrabajo]\",
				pendientePagar=	\"$_POST[pendientePagar]\",
				detalleTrabajo=	\"$_POST[detalleTrabajo]\",
				observaciones=	\"$_POST[observaciones]\"

				where id=".$_POST["id"];

			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='home.php';</script>";
	}	
		
	}
			echo "Ocurrio un error ejecutando la consulta, contacte a su proveedor al correo disow321@gmail.com, adjuntando en el asunto Error 2x0032DBQueryInsert";

	}	
		echo "<script type=\"text/javascript\">window.alert('Debe completar los datos requeridos por el sitema.');
		 window.history.back();</script>"; 
exit;

?>