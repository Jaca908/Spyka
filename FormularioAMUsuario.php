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
    else if(isset($_SESSION['UsuarioLogIn']) AND $_SESSION['Perfil']=='F')
    {
       header("location: Pantalla.php#_self");
    }
    
//Include the database configuration file
include 'Conexion/Conexion.php';


// if(isset($_POST[Modificar]) AND isset($_POST['IDGrupo']))
// {
//    $CodigoGrupo=;
// }


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


	    <!--Librerias para el modal -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	   <!-- JavaScripts -->
    
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>


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
                        <legend id="Leyenda" class="group-border">Usuarios</legend>
                        <form role="form" id="frmUsuario">
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">ID Usuario:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="IDUsuario" name="txtIDUsuario" readonly>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">ID Minist. Hacienda<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="IDMH" name="txtIDMH" maxlength="150" required>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">ID API<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="IDAPI" name="txtIDAPI" maxlength="50" required>
                            </div>
                        </div>
                        <br>
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
                              </select>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Cédula<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="Cedula" name="txtCedula" required>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Nombre Comercial<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="NombreComercial" name="txtNombreComercial" maxlength="50" required>
                            </div>
                        </div>
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Nombre Represent.<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="NombreRepresentante" name="txtNombreRepresentante" maxlength="50" required>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Cuota<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="Cuota" maxlength="13" name="txtCuota" required>
                            </div>                          
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Moneda<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <select class="form-control" id="Moneda" name="cbmMoneda" required> 
                                <option value="" selected="selected"></option>
                                <option value="C" >Colones</option>
                                <option value="D" >Dólares</option>  
                              </select>
                            </div>
                        </div>
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Teléf 1<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control input-sm" id="Telefono1" maxlength="8" name="txtTelefono1" required>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Teléf 2:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="Telefono2" maxlength="8" name="txtTelefono2">
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Email<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="email" class="form-control input-sm" id="Email" name="txtEmail" required>
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
                            
                            <div class="col-lg-2">
                                <button onclick="CargarModalMisActEcon()" style="display: none" type="button" name="btnMisActEco" id="MisActEco" class="btn btn-secondary pull-right" >Ver Actividades <br> Económicas</button>
                            </div>
                            <div class="col-lg-2">
                                <button onclick="CargarModalActEcon()" type="button" name="btnActEco" id="ActEco" class="btn btn-info pull-right" ><span class="glyphicon glyphicon-cog"></span> Actividades <br> Económicas</button>
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
                                <label class="control-label" for="Name">Código Postal:</label>
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control input-sm" id="CodigoPostal" name="txtCodigoPostal" maxlength="7" readonly>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Fecha de Ingreso:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="FechaIngreso" readonly name="txtFechaIngreso" 
                                value="<?php date_default_timezone_set('America/Costa_Rica'); $date = date('d-m-Y'); echo $date; ?>">
                            </div>
                        </div>
                        <br> 
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Perfil<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <select class="form-control" id="Perfil" name="cbmPerfil" required> 
                                <option value="" selected="selected"></option>
                                <option value="A">Administrador</option>
                                <option value="F">Facturación</option>
                                <option value="C">Contable</option>
                              </select>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Estado<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <select class="form-control" id="Estado" name="cbmEstado" required> 
                                <option value="" selected="selected"></option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                              </select>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Clave<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="password" class="form-control input-sm" id="Clave" maxlength="10" name="txtClave" 
                                pattern='(?=.*[!@#$%^&*]).{8,}' title="Debe contener al menos uno de los siguientes caracteres: ! @ # $ % ^ & *, y al menos 8 o más caracteres" required>
                            </div>
                        </div>
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-2">
                                <label class="control-label" for="Name">Fecha Último Acceso al Sistema:</label>
                            </div>
                            <div class="col-lg-2">
                              <input type="text" class="form-control input-sm" id="FechaUltimoIngreso" readonly name="txtFechaUltimoIngreso">
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Tipo Usuario<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <select class="form-control" id="TipoUsuario" name="cbmTipoUsuario" required> 
                                <option value="" selected="selected"></option>
                                <option value="Produccion">Producción</option>
                                <option value="Prueba">Prueba</option>  
                              </select>
                            </div>
                            <div class="col-lg-2">
                              
                            </div>
                            <div class="col-lg-2">
                                <button onclick="CargarModalConsecutivos()" style='margin-right:16px' type="button" name="btnConsecutivo" id="Consecutivo" class="btn btn-warning pull-right" >Modificar Consecutivos</button>
                            </div>
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
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Observación:</label>
                            </div>
                            <div class="col-lg-7">
                              <textarea style="resize:none" class="form-control input-sm" type="text" id="Observaciones" name="txtObservaciones" maxlength="250" rows="3"></textarea>
                            </div>
                            <div class="col-sm-12 form-group" align="left">
								 <button type="submit" name="btnEnviarGrupo" id="EnviarGrupo" style='margin-right:16px' class="btn btn-lg btn-default pull-right" >Enviar &rarr;</button>
                                <button onclick="document.location.href='FormularioVerUsuarios.php';" style='margin-right:16px' type="button" name="btnCancelar" id="Cancelar" class="btn btn-lg btn-default pull-right" >Cancelar</button>
                        </div>
                            </div>
   
                            
                            </form>
                            
                            <form id="CargarLogo" action="" method="post" enctype="multipart/form-data">
                            
                            	<div class="col-lg-3">
								<div id="image_preview"><img id="previewing" src="images/noimage.png" /></div>
								</div>
								<div class="col-lg-2">
									<div id="selectImage">
									<label>  Seleccione la Imagen</label><br/>
									<input type="file" name="file" id="file" required /><br>
									<input type="submit" value="Cargar" class="submit" />
									</div>
								</div>
                            </form>
                                                 
                        </div>
                        <br> 
                        
                        <div class="modal fade" id="ModalMSJ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Usuario</h4>
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
                  
					<div id="ModalConsecutivos" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<a class="close" data-dismiss="modal">×</a>
									<h3>Consecutivos</h3>
								</div>
								<div class="modal-body">
									<h5>Ingrese el número consecutivo</h5>
								</div>
								<form id="contactForm" name="contact" role="form">
									<div class="modal-body">				
										<div class="form-group">
											<label for="name">Consecutivo Factura</label>
											<input type="text" maxlength="10" id="ConsFactura" name="name" class="form-control">
										</div>
										<div class="form-group">
											<label for="name">Consecutivo Tiquete</label>
											<input type="text" maxlength="10" id="ConsTiquete" name="name" class="form-control">
										</div>
										<div class="form-group">
											<label for="name">Consecutivo Nota Crédito</label>
											<input type="text" maxlength="10" id="ConsNC" name="name" class="form-control">
										</div>
										<div class="form-group">
											<label for="name">Consecutivo Nota Débito</label>
											<input type="text" maxlength="10" id="ConsND" name="name" class="form-control">
										</div>
										<div class="form-group">
											<label for="name">Consecutivo Factura de Compra</label>
											<input type="text" maxlength="10" id="ConsFC" name="name" class="form-control">
										</div>	
										<div class="form-group">
											<label for="name">Consecutivo Factura Simplificada</label>
											<input type="text" maxlength="10" id="ConsFS" name="name" class="form-control">
										</div>
										<div class="form-group">
											<label for="name">Terminal</label>
											<input type="text" maxlength="3" id="Terminal" name="name" class="form-control">
										</div>
										<div class="form-group">
											<label for="name">Sucursal</label>
											<input type="text" maxlength="5" id="Sucursal" name="name" class="form-control">
										</div>					
									</div>
									<div class="modal-footer">					
										<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
										<button type="button" onclick="ModificarConsecutivos()" class="btn btn-success" data-dismiss="modal">Modificar</button>
									</div>
								</form>
							</div>
						</div>
</div>


						<div class="modal fade" id="ModalActEcon" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable" style=" max-height: 85%; overflow-y: scroll;" id="DialogTAE" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Actividades Económicas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <button type="button" onclick="AgregarActEcon()" class="btn btn-success" data-dismiss="modal">Agregar</button>
                
                <label>&nbsp Seleccione una actividad económica para agregarla</label>
                    <table id="tblActEcon" class="display nowrap table-responsive">
                        <thead>
                          <tr>
                              <th>Codigo</th>
                              <th>Actividad Económica</th>
                              <th>Seleccionar</th>
                          </tr>
                        </thead>
                        <tbody>
                        	<?php
					                $Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

					                if ($Conexion->connect_error) 
					                {
					                    die("Connection failed: " . $Conexion->connect_error);
					                } 
					                
					                $sql = "select Codigo,Nombre from actividadeconomica";                     
					                $result = $Conexion->query($sql);
					        ?>
					        <?php while($ri =  mysqli_fetch_array($result))
			                      {
			                      echo "<tr>";
			                        echo "<td>".$ri['Codigo']."</td>";
			                        echo "<td>".wordwrap($ri['Nombre'], 100, "<br />\n")."</td>";
			                       echo "<td>";
			                       echo '<input type="checkbox" class="chSeleccionar" value="checkbox">';
			                       echo "</td>";
			                      echo "</tr>";
			                      }
			                ?>
                        </tbody>
                    </table>
                </div>
                <script type="text/javascript">                
                
                    $(document).ready(function () {
                    	
                    	//cambiar idioma de Tabla
	
						$('#tblActEcon').DataTable({
							"bInfo": false, //Dont display info e.g. "Showing 1 to 4 of 4 entries"
						    "paging": false,//Dont want paging                
						    "bPaginate": false,//Dont want paging 
								"order": [[0, "asc"]],
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
                    	 
	                    $('#DialogTAE').width('90%');
                    	
                    });
                </script>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="ModalActEconSelec" tabindex="-1">
        <div class="modal-dialog" id="DialogTAES" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Actividades Económicas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <button type="button" onclick="AgregarActEconSelec()" class="btn btn-success" data-dismiss="modal">Enviar</button>
                
                <label>&nbsp Seleccione la actividad económica predominante</label>
                    <table id="tblActEconSelec" class="display table-responsive">
                        <thead>
                          <tr>
                              <th>Codigo</th>
                              <th>Actividad Económica</th>
                              <th>Predominante</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <script type="text/javascript">                
                    $(document).ready(function () {
                    	
                    	//cambiar idioma de Tabla
	
						$('#tblActEconSelec').DataTable({
												
							"bFilter": false,
								"bInfo": false, //Dont display info e.g. "Showing 1 to 4 of 4 entries"
							    "paging": false,//Dont want paging                
							    "bPaginate": false,//Dont want paging
								"order": [[0, "asc"]],
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
                    	 
	                    $('#DialogTAES').width('90%');
                    	
                    });
                </script>
            </div>
        </div>
    </div>
                                   
                    </fieldset>
            </div>
        </div>
<footer class="page-footer">
  <?php include('PiePagina.php')?>
</footer>

  <!-- Scripts -->
  <script src="js/min/plugins.min.js"></script>
  <script src="js/min/medigo-custom.min.js"></script>
  
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
                    //$('#CodigoPostal').val(IdProvincia);
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
                    //$('#CodigoPostal').val($('#CodigoPostal').val() + IdCanton);
                }
            });   
        }else{
            $('#Distrito').html('<option value=""></option>');      
        }
    });

    $('#Distrito').on('change',function(){
        var IdDistrito = $(this).val();
        //$('#CodigoPostal').val($('#CodigoPostal').val() + IdDistrito);
    });
});
</script>

<script>
	
function AgregarActEcon()
{
	
	var Seleccionadas=0;
	var TableData = new Array();
	

			$('#tblActEcon tr').each(function(row, tr){
				
				if($(tr).find('td .chSeleccionar').prop('checked') == true)
				{
					
					Seleccionadas++;
			
					TableData[row]={
						             "Codigo" : $(tr).find('td:eq(0)').text()
						            ,"Nombre" : $(tr).find('td:eq(1)').text()
						        	}
				}
				        	
			});
	
	if(Seleccionadas>0)
	{
		TableData.shift();
				
		$('#ModalActEcon').modal('hide');
		
		$("#tblActEconSelec").find('tbody').empty(); //add this line to hide no result data  
				
		TableData.forEach(function(Fila) {
			
			var CodAAgregar=Fila["Codigo"];
			var Existe=false;
			
			$('#tblActEconSelec tr').each(function(row, tr){
	            var CodigoExistente = $(tr).find('td:eq(0)').text();
	        	
	        	if(CodigoExistente==CodAAgregar)
	        	{
					Existe=true;						
				}
	        });
			
			if(Existe==false)
			{
				var Row = document.getElementById("tblActEconSelec").insertRow(1+(document.getElementById("tblActEconSelec").rows.length-1));
	    
			    var Codigo=Row.insertCell(0);
	            var Nombre = Row.insertCell(1);
	            var RadioButton = Row.insertCell(2);
	            
	            Codigo.innerHTML = Fila["Codigo"];
	            Nombre.innerHTML = Fila["Nombre"];
	            RadioButton.innerHTML = "<input type='radio' class='Predominante' name='Predominante' value='Predominante'>";
			}			 
		});
		
		$('#ModalActEconSelec').modal({
					backdrop: 'static',
					keyboard: false
					});		
	}
	else
	{
		$("#MSJ").html("Debe seleccionar al menos una actividad económica");
        $("#ModalMSJ").modal("show");
	}
	
}
	
</script>


<script>
	
function AgregarActEconSelec()
{
	var TableDataSelec= new Array();
	var AgregarAE='AgregarAE';
	var Seleccionada=0;
	
	$('#tblActEconSelec tr').each(function(row, tr){
				
				if($(tr).find('td .Predominante').prop('checked') == true)
				{	
					Seleccionada++;
						
					TableDataSelec[row]={
						             "Codigo" : $(tr).find('td:eq(0)').text()
						            ,"Nombre" : $(tr).find('td:eq(1)').text()
						            ,"Predominante":'Predominante'
						        	}
				}
				else
				{
					TableDataSelec[row]={
						             "Codigo" : $(tr).find('td:eq(0)').text()
						            ,"Nombre" : $(tr).find('td:eq(1)').text()
						            ,"Predominante":''
						        	}
				}
				        	
			});
			
		TableDataSelec.shift();
		
		if(Seleccionada>0)
		{
			var IDUsuario=document.getElementById("IDUsuario").value;
			
			$.ajax({
				url: "Logica/Usuario.php", // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: {Actividades:TableDataSelec,btnAgregarAE:AgregarAE,FK_Usuario:IDUsuario}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)		
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
		}
		else
		{
			
		}
}	
	
</script>

<script>
	
$(document).ready(function (e) {
	
	$("#CargarLogo").on('submit',(function(e) {
		e.preventDefault();
		
		var Usuario=document.getElementById("IDUsuario").value;
		var formData = new FormData($("#CargarLogo")[0]);
        formData.append('IDUsuario',Usuario);
		
		if(Usuario!='')
		{
				$.ajax({
				url: "Logica/Usuario.php", // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
		
				success: function(data)   // A function to be called if request succeeds
				{
					$("#MSJ").html(data);
	            	$("#ModalMSJ").modal("show");
	            	
	            	$("#file").val('');
	            	$("#previewing").prop("src", 'Images/noimage.png');
				}
			});
		}
		else
		{
			$("#MSJ").html("Error: No hay un usuario para asignarle un logo");
	        $("#ModalMSJ").modal("show");
		}
	}));

// Function to preview image after validation
	$(function() {
		$("#file").change(function() {
			$("#message").empty(); // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];

			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
				$('#previewing').attr('src','Images/noimage.png');
				$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
				return false;
			}
			else
			{
				var reader = new FileReader();
				reader.onload = imageIsLoaded;
				reader.readAsDataURL(this.files[0]);
			}
		});
	});

	function imageIsLoaded(e) {
		$("#file").css("color","green");
		$('#image_preview').css("display", "block");
		$('#previewing').attr('src', e.target.result);
		$('#previewing').attr('width', '188px');
		$('#previewing').attr('height', '172px');
	};
});
	
</script>

<script>
	function CargarModalActEcon()
	{
		var Usuario=document.getElementById("IDUsuario").value;
		
		if(Usuario!='')
		{
			$("#ModalActEcon").modal("show");	
		}
		else
		{
			$("#MSJ").html("Error: No hay un usuario para asignarle actividades económicas");
	        $("#ModalMSJ").modal("show");
		}		
	}
	
</script>

<script>
	function CargarModalMisActEcon()
	{
		$("#ModalActEconSelec").modal("show");
	}
	
</script>

<script>

function CargarModalConsecutivos()
{
	$.ajax({
          url: 'Logica/Usuario.php',
          type: 'post',
          data: 
          {
             ObtenerConsecutivos:'ObtenerConsecutivos',
             IDUsuario:document.getElementById('IDUsuario').value,
          },
          dataType: 'json',
          success:function(response){
              
              var len = response.length;

              if(len > 0){

 	            var ConsFactura=response[0]['ConsFactura'];
				var ConsTiquete=response[0]['ConsTiquete'];
				var ConsNotaCredito=response[0]['ConsNotaCredito'];
				var ConsNotaDebito=response[0]['ConsNotaDebito'];
				var ConsFacturaCompra=response[0]['ConsFacturaCompra'];
				var ConsFacturaSimplificada=response[0]['ConsFacturaSimplificada'];
				var Terminal=response[0]['Terminal'];
				var Sucursal=response[0]['Sucursal'];
				
			document.getElementById('ConsFactura').value=ConsFactura;
			document.getElementById('ConsTiquete').value=ConsTiquete;
			document.getElementById('ConsNC').value=ConsNotaCredito;
			document.getElementById('ConsND').value=ConsNotaDebito;
			document.getElementById('ConsFC').value=ConsFacturaCompra;
			document.getElementById('ConsFS').value=ConsFacturaSimplificada;
			document.getElementById('Terminal').value=Terminal;
			document.getElementById('Sucursal').value=Sucursal;	

            $("#ModalConsecutivos").modal("show"); 

              }
              
          }
      });
      return false;
}
	
	
</script>

<script>

function ModificarConsecutivos()
{	
	$.ajax({
          url: 'Logica/Usuario.php',
          type: 'post',
          data: 
          {
          	 ModificarConsecutivos:'ModificarConsecutivos',
             IDUsuario:document.getElementById('IDUsuario').value,
             ConsFactura:document.getElementById('ConsFactura').value,
			 ConsTiquete:document.getElementById('ConsTiquete').value,
			 ConsNotaCredito:document.getElementById('ConsNC').value,
			 ConsNotaDebito:document.getElementById('ConsND').value,
			 ConsFacturaCompra:document.getElementById('ConsFC').value,
			 ConsFacturaSimplificada:document.getElementById('ConsFS').value,
			 Terminal:document.getElementById('Terminal').value,
			 Sucursal:document.getElementById('Sucursal').value,
          },
          dataType: 'json',
          success:function(response){
              
              var len = response.length;

              if(len > 0){
              	
 				var Respuesta=response[0]['Respuesta'];
              
              	$("#MSJ").html(Respuesta);
              	
              	$("#ModalConsecutivos").modal("hide"); 
            	$("#ModalMSJ").modal("show");
              
              }
              
          }
      });
      return false;
}
	
	
</script>


<script type="text/javascript">
$("#frmUsuario").submit(function(e){
    e.preventDefault();

    if(document.getElementById('Cedula').value.length<document.getElementById('Cedula').maxLength)
    {
        $("#MSJ").html("La cédula debe ser de "+document.getElementById('Cedula').maxLength+" dígitos");
        $("#ModalMSJ").modal("show");
    }
    else if(document.getElementById('Telefono1').value.length<document.getElementById('Telefono1').maxLength)
    {
        $("#MSJ").html("El teléfono 1 debe ser de "+document.getElementById('Telefono1').maxLength+" dígitos");
        $("#ModalMSJ").modal("show");
    }
    else if(document.getElementById('Telefono2').value!="" && 
        (document.getElementById('Telefono2').value.length<document.getElementById('Telefono2').maxLength))
    {
        $("#MSJ").html("El teléfono 2 debe ser de "+document.getElementById('Telefono1').maxLength+" dígitos");
        $("#ModalMSJ").modal("show"); 
    }
    else
    {

    var btnEnvUsuario="EnviarUsuario";
    $.ajax({
        type : 'POST',
        data: $("#frmUsuario").serialize()+"&btnEnviarUsuario="+btnEnvUsuario,
        url : 'Logica/Usuario.php',
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

<script>
	
$('#ModalMSJ').on('hide.bs.modal', function (e) {
		
	var GuarMod = sessionStorage.getItem("GuarMod");
	
	sessionStorage.clear();	
		
	if(GuarMod =='Guardo')
	{
		window.open('FormularioAMUsuario.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('FormularioVerUsuarios.php', '_self');	
	}
});
	
</script>

<script type="text/javascript">

/*Cargar datos al abrir la pagina para consultar cuando se pulse el boton de ver*/
window.onload = function() { 

var IDUsuario=sessionStorage.getItem("IDUsuario");
var Modificar=sessionStorage.getItem("Modificar");

    if(IDUsuario!=null && Modificar!=null)
    {
        sessionStorage.clear();
        
		$("#Consecutivo").show();
        document.getElementById("Clave").required = false;

        $.ajax({
              url: 'Logica/Usuario.php',
              type: 'post',
              data: 
              {
                MostrarDatos:'MostrarDatos',
                IDUsuario:IDUsuario
              },
              dataType: 'json',
              success:function(response){
                
                  var len = response.length;

                  if(len > 0){
                  	
                    document.getElementById('IDUsuario').value = response[0]['IDUsuario'];
                    document.getElementById('IDMH').value = response[0]['ID_MH'];/*ReadOnly*/
                    document.getElementById('IDAPI').value = response[0]['ID_API'];/*ReadOnly*/
                    document.getElementById('TipoCedula').value = response[0]['TipoCedula'];
                    document.getElementById('Cedula').value = response[0]['Cedula'];/*REadonly*/
                    document.getElementById('NombreRepresentante').value = response[0]['NombreRepresentante'];
                    document.getElementById('NombreComercial').value = response[0]['NombreComercial'];
                    document.getElementById('CodigoPostal').value = response[0]['CodigoPostal'];
                    document.getElementById('Email').value = response[0]['Email'];
                    document.getElementById('Direccion').value = response[0]['Direccion'];
                    document.getElementById('Telefono1').value = response[0]['Telefono1'];
                    document.getElementById('Telefono2').value = response[0]['Telefono2'];
                    
                    document.getElementById('Cuota').value = response[0]['Cuota'];
                    document.getElementById('Moneda').value = response[0]['Moneda'];
                    document.getElementById('Expediente').value = response[0]['Expediente'];
                    document.getElementById('FechaIngreso').value = response[0]['FechaIngreso'];
                    //document.getElementById('Clave').value = response[0]['Clave'];
                    document.getElementById('Perfil').value = response[0]['Perfil'];
                    document.getElementById('Observaciones').value = response[0]['Observacion'];
                    document.getElementById('Estado').value = response[0]['Activo'];
                    document.getElementById('FechaUltimoIngreso').value = response[0]['UltimoIngreso'];
                    document.getElementById('TipoUsuario').value = response[0]['TipoUsuario']; 
                    
                    
                    /**********************************************************************************************/
                    
                
	                var AE=response[0]['AE'];
	                
	                $("#tblActEconSelec").find('tbody').empty();
	                  
	                  AE.forEach((subArr)=>{ 
	                  	var Row = document.getElementById("tblActEconSelec").insertRow(1+(document.getElementById("tblActEconSelec").rows.length-1));
	    
					    var Codigo=Row.insertCell(0);
			            var Nombre = Row.insertCell(1);
			            var RadioButton = Row.insertCell(2);
			            
			            Codigo.innerHTML = subArr['Codigo'];
		            	Nombre.innerHTML = subArr['Nombre'];	            	
		            	RadioButton.innerHTML =(subArr['Predominante']==1)?"<input type='radio' class='Predominante' name='Predominante' value='Predominante' checked='checked'>":"<input type='radio' class='Predominante' name='Predominante' value='Predominante'>";
	                  });

                    /**********************************************************************************************/ 
                    
                    var Logo=response[0]['Logo'];
                    
                    if(Logo!=''){$("#previewing").prop("src", Logo);}else{$("#previewing").prop("src", 'Images/noimage.png');}
                                     
					$("#MisActEco").show();

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
                        
                        var TipoCed = $('#TipoCedula').val();

	                if(TipoCed=='F'){
	                    $('#Cedula').attr('maxlength', 9);
	                }
	                else if(TipoCed=='J' || TipoCed=='N'){
	                    $('#Cedula').attr('maxlength', 10); 
	                }
	                else if(TipoCed=='D'){
	                    $('#Cedula').attr('maxlength', 12);  
	                }
	                else
	                {
	                    $('#Cedula').attr('maxlength', 0);
	                }
                }
                
              }
          });

          return false;
    }
    else
    {
    		$("#Consecutivo").hide();
        document.getElementById("Clave").required = true;
    }
}
    </script>

    <script type="text/javascript">
$(document).ready(function(){
    $('#Perfil').change(function(){
    if(this.value=="A")
    {
        $('#Estado').val('1');
        
        var op = document.getElementById("Estado").getElementsByTagName("option");
        for (var i = 0; i < op.length; i++) {
          // lowercase comparison for case-insensitivity
          if (op[i].value != "1") {
            op[i].disabled = true;
          }
        }
    }
    else
    {
        $('#Estado').val('');
        
        var op = document.getElementById("Estado").getElementsByTagName("option");
        for (var i = 0; i < op.length; i++) {
          // lowercase comparison for case-insensitivity
          if (op[i].value != "1") {
            op[i].disabled = false;
          }
        }
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
        else
        {
            $('#Cedula').attr('maxlength', 0);
        }
  });
});

</script>


<script>
  
function ValidarPass()
{
    var Contrasena = document.getElementById('Clave').value;

    if(Contrasena!='' && 
      (Contrasena.indexOf('!')>-1||
       Contrasena.indexOf('@')>-1||
       Contrasena.indexOf('#')>-1||
       Contrasena.indexOf('$')>-1||
       Contrasena.indexOf('%')>-1||
       Contrasena.indexOf('^')>-1||
       Contrasena.indexOf('&')>-1||
       Contrasena.indexOf('*')>-1))
    {
        alert("Exito!");
    }
    else
    {
        alert("Error!");
    }
}
  
  
</script>

<script type="text/javascript">
    
    /*Validar campos*/

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


//Integer (positive only)
setInputFilter(document.getElementById("Cedula"), function(value) {
  return /^\d*$/.test(value); });

setInputFilter(document.getElementById("Telefono1"), function(value) {
  return /^\d*$/.test(value); });

setInputFilter(document.getElementById("Telefono2"), function(value) {
  return /^\d*$/.test(value); });

setInputFilter(document.getElementById("Cuota"), function(value) {
  return /^\d*[.]?\d{0,2}$/.test(value); });
  
setInputFilter(document.getElementById("ConsFactura"), function(value) {
  return /^\d*$/.test(value); });

setInputFilter(document.getElementById("ConsTiquete"), function(value) {
  return /^\d*$/.test(value); });
  
setInputFilter(document.getElementById("ConsNC"), function(value) {
  return /^\d*$/.test(value); });
  
setInputFilter(document.getElementById("ConsND"), function(value) {
  return /^\d*$/.test(value); });


/*Evitar que el usuario ingrese numeros incluso si copia y pega y permitir espacios*/

$('#NombreRepresentante').on('keyup blur', function() { 
    $(this).val(function(i, val) {
        return val.replace(/[^a-z\s]/gi,''); 
    });
});

$('#NombreRepresentante').on("input", function(){
    var regexp = /[^a-zA-Z ]/g;
    if($(this).val().match(regexp)){
      $(this).val( $(this).val().replace(regexp,'') );
    }
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
    
<style>

#image_preview{

font-size: 30px;
top: 100px;
left: 100px;
width: 250px;
height: 230px;
text-align: center;
line-height: 180px;
font-weight: bold;
color: #C0C0C0;
background-color: #FFFFFF;
overflow: auto;
}

	
</style>


</body>
</html>