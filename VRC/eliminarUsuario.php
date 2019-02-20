<?php
if(!empty($_GET)){
			include "config/config.php";
			
			$sql = "DELETE FROM usuarios WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='home.php';</script>";
				"window.history.back();</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='home.php';</script>";
			}
}
?>