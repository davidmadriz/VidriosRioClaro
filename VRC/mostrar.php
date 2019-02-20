
<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: index.php');
}
?>

<?php include("includes/head.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("config/config.php"); ?>


<?php
$user_id=null;
$sql1= "select * from controlclientes where id = ".$_GET["id"];
$query = $con->query($sql1);
$cliente = null;
if($query->num_rows>0){
while ($c=$query->fetch_object()){
  $cliente=$c;
  break;
}
  }
?>
<body style="background-color: #009FDF"> <br><br> 


<div class="form2">
    <a href="home.php" class="btn btn-info" style="margin-left: 20px; margin-top:20px">Regresar</a>
    <a href="#.php" class="btn btn-info" style="margin-left: 20px; margin-top:20px">Imprimir</a>
    

    <div style="margin: 20px; padding-bottom: 20px;" >
    <img src="imgs/logo.png" width="150px" class="float-right" style="margin: 0px;">
        <h3>Ficha de Cliente</h3>
        <hr>
                     
        <table  width="100%">
           
            <tbody>
            <tr>
                <td class="td1">Nombre de Cliente</td>
                <td class="td2"><?php echo $cliente->nombre; ?> 
                                <?php echo $cliente->apellidoUno; ?>
                                <?php echo $cliente->apellidoDos; ?>
                </td>
            </tr>

            <tr>
                <td class="td1">Identificación</td>
                <td class="td2"><?php echo $cliente->cedula; ?></td>
            </tr>

            <tr>
                <td class="td1">Contacto</td>
                 <td class="td2"><?php echo $cliente->telefonoUno; ?>   &middot; 
                                <?php echo $cliente->telefonoDos; ?>    &middot;  
                                <?php echo $cliente->correo; ?>
                </td>
            </tr>

            <tr>
                <td class="td1">Dirección</td>
                <td class="td2"><?php echo $cliente->direccion; ?></td>
            </tr>

              <tr>
                <td class="td1">Tipo de Trabajo</td>
                <td class="td2"><?php echo $cliente->tipoTrabajo ; ?></td>
            </tr>

            <tr>
                <td class="td1">Tipo de Vidrio</td>
                <td class="td2"><?php echo $cliente->tipoVidrio ; ?></td>
            </tr>

            <tr>
                <td class="td1">Fecha de Contrato</td>
                <td class="td2"><?php echo $cliente->fhContrato ; ?></td>
            </tr>

            <tr>
                <td class="td1">Fecha de Entrega</td>
                <td class="td2"><?php echo $cliente->fhEntrega ; ?></td>
            </tr>

            <tr>
                <td class="td1">Estatus de Trabajo</td>
                <td class="td2"><?php echo $cliente->estatusTrabajo ; ?></td>
            </tr>

            <tr>
                <td class="td1">Precio de Trabajo</td>
                <td class="td2">‎₡ <?php echo $cliente->precio ; ?></td>
            </tr>

            <tr>
                <td class="td1">Abono de Trabajo</td>
                <td class="td2">‎₡ <?php echo $cliente->abonoTrabajo ; ?></td>
            </tr>

            <tr>
                <td class="td1">Pendiente de Trabajo</td>
                <td class="td2">‎₡ <?php echo $cliente->pendientePagar ; ?></td>
            </tr>
            <tr>
                <td class="td1">Detalle de Trabajo</td>
                <td class="td2"><?php echo $cliente->detalleTrabajo ; ?></td>
            </tr>
            <tr>
                <td class="td1">Observaciones de Trabajo</td>
                <td class="td2"><?php echo $cliente->observaciones ; ?></td>
            </tr>
            </tbody>
        </table>



    </div>
</div> 


<style type="text/css">
    .td1{
        width: 30%;
        background-color:#fff;
        color: #000000;
        font-size: 18px
    }
    .td2{
        width: 70%;
        background-color: #fff; 
        padding-left: 10px;
    }
    table, td, tr {
        border: 1px dotted gray;
        padding: 3px;
    }
</style>
</body>
</html>
