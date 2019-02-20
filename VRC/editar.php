
<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: index.php');
}
?>



<?php include("includes/head.php"); ?>
<?php include("includes/header.php"); ?>

<body style="background-color: #009FDF">
<br><br>


<form action="editado.php" class="form" method="POST" >

<a href="home.php" class="btn btn-info" style="margin-left: 20px; margin-top:20px">Regresar</a>

    <div style="text-align: center; padding-top: 20px;">
        <img src="imgs/logo.png" width="200px">
    </div>

    <h3 style="text-align: center; color: gray; padding-top: 20px">EDITAR INFORMACIÓN</h3>
<ul class="form-style-1">

<?php include("config/config.php"); ?>

<?php

    $user_id=null;
    $busquedaUnica= "select * from controlclientes where id = ".$_GET["id"];
    $query = $con->query($busquedaUnica);
    $bu = null;
    if($query->num_rows>0){
    while ($r=$query->fetch_object()){
      $bu=$r;
      break;
    }
      }
?>



    <li>
    	<label>Identificación<span class="required">*</span></label>
    	<input type="text" name="cedula" class="field-long" value="<?php echo  $bu->cedula; ?>" /> 
    </li>

    <li>
    	<label>Nombre Completo <span class="required">*</span></label>
    	<input type="text" name="nombre" class="field-divided" value="<?php echo $bu->nombre; ?>" /> 
    	<input type="text" name="apellidoUno" class="field-divided" value="<?php echo $bu->apellidoUno; ?>"/>
    	<input type="text" name="apellidoDos" class="field-divided" value="<?php echo $bu->apellidoDos; ?>"/>
    </li>
	
    <li>
    	<label>Dirección<span class="required">*</span></label>
    	<input type="text" name="direccion" class="field-long" value="<?php echo $bu->direccion; ?>" /> 
    </li>

    <li>
    	<label>Contacto <span class="required">*</span></label>
    	<input type="text" name="telefonoUno" class="field-divided1" value="<?php echo $bu->telefonoUno; ?>" /> 
    	<input type="text" name="telefonoDos" class="field-divided1" value="<?php echo $bu->telefonoDos; ?>" /> 
    	<br><br>
    	<input type="email" name="correo" class="field-long" value="<?php echo $bu->correo; ?>" /> 
    </li>

    <li>
    	<label>Tipo de Trabajo <span class="required">*</span></label>
    	<select class="field-select" name="tipoTrabajo" >
            <option><?php echo $bu->tipoTrabajo; ?></option>
    		<option>Cotización</option>
    		<option>Contrato</option>
    	</select> 
    </li>
    <li>
    	<label>Tipo de Vidrio <span class="required">*</span></label>
    	<input type="text" name="tipoVidrio" class="field-long"	 value="<?php echo $bu->tipoVidrio; ?>" /> 
    </li>


    <li>
        <label class="float-right">Fecha de Entrega <span class="info">(Si aplica)</span></label>
        <label class="field-divided1">Fecha de Contrato <span class="info">(Si aplica)</span></label>
        <input type="date" name="fhContrato" class="field-divided1"  value="<?php echo $bu->fhContrato; ?>">

        <input type="date" name="fhEntrega" class="field-divided1" style="text-align: right"  value="<?php echo $bu->fhEntrega; ?>">     
    </li>

    <li>
    	<label>Estatus de Trabajo <span class="required">*</span></label>
    	<select class="field-select" name="estatusTrabajo">
            <option><?php echo $bu->estatusTrabajo; ?></option>
    		<option>Pendiente</option>
    		<option>Terminado</option>
    		<option>Cancelado por Cliente</option>
    		<option>Cancelado por incumplimiento de contrato</option>
    	</select>
    </li>
    <li>
    	<label>Precio de Trabajo CRC </label>
    	<input type="text" name="precio" class="field-long" value="<?php echo $bu->precio; ?>" />
    </li>
	<li>
    	<label>Abono al pago CRC </label>
    	<input type="text" name="abonoTrabajo" class="field-long"  value="<?php echo $bu->abonoTrabajo; ?>" /> 
    </li>
    <li>
    	<label>Pendiente de Pago CRC </label>
    	<input type="text" name="pendientePagar" class="field-long" value="<?php echo $bu->pendientePagar; ?>" /> 
    </li>
    <li>
        <label>Detalle de Trabajo <span class="required">*</span></label>
        <textarea name="detalleTrabajo" class="field-long field-textarea" > <?php echo $bu->detalleTrabajo; ?> </textarea>
    </li>

     <li>
        <label>Observaciones </label>
        <textarea name="observaciones" class="field-long field-textarea" ><?php echo $bu->observaciones; ?></textarea>
    </li>

    <li>
        <input type="hidden" name="id" value="<?php echo $bu->id; ?>">
        <input type="submit" value="Guardar" class="btn btn-info" />
    </li>
</ul>
</form>




</body>
</html>
