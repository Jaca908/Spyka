<?php	session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php 

  if (!isset($_SESSION['UsuarioLogIn'])) {
        header("location: index.html#parent");
    exit;
    }
  else if(isset($_SESSION['UsuarioLogIn']) AND $_SESSION['Perfil']=='C')
  {
    header("location: Pantalla.php#_self");
  }
    
//Include the database configuration file
include 'Conexion/Conexion.php';

?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Spyka</title>
    <meta name="keywords" content="">
  <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
  Medigo Template
  https://www.templatemo.com/preview/templatemo_460_medigo
    -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
<!--para el datetimepicker-->
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

	    <!--Librerias para el modal -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	   <!-- JavaScripts -->
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/jquery-migrate-1.2.1.min.js"></script>
	
	<link href='jquery-ui.min.css' type='text/css' rel='stylesheet' >
    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="jquery-ui.min.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<style>
  @charset "UTF-8";
.navigation {
  height: 70px;
  background: #71B9DC;
}

.brand {
  position: absolute;
  padding-left: 20px;
  float: left;
  line-height: 70px;
  text-transform: uppercase;
  font-size: 1.4em;
}
.brand a,
.brand a:visited {
  color: #ffffff;
  text-decoration: none;
}

.nav-container {
  max-width: 1000px;
  margin: 0 auto;
}

nav {
  float: right;
}
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
nav ul li {
  float: left;
  position: relative;
}
nav ul li a,
nav ul li a:visited {
  display: block;
  padding: 0 20px;
  line-height: 70px;
  background: #71B9DC;
  color: #ffffff;
  text-decoration: none;
}
nav ul li a:hover,
nav ul li a:visited:hover {
  background:#71B9DC;
  color: #ffffff;
}
nav ul li a:not(:only-child):after,
nav ul li a:visited:not(:only-child):after {
  padding-left: 4px;
  content: ' ▾';
}
nav ul li ul li {
  min-width: 190px;
}
nav ul li ul li a {
  padding: 15px;
  line-height: 20px;
}

.nav-dropdown {
  position: absolute;
  display: none;
  z-index: 1;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
}

/* Mobile navigation */
.nav-mobile {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  background: white;
  height: 70px;
  width: 70px;
}

@media only screen and (max-width: 798px) {
  .nav-mobile {
    display: block;
  }

  nav {
    width: 100%;
    padding: 70px 0 15px;
  }
  nav ul {
    display: none;
  }
  nav ul li {
    float: none;
  }
  nav ul li a {
    padding: 15px;
    line-height: 20px;
  }
  nav ul li ul li a {
    padding-left: 30px;
  }

  .nav-dropdown {
    position: static;
  }
}
@media screen and (min-width: 799px) {
  .nav-list {
    display: block !important;
  }
}
#nav-toggle {
  position: absolute;
  left: 18px;
  top: 22px;
  cursor: pointer;
  padding: 10px 35px 16px 0px;
}
#nav-toggle span,
#nav-toggle span:before,
#nav-toggle span:after {
  cursor: pointer;
  border-radius: 1px;
  height: 5px;
  width: 35px;
  background: #71B9DC;
  position: absolute;
  display: block;
  content: '';
  transition: all 300ms ease-in-out;
}
#nav-toggle span:before {
  top: -10px;
}
#nav-toggle span:after {
  bottom: -10px;
}
#nav-toggle.active span {
  background-color: transparent;
}
#nav-toggle.active span:before, #nav-toggle.active span:after {
  top: 0;
}
#nav-toggle.active span:before {
  transform: rotate(45deg);
}
#nav-toggle.active span:after {
  transform: rotate(-45deg);
}

article {
  max-width: 1000px;
  margin: 0 auto;
  padding: 10px;
}

</style>

<body><!-- Cambia el background aqui-->
<div class="brand">
      <img src="images\SPYKA_Logo.png" width="100" height="30" style="float: left; margin-top: 20px;">
    </div>
<section class="navigation" style="font-family: verdana; font-size: 1 em;">
  <?php include('Menu.php')?>
</section>

<article>
  <h2 style="color: #566787;"><?php echo $_SESSION['NombreRepresentante']?></h2>
</article>

<style> legend.group-border {
  width: inherit;
  /* Or auto */
  padding: 0 10px; 
  /* To give a bit of padding on the left and right */
  border-bottom: none;
}
fieldset.group-border {
  border: 1px groove #ddd !important;
  padding: 0 1em 1em 1em !important;
  margin: 0 0 0 0 !important;
  -webkit-box-shadow: 0px 0px 0px 0px #000;
  box-shadow: 0px 0px 0px 0px #000;
}
</style>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <fieldset class="group-border" id="fsEncabezado" style="background-color:white; /*display: none;*/">
                        <legend id="Leyenda" class="group-border">Clientes</legend>
                        <form role="form" id="frmCliente">
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Tipo de Cédula<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <select class="form-control" id="TipoCedula" name="cbmTipoCedula" required> 
                                <option value="" selected="selected"></option>
                                <option value="F" >Física</option>
                                <option value="J" >Jurídica</option>
                                <option value="D" >DIMEX</option>
                                <option value="N" >NITE</option>
                                <option value="E" >Extranjero</option>
                              </select>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Cédula<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="Cedula" name="txtCedula" required>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Nombre<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="Nombre" Maxlength=43 name="txtNombre" required>
                            </div>
                        </div>
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Teléfono<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="Telefono" Maxlength=20 name="txtTelefono" required>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Email 1<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                                <input type="email" class="form-control input-sm" id="Email1" maxlength="128" name="txtEmail1" required>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Email 2:</label>
                            </div>
                            <div class="col-lg-3">
                                <input type="email" class="form-control input-sm" id="Email2" maxlength="128" name="txtEmail2">
                            </div>
                        </div>
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Dirección Exacta<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-7">
                                <input class="form-control input-sm" type="text" id="Direccion" name="txtDireccion" maxlength="250" required>
                            </div>
                        </div>
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Provincia<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <select class="form-control" id="provincia" name="cbmProvincia" required> 
                                <option value="" selected="selected"></option>
                                <option value="1">San José</option>
                                <option value="2">Alajuela</option>
                                <option value="3">Cartago</option>
                                <option value="4">Heredia</option>
                                <option value="5">Guanacaste</option>
                                <option value="6">Puntarenas</option>
                                <option value="7">Limón</option>
                              </select>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Cantón<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <select class="form-control" id="Canton" name="cbmCanton" required> 
                                <option value="" selected="selected"></option>

                              </select>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Distrito<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <select class="form-control" id="Distrito" name="cbmDistrito" required> 
                                <option value="" selected="selected"></option>

                              </select>
                            </div>
                        </div>
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Barrio:</label>
                            </div>
                            <div class="col-lg-3">
                              <select class="form-control" id="Barrio" name="cbmBarrio" > 
                                <option value="" selected="selected"></option>

                              </select>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Fecha de Ingreso:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="FechaIngreso" readonly name="txtFechaIngreso" 
                                value="<?php 
                                        date_default_timezone_set("America/Costa_Rica");
                                        $date = date('d-m-Y');
                                        echo $date;
                                        ?>">
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Fecha Últ.Factura:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="FechaUltimaFacturacion" readonly name="txtFechaUltimaFacturacion">
                            </div>
                        </div>
                        <br> 
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Estado<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <select class="form-control" id="Estado" name="cbmEstado" required> 
                                <option value="" selected="selected"></option>
                                <option value=1>Activo</option>
                                <option value=0>Inactivo</option>
                              </select>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Exonerado<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <select class="form-control" id="Exonerado" name="cbmExonerado" required> 
                                <option value="" selected="selected"></option>
                                <option value=1>Sí</option>
                                <option value=0>No</option>
                              </select>
                            </div>
                        </div>
                        <br>
                        
                        <div id="DIVExonerado" style="display: none">
                        <fieldset class="group-border" style="background-color:white;">
                        	<legend id="Leyenda" style="font-size: 18px" class="group-border">Exoneración</legend>	
	                        	<div style="margin: auto; width: 100%;" class="row">
		                            <div class="col-lg-2">
                                		<label class="control-label" for="Name">Descripción<span style="font-size: 150%;  color: red;">*</span>:</label>
                            		</div>
		                            <div class="col-lg-5">
		                                <input class="form-control input-sm" type="text" id="DescExoneracion" name="txtDescExoneracion" maxlength="250" >
		                            </div>
		                            <div class="col-lg-2">
		                                <label class="control-label" for="Name">Tipo Exoneración<span style="font-size: 150%;  color: red;">*</span>:</label>
		                            </div>
		                            <div class="col-lg-3">
		                              <select class="form-control" id="TipoExoneracion" name="cbmTipoExoneracion" > 
		                                <option value="" selected="selected"></option>
		                                <option value=01>01 Compras Autorizadas</option>
		                                <option value=02>02 Ventas Exentas a Diplomáticos</option>
		                                <option value=03>03 Autorizado por Ley Especial</option>
		                                <option value=04>04 Exenciones Dirección General de Hacienda</option>
		                                <option value=05>05 Transitorio V</option>
		                                <option value=06>06 Transitorio IX</option>
		                                <option value=07>07 Transitorio XVII</option>
		                                <option value=99>99 Otros</option>
		                              </select>
		                            </div>
                        		</div>
                        		<br>
                        		<div style="margin: auto; width: 100%;" class="row">
                        			<div class="col-lg-2">
                                		<label class="control-label" for="Name">Nombre Institución<span style="font-size: 150%;  color: red;">*</span>:</label>
                            		</div>
		                            <div class="col-lg-5">
		                                <input class="form-control input-sm" maxlength="160" type="text" id="NombreInstitucion" name="txtNombreInstitucion" maxlength="250" >
		                            </div>
		                            <div class="col-lg-2">
                                		<label class="control-label" for="Name">Nº.Exoneración<span style="font-size: 150%;  color: red;">*</span>:</label>
                            		</div>
		                            <div class="col-lg-3">
		                                <input class="form-control input-sm" maxlength="40" type="text" id="NoExoneracion" name="txtNoExoneracion" maxlength="250" >
		                            </div>
                        		</div>
                        		<br>
                        		<div style="margin: auto; width: 100%;" class="row">
		                           <div class="col-lg-2">
	                                <label class="control-label" for="Name">Fecha de Exoneración<span style="font-size: 150%;  color: red;">*</span>:</label>
		                            </div>
		                            <div class="col-lg-5">
		                                	<div class="input-group date form_date col-md-5" data-date="" data-date-format="dd-mm-yyyy">
                    <input class="form-control" name="txtFechaExoneracion" id="FechaExoneracion" size="16" type="text" style="font-size: 13px" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
		                            </div> 
		                             <input type="checkbox" id="Vigencia" name="cbVigencia" value="TieneVigencia"> La exoneración tiene periodo de vigencia
		                           <br>
		                           <input type="checkbox" id="TodosProductos" name="cbTodosProductos" value="AplicaTodosProductos"> La exoneración aplica a todos los productos
		                           <br>
                        		</div>
                        		<br>
                        		<div style="margin: auto; width: 100%; display: none;" id="divPorExo" class="row">
		                          <div class="col-lg-2">
                                		<label class="control-label" for="Name">Porcentaje de exoneración para todos los productos:</label>
                            		</div>
		                            <div class="col-lg-3">
		                                <input class="form-control input-sm" maxlength="3" type="text" id="PorcExoneracion" name="txtPorcExoneracion" maxlength="250" >
		                            </div>
                        		</div>
                        		<br>
                        		<div style="margin: auto; width: 100%; display: none" class="row">
		                           <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
									  <thead>
											<tr>
												<th>Código<i class="fa fa-sort"></i></th>
												<th>Producto<i class="fa fa-sort"></i></th>
												<th>% Exo.<i class="fa fa-sort"></i></th>
											</tr>
										</thead>
										<tbody>
											<?php
									                $Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

									                if ($Conexion->connect_error) 
									                {
									                    die("Connection failed: " . $Conexion->connect_error);
									                } 
									                
									                $sql = "SELECT IDProducto, NombreProducto FROM Producto WHERE FK_Usuario=".$_SESSION['IDUsuario']." and IDProducto NOT IN('000000000000000000')";                     
									                $result = $Conexion->query($sql);
									        ?>
									                <?php while($ri =  mysqli_fetch_array($result))
									                      {
									                      echo "<tr>";
									                        echo "<td>".$ri['IDProducto']."</td>";
									                        echo "<td>".$ri['NombreProducto']."</td>";
									                       echo "<td>";
									                       echo '<input class="form-control input-sm" type="text" id="PorEx" name="txtPorEx" maxlength="3" >';
									                       echo "</td>";
									                      echo "</tr>";
									                      }?>
										</tbody>
									  <tfoot>
									  </tfoot>
									</table> 
                        		</div>
                        </fieldset>
                        </div>
                        
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Expediente:</label>
                            </div>
                            <div class="col-lg-7">
                              <textarea style="resize:none" class="form-control input-sm" type="text" id="Expediente" name="txtExpediente" maxlength="250" rows="3"></textarea>
                            </div>
                            <div class="col-lg-2">
                                <label class="control-label" for="Name"><span style="font-size: 150%;  color: red;">*</span>Campos Obligatorios</label>
                            </div>
                        </div>
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                            <button type="submit" name="btnEnviarGrupo" id="EnviarGrupo" style='margin-right:16px' class="btn btn-lg btn-default pull-right" >Enviar &rarr;</button>
                                <button onclick="document.location.href='FormularioVerClientes.php';" style='margin-right:16px' type="button" name="btnCancelar" id="Cancelar" class="btn btn-lg btn-default pull-right" >Cancelar</button>
                        </div>
                        <br> 
                        <div class="col-sm-12 form-group" align="left">

                            </div>
                        </form>
                        <div class="modal fade" id="ModalMSJ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Cliente</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body" style="color:black;" id="MSJ">
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                    </div>
                  </div>                 
                    </fieldset>
            </div>
        </div>
<footer class="page-footer">
  <?php include('PiePagina.php')?>
  
  <script>
	
$('#ModalMSJ').on('hide.bs.modal', function (e) {
		
	var GuarMod = sessionStorage.getItem("GuarMod");
	
	sessionStorage.clear();	
		
	if(GuarMod =='Guardo')
	{
		window.open('FormularioAMCliente.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('FormularioVerClientes.php', '_self');	
	}
});
	
</script>
</footer>

          <script>
								$(document).ready(function(){
								  
								  $.noConflict(true);
								  //cambiar idioma de Tabla
									
									$('#dtBasicExample').DataTable({
											"scrollX": true,
											"order": [[1, "asc"]],
											"language":{
												"lengthMenu": "Mostrar _MENU_ registros por pagina",
												"info": "Mostrando pagina _PAGE_ de _PAGES_",
												"infoEmpty": "No hay registros disponibles",
												"infoFiltered": "(filtrada de _MAX_ registros)",
												"loadingRecords": "Cargando...",
												"processing":     "Procesando...",
												"search": "Buscar:",
												"zeroRecords":    "No se encontraron registros coincidentes",
												"paginate": {
													"next":       "Siguiente",
													"previous":   "Anterior"
												},					
											}
										});
										
									$('.dataTables_length').addClass('bs-select');
								});
								</script>

  <!-- Scripts -->
  <script src="js/min/plugins.min.js"></script>
  <script src="js/min/medigo-custom.min.js"></script>
  <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>
<script type="text/javascript">
	$('.form_date').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
</script>
  
  <script type="text/javascript">
$(document).ready(function(){
    var CodigoPostal="";
  $('#provincia').on('change',function(){
        var IdProvincia = $(this).val();
        if(IdProvincia){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'IDProvincia='+IdProvincia,
                success:function(html){
                    $('#Canton').html(html);
                    $('#Distrito').html('<option value=""></option>');
                }
            }); 
        }else{
            $('#Canton').html('<option value=""></option>');
            $('#Distrito').html('<option value=""></option>'); 
        }
    });
    
    $('#Canton').on('change',function(){
        var IdCanton = document.getElementById("Canton").value;
    var IdProvinciaC = document.getElementById("provincia").value;
        if(IdCanton){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:{IdCanton:IdCanton,
        IdProvinciaC: IdProvinciaC
        },
                success:function(html){
                    $('#Distrito').html(html);
                }
            });   
        }else{
            $('#Distrito').html('<option value=""></option>');      
        }
    });
});
</script>

<script type="text/javascript">
$("#frmCliente").submit(function(e){
    e.preventDefault();

    /*Validar que cedula y telefono esten completos antes de ir a guardar*/

    if(document.getElementById('Cedula').value.length<document.getElementById('Cedula').maxLength)
    {
        $("#MSJ").html("La cédula debe ser de "+document.getElementById('Cedula').maxLength+" dígitos");
        $("#ModalMSJ").modal("show");
    }
    else if(document.getElementById('Telefono').value.length<8)//es a 8 porque puede ser de 20 maximo
    {
        $("#MSJ").html("El teléfono debe ser de al menos 8 dígitos");
        $("#ModalMSJ").modal("show");
    }
    else if(document.getElementById('Exonerado').value=='1'&&document.getElementById('DescExoneracion').value=='')
    {
		$("#MSJ").html("Debe ingresar una descripción de la exoneración");
    	$("#ModalMSJ").modal("show");
	}
	else if(document.getElementById('Exonerado').value=='1'&&document.getElementById('TipoExoneracion').value=='')
    {
		$("#MSJ").html("Debe selecionar un tipo de exoneración");
    	$("#ModalMSJ").modal("show");
	}
	else if(document.getElementById('Exonerado').value=='1'&&document.getElementById('NombreInstitucion').value=='')
    {
		$("#MSJ").html("Debe ingresar la institución de la exoneración");
    	$("#ModalMSJ").modal("show");
	}
	else if(document.getElementById('Exonerado').value=='1'&&document.getElementById('NoExoneracion').value=='')
    {
		$("#MSJ").html("Debe ingresar el número de documento de la exoneración");
    	$("#ModalMSJ").modal("show");
	}
	else if(document.getElementById('Exonerado').value=='1'&&document.getElementById('FechaExoneracion').value=='')
    {
		$("#MSJ").html("Debe seleccionar la fecha de la exoneración");
    	$("#ModalMSJ").modal("show");
	}
	else if(document.getElementById('Exonerado').value=='1'&&document.getElementById('PorcExoneracion').value==''&&document.getElementById("TodosProductos").checked)
    {
		$("#MSJ").html("Debe ingresar el porcentaje de la exoneración");
    	$("#ModalMSJ").modal("show");
	}
	else if(document.getElementById('Exonerado').value=='1'&&document.getElementById('PorcExoneracion').value!='' && 
			parseFloat(document.getElementById('PorcExoneracion').value)>100&&document.getElementById("TodosProductos").checked)
    {
		$("#MSJ").html("El porcentaje de la exoneración no puede ser mayor al 100%");
    	$("#ModalMSJ").modal("show");
	}
	else if(document.getElementById('Exonerado').value=='1'&&document.getElementById('PorcExoneracion').value!='' && 
			parseFloat(document.getElementById('PorcExoneracion').value)==0&&document.getElementById("TodosProductos").checked)
    {
		$("#MSJ").html("El porcentaje de la exoneración no puede ser 0%");
    	$("#ModalMSJ").modal("show");
	}  
    else
    {
    	var TipoCedula= document.getElementById('TipoCedula').value;
    	var VigenciaExoneracion=(document.getElementById("Vigencia").checked)?1:0;
    	var TodosProductosExonerados=(document.getElementById("TodosProductos").checked)?1:0;
    	var Exonerado=document.getElementById("Exonerado").value;
        var btnEnvCliente="EnviarCliente";
        var GuardarModificar="";
        
        if ( $('#Cedula').is('[readonly]') ) 
        { 
            GuardarModificar="Modificar";
        }
        else
        {
            GuardarModificar="Guardar";
        }
        
        if(document.getElementById('Exonerado').value=='1')
        {
			var EnviarDatos="&Exonerado="+Exonerado+"&cbmTipoCedula="+TipoCedula+"&VigenciaExoneracion="+VigenciaExoneracion+"&TodosProductosExonerados="+TodosProductosExonerados+"&GuardarModificar="+GuardarModificar+"&btnEnviarCliente="+btnEnvCliente;
		}
		else
		{
			var EnviarDatos="&Exonerado="+Exonerado+"&cbmTipoCedula="+TipoCedula+"&GuardarModificar="+GuardarModificar+"&btnEnviarCliente="+btnEnvCliente;
		}
        
        $.ajax({
            type : 'POST',
            data: $("#frmCliente").serialize()+EnviarDatos,
            url : 'Logica/Cliente.php',
            dataType:'json',
        	success : function(response){
        	
        	var len =response.length;
        	
        	if(len>0)
        	{
				var Respuesta=response[0]['Respuesta'];
				var GuarMod=response[0]['GuarMod'];
				
				$("#MSJ").html(Respuesta);
            	$("#ModalMSJ").modal("show");
            	
            	sessionStorage.setItem('GuarMod',GuarMod);
			}
        }
        });
        return false;
    }
}); 
</script>

<script type="text/javascript">

/*Cargar datos al abrir la pagina para consultar cuando se pulse el boton de ver*/
window.onload = function() { 

var CedulaCliente=sessionStorage.getItem("CedulaCliente");
var Modificar=sessionStorage.getItem("Modificar");

    if(CedulaCliente!=null && Modificar!=null)
    {
        sessionStorage.clear();

        document.getElementById('Cedula').readOnly = true;

        $.ajax({
              url: 'Logica/Cliente.php',
              type: 'post',
              data: 
              {
                MostrarDatos:'MostrarDatos',
                CedulaCliente:CedulaCliente
              },
              dataType: 'json',
              success:function(response){
                
                  var len = response.length;

                  if(len > 0){
                    document.getElementById('Cedula').value = response[0]['Cedula'];
                    document.getElementById('Nombre').value = response[0]['Nombre'];

                    /*Faltan Campos en el Formulario=> van en otro lado
                    
                    document.getElementById('IDGrupo').value = response[0]['TotalVentas'];
                    document.getElementById('IDGrupo').value = response[0]['TotalDebitos'];
                    document.getElementById('IDGrupo').value = response[0]['TotalCreditos'];

                    */
                    
                    document.getElementById('Direccion').value = response[0]['Direccion'];
                    document.getElementById('Telefono').value = response[0]['Telefono'];
                    document.getElementById('FechaIngreso').value = response[0]['FechaIngreso'];
                    document.getElementById('FechaUltimaFacturacion').value = response[0]['FechaUltimaFacturacion'];
                    document.getElementById('TipoCedula').value = response[0]['TipoCedula'];
                    document.getElementById('Email1').value = response[0]['Email1'];  
                    document.getElementById('Email2').value = response[0]['Email2'];

                    /*Hay que partir la zona en Provincia Canton Distrito*/

                    var Provincia= response[0]['Zona'].substring(0, 1);
                    var Canton=response[0]['Zona'].substring(1, 3);
                    var Distrito=response[0]['Zona'].substring(3, 5);


                        var IdProvincia = Provincia;
                        if(IdProvincia){
                            $.ajax({
                                type:'POST',
                                url:'ajaxData.php',
                                data:'IDProvincia='+IdProvincia,
                                success:function(html){
                                    $('#Canton').html(html);
                                    $('#provincia').val(Provincia);
                                    $('#Canton').val(Canton);
                                }
                            }); 
                        }else{
                            $('#Canton').html('<option value=""></option>');
                            $('#Distrito').html('<option value=""></option>'); 
                        }
                    
                    
                    
                        var IdCanton = Canton;
                        var IdProvinciaC = Provincia;
                        
                        if(IdCanton){
                            $.ajax({
                                type:'POST',
                                url:'ajaxData.php',
                                data:{IdCanton:IdCanton,
                                IdProvinciaC: IdProvinciaC
                                },
                                success:function(html){
                                    $('#Distrito').html(html);
                                     
                                    $('#Distrito').val(Distrito);
                                }
                            });     
                        }else{
                            $('#Distrito').html('<option value=""></option>');          
                        }

                 
					$('#TipoCedula').prop('disabled', true);
										
                    document.getElementById('Exonerado').value = response[0]['Exonerado'];
                  
                  	if(response[0]['Tipo']=='P')
                  	{
						$('#Exonerado').prop("disabled", true); 
					}
					else
					{
						$('#Exonerado').prop("disabled", false); 
					}
                    
                  if(document.getElementById('Exonerado').value=='1')
			      {
				  	document.getElementById("DescExoneracion").value=response[0]['DescripcionExoneracion'];	
					document.getElementById("TipoExoneracion").value=response[0]["TipoExoneracion"];	
					document.getElementById("NoExoneracion").value=response[0]["NoExoneracion"];	
					document.getElementById("NombreInstitucion").value=response[0]["NombreInstitucionExoneracion"];
					document.getElementById("FechaExoneracion").value=response[0]["FechaExoneracion"];	
					document.getElementById("PorcExoneracion").value=response[0]["PorcentajeExoneracion"];	
					
					if(response[0]["VigenciaExoneracion"]=='1')
					{
						$('#Vigencia').prop('checked', true);
					}
					else
					{
						$('#Vigencia').prop('checked', false);
					}
					
					if(response[0]["TodosProductosExonerados"]=='1')
					{
						$('#TodosProductos').prop('checked', true);
						$("#divPorExo").show();
						$("#PorcExoneracion").prop("readOnly",true);
					}
					else
					{
						$('#TodosProductos').prop('checked', false);
						$("#divPorExo").hide();
						document.getElementById("PorcExoneracion").value='';
            			$("#PorcExoneracion").prop("readOnly",false);
					}					
				  	
				  	$('#DIVExonerado').show();
				  }
				  else
				  {
				  	$('#DIVExonerado').hide();
				  }
                    
                    document.getElementById('Estado').value = response[0]['Activo'];
                    document.getElementById('Expediente').value = response[0]['Expediente'];
                }
                
              }
          });

          return false;
    }
    else
    {
        document.getElementById('Cedula').readOnly = false;
        $('#TipoCedula').prop('disabled', false);
    }

}
    </script> 


<script type="text/javascript">
                
$(document).ready(function(){

    $('#Exonerado').on('change', function () {
      
      var Exonerado = $(this).val();
      
      if(Exonerado=='1')
      {
	  	$('#DIVExonerado').show();
	  }
	  else
	  {
	  	$('#DIVExonerado').hide();
	  }
      
  });
});

</script>

<script type="text/javascript">
                
$(document).ready(function(){

    $('#TipoCedula').on('change', function () {
      
      var TipoCed = $(this).val();
      
      if ( $('#Cedula').not('[readonly]') ) 
    { 
        $('#Cedula').val("");           
    }

        if(TipoCed=='F'){
            $('#Cedula').attr('maxlength', 9);
        }
        else if(TipoCed=='J' || TipoCed=='N'){
            $('#Cedula').attr('maxlength', 10); 
        }
        else if(TipoCed=='D'){
            $('#Cedula').attr('maxlength', 12);  
        }
        else if(TipoCed=='E'){
            $('#Cedula').attr('maxlength', 20);  
        }
        else
        {
            $('#Cedula').attr('maxlength', 0);
        }
  });
});

</script>


<script type="text/javascript">

// Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  });
}



setInputFilter(document.getElementById("Cedula"), function(value) {
  return /^\d*$/.test(value); });
  
setInputFilter(document.getElementById("PorEx"), function(value) {
  return /^\d*$/.test(value); });
  
setInputFilter(document.getElementById("PorcExoneracion"), function(value) {
  return /^\d*$/.test(value); });

setInputFilter(document.getElementById("Telefono"), function(value) {
  return /^\d*$/.test(value); });


/*Evitar que el usuario ingrese numeros incluso si copia y pega y permitir espacios*/

$('#Nombre').on('keyup blur', function() { 
    $(this).val(function(i, val) {
        return val.replace(/[^a-z\s]/gi,''); 
    });
});

$('#Nombre').on("input", function(){
    var regexp = /[^a-zA-Z ]/g;
    if($(this).val().match(regexp)){
      $(this).val( $(this).val().replace(regexp,'') );
    }
});

</script>

<script>
$(document).ready(function() {

    $('#TodosProductos').change(function() {
        if(this.checked) 
        {
            $("#divPorExo").show();
            document.getElementById("PorcExoneracion").value='100';
            $("#PorcExoneracion").prop("readOnly",true);
        }
        else
        {
			$("#divPorExo").hide();
			document.getElementById("PorcExoneracion").value='';
			$("#PorcExoneracion").prop("readOnly",false);
		}
       
    });
});
</script>

<script>
$(document).ready(function() {

		$('#Tipo').on('change', function () {
      
      	var Tipo = $(this).val();
      
      	if(Tipo=='P')
	  	{
			document.getElementById("Exonerado").value='0';
			$('#Exonerado').prop("disabled", true);
			$('#DIVExonerado').hide(); 
		}
		else
		{
			document.getElementById("Exonerado").value='';
			$('#Exonerado').prop("disabled", false);
			$('#DIVExonerado').hide(); 
		}

	});
});				
</script>

<script>
      (function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery
    </script>

</body>
</html>