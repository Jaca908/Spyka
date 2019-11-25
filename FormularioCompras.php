<?php	session_start();
		require ("Conexion/Conexion.php");
?>
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

?>


	<title></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	    
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
                        <legend id="Leyenda" class="group-border">Factura De Compra</legend>

						<fieldset class="group-border" id="" style="background-color:white; /*display: none;*/">
						<legend id="Leyenda" class="group-border">Emisor</legend>
                        <div class="row">
						<div class="col-lg-1">
                                <label class="control-label" for="Name">Cédula Emisor</label>
                            </div>
                        	<div class="col-lg-3">
                                    <input class="form-control input-sm" id="Cedula" name="txtCedula" placeholder="Cédula Emisor" maxlength="12" value="" type="text">
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Nombre Emisor</label>
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control input-sm" readonly id="Nombre" name="txtNombreEmisor" placeholder="Nombre Emisor" value="" type="text">
                            </div>
							<div class="col-lg-1">
                                <label class="control-label" for="Name">Teléfono Emisor</label>
                            </div>
                            <div class="col-lg-2">
                                    <input class="form-control input-sm" readonly id="Telefono" name="txtTelefono" placeholder="Teléfono Emisor" value="" type="text">
                            </div>
                        </div>
                        <br>
                        <div class="row">
						<div class="col-lg-1">
                                <label class="control-label" for="Name">Email Emisor</label>
                            </div>
                        	<div class="col-lg-3">
                                    <input class="form-control input-sm" readonly id="Email" name="txtEmail" placeholder="Email Emisor" value="" type="text">
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Dirección Emisor</label>
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control input-sm" readonly id="Direccion" name="txtDireccion" placeholder="Dirección Emisor" value="" type="text">
                            </div>
							<div class="col-lg-1">
                                <label class="control-label" for="Name">Zona Emisor</label>
                            </div>
                            <div class="col-lg-2">
                                    <input class="form-control input-sm" readonly id="Zona" name="txtZona" placeholder="Zona" value="" type="text">
                            </div>
                        </div>
                        </fieldset>
                        <br>
                        <fieldset class="group-border" id="" style="background-color:white; /*display: none;*/">
						<legend id="Leyenda" class="group-border">Receptor</legend>
                        <div class="row">
						<div class="col-lg-1">
                                <label class="control-label" for="Name">Cédula Receptor</label>
                            </div>
                        	<div class="col-lg-3">
                                    <input readonly="" class="form-control input-sm" id="CedulaReceptor" name="txtCedula" placeholder="Cédula Receptor" maxlength="12" value="" type="text">
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Nombre Receptor</label>
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control input-sm" readonly id="NombreReceptor" name="txtNombreEmisor" placeholder="Nombre Receptor" value="" type="text">
                            </div>
							<div class="col-lg-1">
                                <label class="control-label" for="Name">Teléfono Receptor</label>
                            </div>
                            <div class="col-lg-2">
                                    <input class="form-control input-sm" readonly id="TelefonoReceptor" name="txtTelefono" placeholder="Teléfono Receptor" value="" type="text">
                            </div>
                        </div>
                        <br>
                        <div class="row">
						<div class="col-lg-1">
                                <label class="control-label" for="Name">Email Receptor</label>
                            </div>
                        	<div class="col-lg-3">
                                    <input class="form-control input-sm" readonly id="EmailReceptor" name="txtEmail" placeholder="Email Receptor" value="" type="text">
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Dirección Receptor</label>
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control input-sm" readonly id="DireccionReceptor" name="txtDireccion" placeholder="Dirección Receptor" value="" type="text">
                            </div>
							<div class="col-lg-1">
                                <label class="control-label" for="Name">Zona Receptor</label>
                            </div>
                            <div class="col-lg-2">
                                    <input class="form-control input-sm" readonly id="ZonaReceptor" name="txtZona" placeholder="Zona" value="" type="text">
                            </div>
                        </div>
                        </fieldset>
                        <br>
                        <div class="row">
						<div class="col-lg-1">
                                <label id="EtiquetaTipoDoc" class="control-label" for="Name">Nº Factura</label>
                            </div>
                            <div class="col-lg-3">
                                    <input class="form-control input-sm" data-val="true" data-val-number="El número de factura debe ser numérico" data-val-required="El número de factura es necesario" readonly id="NoFactura" name="txtNoFactura" placeholder="Nº Factura" value="" type="text">
                            </div>
							<div class="col-lg-1">
                                <label class="control-label" for="Name">Nº de Orden</label>
                            </div>
                            <div class="col-lg-4">
                                    <input class="form-control input-sm" id="NoOrden" name="txtNoOrden" maxlength="15" placeholder="Nº de Orden" value="" type="text">

                            </div>
							<div class="col-lg-1">
                                <label class="control-label" for="Name">Fecha de Emisión </label>
                            </div>
                            <div class="col-lg-2">
						       <div class="input-group">
						        <div class="input-group-addon">
						         <i class="fa fa-calendar">
						         </i>
						        </div>
						        <input class="form-control" id="Fecha" name="date" readonly="true" placeholder="DD/MM/YYYY" type="text"/>
						       </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                        	<div class="col-lg-1">
                                <label class="control-label" for="Name">Condición de Venta</label>
                            </div>
                            <div class="col-lg-3">
                                    <select class="form-control" id="CondicionVenta" name="cbmCondicionVenta" readonly required> 
									<option value="" selected="selected"></option>
									<option value="01">Contado</option>
									<option value="02">Crédito</option>
									<option value="04">Apartado</option>
									</select>
                            </div>
							<div class="col-lg-2">
                                <label class="control-label" for="Name">Plazo</label>
                            </div>
                            <div class="col-lg-3">
                                    <select class="form-control" id="Plazo" name="cbmPlazo" readonly required> 
									<option value="" selected="selected"></option>
									<option value="0">0 días</option>
									<option value="8">8 días</option>
									<option value="15">15 días</option>
									<option value="30">30 días</option>
									<option value="45">45 días</option>
									<option value="60">60 días</option>
									<option value="90">90 días</option>
									</select>
									<label class="control-label" for="Name">Fecha Vencimiento:</label>
                            </div>
							<div class="col-lg-2">
                                <label class="control-label" for="Name">Medio de Pago</label>
                            </div>
                            <div class="col-lg-3">
                                    <input type="checkbox" id="cbEfectivo" name="Efectivo" value="01">Efectivo<br>
  <input style="display: none;" type="checkbox" id="cbTarjeta" name="Tarjeta" value="02"><!--Tarjeta<br>-->
  <input style="display: none;" type="checkbox" id="cbCheque" name="Cheque" value="03"><!--Cheque<br>-->
  <input style="display: none;" type="checkbox" id="cbTransferenciaDepositoBancario" name="TransferenciaDepositoBancario" value="04"><!--Transferencia/Depósito<br>-->
  <input style="display: none;" type="checkbox" id="cbRecaudado" name="Recaudadoporterceros" value="05"><!--Recaudado por terceros.<br>-->
                            </div>
                        </div>
                        <br>
                        <div class="row">
						<div class="col-lg-1">
                                <label class="control-label" for="Name">Tipo de Moneda</label>
                            </div>
                            <div class="col-lg-3">
                                    <select class="form-control" id="TipoMoneda" name="cbmTipoMoneda" readonly required> 
									<option value="" selected="selected"></option>
									<option value="C">Colones</option>
									<option value="D">Dólares</option>
									<option value="E">Euros</option>
									</select>
                            </div>
							<div class="col-lg-2">
                                <label class="control-label" for="Name">Tipo de Cambio</label>
                            </div>
							<div class="col-lg-2">
                                    <input class="form-control input-sm" id="TipoCambio" maxlength="11" name="txtTipoCambio" placeholder="Tipo de Cambio" value="" readonly type="text">
                            </div>
                            <div class="col-lg-1">
							      <div class="form-group">
							        <input class="form-control input-sm" id="Terminal" name="txtTerminal" placeholder="Term." type="text" value="001" readonly>
							        <label class="control-label" for="NumDoc">Terminal</label>
							      </div>
							 </div>
                            <div class="col-lg-1">
							      <div class="form-group">
							        <input class="form-control input-sm" id="Sucursal" name="txtSucursal" placeholder="Suc." type="text" value="00001" readonly>
							        <label class="control-label" for="NumDoc">Sucursal</label>
							      </div>
							 </div>
							 <div class="col-lg-2">
							      <div class="form-group">
							        <select class="form-control" id="TipoDocumento" name="cbmTipoDocumento" readonly required> 
									<option value="Factura" selected="selected">Factura</option>
									<option value="NotaCredito">Nota Crédito</option>
									</select>
							        <label class="control-label" for="NumDoc">Tipo de Documento</label>
							      </div>
							 </div>
                        </div>
                        <br>
                        
                        <div style="display: none" id="divDocumentoAfectado" class="row">
						<div class="col-lg-1">
                                <label id="lblDocAfectado" class="control-label" for="Name">Nº Referencia</label>
                            </div>
                            <div class="col-lg-3">
                                    <input class="form-control input-sm" data-val="true" data-val-number="El número de factura debe ser numérico" data-val-required="El número de factura es necesario" readonly id="NoReferencia" name="txtNoReferencia" placeholder="Nº Referencia" value="" type="text">
                            </div>
							<div class="col-lg-1">
                                <label id="lblNoClave" class="control-label" for="Name">Nº Clave</label>
                            </div>
                            <div class="col-lg-5">
                                    <input class="form-control input-sm" data-val="true" data-val-number="El número de factura debe ser numérico" data-val-required="El número de factura es necesario" readonly id="NoClave" name="txtNoClave" placeholder="Nº Clave" value="" type="text">
                            </div>
                        </div>
                        <br>
                        <div style="display: none" id="divRazon" class="row">
                        <div class="col-lg-1">
                                <label id="lblRazon" class="control-label" for="Name">Razón</label>
                            </div>
							<div class="col-lg-6">
                                    <textarea rows="4" cols="100" style="resize: none;" class="form-control input-sm" id="Razon" maxlength="900" name="txtRazon" placeholder="Razon" value=""></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
						<div class="col-lg-4">
                                <label id="lblClienteExonerado" class="control-label" style="color: red" for="Name"></label>
                        </div>
                        <div id="AdvNota" style="display: none" class="col-lg-4">
                                <label id="lblAvisoNota" class="control-label" style="color: #fc5a03" for="Name">Advertencia: Las notas de crédito o débito no pueden ser modificadas</label>
                        </div>
                        <div id="AdvFacTiq" style="display: none" class="col-lg-4">
                                <label id="lblAvisoFT" class="control-label" style="color: #fc5a03" for="Name">Advertencia:El cliente no puede ser modificado una vez hecha la factura o el tiquete</label>
                        </div>
                        </div>                     
                    </fieldset>
                    <div class="col-sm-12">
                    	<!--Tabla para meter productos-->
						<div class="well clearfix">

              <div style="display: none" id="DIVBuscarLinea">
              <div class="col-lg-1">
                    <div class="form-group">
                      <label class="control-label" for="NumDoc">Línea</label>
                      <input class="form-control input-sm" id="Li" onkeyup="BuscarLinea()" maxlength="4" name="txtLi" placeholder="Linea" type="text" value="">
                    </div>
               </div>
               <div class="col-lg-1">
                    <div class="form-group">
                      <label class="control-label" for="NumDoc">Cant.Vend</label>
                      <input class="form-control input-sm" id="CantVend" name="txtCantVend" placeholder="Cant.Vend" type="text" value="" readonly>
                    </div>
              </div>
              <div class="col-lg-1">
                    <div class="form-group">
                      <label class="control-label" for="NumDoc">Cod.Prod</label>
                      <input class="form-control input-sm" readonly id="IDProductoNota" name="txtIDProducto" placeholder="Cód. Producto" type="text" value="">
                    </div>
               </div>
              <div class="col-lg-1">
                    <div class="form-group">
                      <label class="control-label" for="NumDoc">Cant.Dev</label>
                      <input class="form-control input-sm" id="CantDev"  maxlength="6" name="txtCantidad" placeholder="Cant.Dev" type="text" value="">
                    </div>
              </div>
              <div class="col-lg-2">
                    <div class="form-group">
                      <label class="control-label" for="NumDoc">Descripción</label>
                      <input class="form-control input-sm" id="NombreProductoNota" name="txtDescripcion" placeholder="Producto" type="text" value="" readonly>
                    </div>
              </div>
              <div class="col-lg-2">
                    <div class="form-group">
                      <label class="control-label" for="NumDoc">Pr.Unitario sin I.V.</label>
                      <input class="form-control input-sm" id="PrecioVentaNota" readonly maxlength="15" name="txtPrecioVenta" placeholder="Pr. Unitario sin I.V" type="text" value="">
                    </div>
               </div>
               <div class="col-lg-1">
                    <div class="form-group">
                      <label class="control-label" for="NumDoc">%Desc</label>
                      <input class="form-control input-sm" id="DescuentoNota" readonly maxlength="11" name="txtDescuento" placeholder="%Desc" type="text" value="">
                    </div>
              </div>
              <div class="col-lg-1">
                    <div class="form-group">
                      <label class="control-label" for="NumDoc">I.Vta</label>
                      <input class="form-control input-sm" id="IVNota" name="txtImpuesto" placeholder="I.Vta" type="text" value="" readonly>
                    </div>
              </div>
              <div class="pull-right">
                <div>
                <button type="button" name="btnAplicar" class="btn btn-xs btn-primary" id="Aplicar" onclick="AgregarProductoPNota()" data-row-id="0">Aplicar</button>
                </div>
                <div>
                  
                </div>
                <div>
                <button type="button" name="btnOcultarEncabezadoFactura" class="btn btn-xs btn-success" id="OcultarEncabezadoFactura" onclick="OcultarEncabezado()" data-row-id="0">Ocultar Encabezado</button>
                </div>
              </div>
            </div>
              <br>
              <div id="DIVAgregarProducto">
							 <div class="col-lg-2">
							      <div class="form-group">
							        <label class="control-label" for="NumDoc">Cod.Prod</label>
							        <input class="form-control input-sm" id="IDProducto" name="txtIDProducto" placeholder="Cód. Producto" type="text" value="">
							      </div>
							 </div>
							<div class="col-lg-1">
							      <div class="form-group">
							        <label class="control-label" for="NumDoc">Cantidad</label>
							        <input class="form-control input-sm" id="Cantidad"  maxlength="6" name="txtCantidad" placeholder="Cant." type="text" value="">
							      </div>
							</div>
							<div class="col-lg-2">
							      <div class="form-group">
							        <label class="control-label" for="NumDoc">Descripción</label>
							        <input class="form-control input-sm" id="NombreProducto" name="txtDescripcion" placeholder="Producto" type="text" value="">
							      </div>
							</div>
							<div class="col-lg-2">
							      <div class="form-group">
							        <label class="control-label" for="NumDoc">Pr.Unitario sin I.V.</label>
							        <input class="form-control input-sm" id="PrecioVenta" maxlength="15" name="txtPrecioVenta" placeholder="Pr. Unitario sin I.V" type="text" value="">
							      </div>
							 </div>
							 <div class="col-lg-1">
							      <div class="form-group">
							        <label class="control-label" for="NumDoc">%Desc</label>
							        <input class="form-control input-sm" id="Descuento" maxlength="11" name="txtDescuento" placeholder="%Desc" type="text" value="">
							      </div>
							</div>
							<div class="col-lg-1">
							      <div class="form-group">
							        <label class="control-label" for="NumDoc">I.Vta</label>
							        <input class="form-control input-sm" id="IV" name="txtImpuesto" placeholder="I.Vta" type="text" value="" >
							      </div>
							</div>
							<div class="col-lg-1">
							      <div class="form-group">
							        <label class="control-label" for="NumDoc">Cant.Disp</label>
							        <input class="form-control input-sm" id="CantDisp" name="txtCantDisp" placeholder="Cant.Disp" type="text" value="" readonly>
							      </div>
							</div>
							<div class="pull-right">
								 <input type="hidden" id="CantidadDevAnt" name="txtCantidadDevAnt" value="">
                				 <input type="hidden" id="CantidadDev" name="txtCantidadDev" value="">
                				 <input type="hidden" id="CantidadBonificacion" name="txtCantidadBonificacion" readonly value="">
								 <input type="hidden" id="UnidadMedida" name="txtUnidadMedida" value="">
								 <input type="hidden" id="SaldoActual" name="txtSaldoActual" value="">
								 <input type="hidden" id="PrecioCosto" name="txtPrecioCompra" value="">
                 <input type="hidden" id="TipoDocAfec" name="txtCantidadDev" value="">
                 				 <input type="hidden" id="IDFactura" name="txtIDFactura" readonly value="">
                 				 <input type="hidden" id="Exonerado" name="txtExonerado" readonly value="">
								<div>
								<button type="button" name="btnAgregarProducto" class="btn btn-xs btn-primary" id="AgrProd" onclick="rowFunction('dgvDetalleFactura')" data-row-id="0">
								<span class="glyphicon glyphicon-plus"></span> Producto</button>
								</div>
								<div>
									
								</div>
								<div>
								<button type="button" name="btnOcultarEncabezadoFactura" class="btn btn-xs btn-success" id="OcultarEncabezadoDocumento" onclick="OcultarEncabezado()" data-row-id="0">Ocultar Encabezado</button>
								</div>
							</div>
            </div>
							<!-- Para hacer los campos de calculos de factura -->

							
							<div class="row">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Servicio Exento</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="MontoSEF" name="txtMontoSEF" placeholder="MontoSE" type="text" value="0.00" readonly>
								      </div>
								</div>
							</div>

							<div class="row">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Servicio Gravado</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="MontoSGF" name="txtMontoSGF" placeholder="MontoSG" type="text" value="0.00" readonly>
								      </div>
								</div>
							</div>

							<div class="row">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Monto Exento</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="ExentoF" name="txtExentoF" placeholder="Exento" type="text" value="0.00" readonly>
								      </div>
								</div>
							</div>

							<div class="row">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Monto Gravado</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="GravadoF" name="txtGravadoF" placeholder="Gravado" type="text" value="0.00" readonly>
								      </div>
								</div>
							</div>


							<div class="row">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Subtotal</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="SubF" name="txtSubF" placeholder="SubF" type="text" value="0.00" readonly>
								      </div>
								</div>
							</div>

							<div class="row">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Descuento</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="DescF" name="txtDescF" placeholder="DescF" type="text" value="0.00" readonly>
								      </div>
								</div>
							</div>

							<div class="row">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Impuesto de Ventas</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="ImpuestoVentasF" name="txtImpuestoVentasF" placeholder="DescFactura" type="text" value="0.00" readonly>
								      </div>
								</div>
							</div>

							<div class="row">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Otros Impuestos</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="OImpF" name="txtOImpF" placeholder="OImp" type="text" value="0.00" readonly>
								      </div>
								</div>
							</div>


							<div class="row">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Total</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="TotalF" name="txtTotalF" placeholder="DescFactura" type="text" value="0.00" readonly>
								      </div>
								</div>
							</div>

							<hr>

							<div class="row">
								<div class="col-lg-2">
								      <button type="button" name="btnGrabarFactura" style="font-size:15px;" class="btn btn-info btn-sm" id="GrabarFactura" onclick="GrabarFactura()" data-row-id="0"> Grabar Factura</button>
								</div>
								<div></div>
								<div class="col-lg-1">
								      <button type="button" name="btnEnviarAHacienda" style="font-size:15px; display: none;" class="btn btn-warning btn-sm" id="EnviarAHacienda" onclick="" data-row-id="0">Enviar a Hacienda</button>
								</div>
							</div>

              <div id="BotonesNota" style="display: none; " class="row">
                <div class="col-lg-2">
                      <button type="button" onclick="GrabarFactura()" name="btnGrabarNota" style="font-size:15px;" class="btn btn-info btn-sm" id="GrabarNota" onclick="" data-row-id="0">Grabar</button>
                </div>
              </div>

						</div>

						<table id="dgvDetalleFactura" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
							<thead>
								<tr>
                  <th data-column-id="NoLinea">No. Linea</th>
									<th data-column-id="IDProducto" data-type="numeric" data-identifier="true">Código</th><!--Editable-->
									<th data-column-id="NombreProducto">Producto</th>
									<th data-column-id="Cantidad">Cantidad</th> <!--Editable-->
									<th data-column-id="Precio">Precio</th><!--Editable-->
									<th data-column-id="UnidadMedida">Medida</th>
									<th data-column-id="Impuesto">Imp.</th>
									<th data-column-id="Descuento">Desc.</th> <!--Editable-->
									
                                    <th data-column-id="MontoExento" style="display: none;">MExento</th>
                                    <th data-column-id="MontoGravado" style="display: none;">MGravado</th>
                                    <th data-column-id="MontoSExento" style="display: none;">MSExento</th>
                                    <th data-column-id="MontoSGravado" style="display: none;">MSGravado</th>
                                    <th data-column-id="MontoIV" style="display: none;">MIV</th>
                                    <th data-column-id="MontoOtroI" style="display: none;">MOtroI</th>
                                    <th data-column-id="MontoDescuento" style="display: none;">MDescuento</th>
                                    <th data-column-id="PrecioCosto" style="display: none;">PrecioCosto</th>
                                    <th data-column-id="Bonificacion" style="display: none;">Bonificación</th>
                                    
									<th data-column-id="Subtotal">Subtotal</th>
									<th data-column-id="Total">Total</th>
									<th data-column-id="commands" data-formatter="commands" data-sortable="false">Opciones</th> <!--Columna de acciones de borrado-->
                  					<th data-column-id="IDDetalle" style="display: none;">IDDetalle</th>
                            <th data-column-id="CantADevolver" style="display: none;">Cant. a Devolver</th>
                            <th data-column-id="CantDevuelta" style="display: none;">Cant. Devuelta</th>
								</tr>
							</thead>
						</table>
				    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="ModalMSJ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Compras</h4>
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

    <div class="modal fade" id="ModalAdvertencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:#F0AD4E;" id="exampleModalLabel">Advertencia</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body" style="color:black;" id="MSJAdvertencia">
          </div>
          <div class="modal-footer">
          <button type="button" onclick="BorrarFilaDetalleFactExist()" class="btn btn btn-warning" data-dismiss="modal">Borrar</button>
          <button type="button" onclick="LimpiarSession()" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
        </div>
      </div>
      
      <footer class="page-footer">
  <?php include('PiePagina.php')?>
</footer>

	<script type="text/javascript">

        /*Buscar cliente por cedula*/
        $(document).ready(function(){

			     $(document).on('keydown', '#Cedula', function() {
                
                /*document.getElementById('Nombre').value = "";
                document.getElementById('Telefono').value = "";
                document.getElementById('Email').value = "";
                document.getElementById('Direccion').value = "";
				document.getElementById('Zona').value = "";*/


            /*Validar nomeros de cedula*/

                $( '#Cedula' ).autocomplete({
                    source: function( request, response ) {
                        $.ajax({
                            url: "Logica/getDetailsCliente.php",
                            type: 'post',
                            dataType: "json",
                            data: {
                                search: request.term,request:1
                            },
                            success: function( data ) {
                                response( data );
                            }
                        });
                    },
                    select: function (event, ui) {
                        $(this).val(ui.item.label); // display the selected text
                        var idc = ui.item.value; // selected id to input

                        // AJAX
                        $.ajax({
                            url: 'Logica/getDetailsCliente.php',
                            type: 'post',
                            data: {IDc:idc,request:2},
                            dataType: 'json',
                            success:function(response){
                                
                                var len = response.length;

                                if(len > 0){
                                    var Cedula = response[0]['Cedula'];
                                    var Nombre = response[0]['Nombre'];
                                    var Telefono = response[0]['Telefono'];
                                    var Email = response[0]['Email'];
                                    var Direccion = response[0]['Direccion'];
                                    var Zona = response[0]['Zona'];
                                    var Exonerado = response[0]['Exonerado'];

                                    document.getElementById('Cedula').value = Cedula;
                                    document.getElementById('Nombre').value = Nombre;
                                    document.getElementById('Telefono').value = Telefono;
                                    document.getElementById('Email').value = Email;
                                    document.getElementById('Direccion').value = Direccion;
                                    document.getElementById('Zona').value = Zona;
                                    document.getElementById('Exonerado').value= Exonerado;
                                    
                                    if(Exonerado==1)
                                    {
										document.getElementById('lblClienteExonerado').innerHTML="Cliente exonerado de impuestos";
									}
									else
									{
										document.getElementById('lblClienteExonerado').innerHTML="";
									}
                                }
                                
                            }
                        });

                        return false;
                    }
                });
            });

                /*Buscar producto por codigo*/
            $(document).on('keydown', '#IDProducto', function() {
                
                /*document.getElementById('PrecioVenta').value="";
               	document.getElementById('IV').value="";
               	document.getElementById('Descuento').value="";
               	document.getElementById('Cantidad').value="";
               	document.getElementById("NombreProducto").value="";
               	document.getElementById("UnidadMedida").value="";*/

                $( '#IDProducto' ).autocomplete({
                    source: function( request, response ) {
                        $.ajax({
                            url: "Logica/getDetailsProducto.php",
                            type: 'post',
                            dataType: "json",
                            data: {
                                search: request.term,request:1
                            },
                            success: function( data ) {
                                response( data );
                            }
                        });
                    },
                    select: function (event, ui) {
                        $(this).val(ui.item.label); // display the selected text
                        var idp = ui.item.value; // selected id to input

                        // AJAX
                        $.ajax({
                            url: 'Logica/getDetailsProducto.php',
                            type: 'post',
                            data: {IDp:idp,request:2},
                            dataType: 'json',
                            success:function(response){
                                
                                var len = response.length;

                                if(len > 0){
                                    var IdProducto = response[0]['IDProducto'];
                                    var Nombrep = response[0]['NombreProducto'];
                                    var PV = response[0]['PrecioVentaSinIV'];
                                    var iv = (document.getElementById('Exonerado').value==1)?"0.00":response[0]['Impuesto'];
                                    var Desc = response[0]['Descuento'];
									var UM = response[0]['UM'];
									var PreCosto= response[0]['PrecioCosto'];
									var SaldoA= response[0]['SaldoActual'];

									document.getElementById('IDProducto').value = IdProducto;
                                    document.getElementById('NombreProducto').value = Nombrep;
                                    document.getElementById('PrecioVenta').value = PV;
                                    document.getElementById('IV').value = iv;
                                    document.getElementById('Descuento').value = Desc;
									document.getElementById('UnidadMedida').value = UM;
									document.getElementById('PrecioCosto').value = PreCosto;
									document.getElementById('SaldoActual').value = SaldoA;
									document.getElementById('CantDisp').value = SaldoA;
                                }
                                
                            }
                        });

                        return false;
                    }
                });
            });
            
         
        });

    </script>
	
	<script>
/*Insertar productos en el detalle*/
function rowFunction(Tabla) {
	
	//funcion para comprobar si todo los elementos de un string son iguales
function allEqual(input) {
    return input.split('').every(char => char === input[0]);
	}
	

  var IDProdAIngresar=document.getElementById("IDProducto").value;

  var CantidadIngresada= (document.getElementById('Cantidad').value!='.') ? parseFloat(document.getElementById('Cantidad').value).toFixed(2):'.';
  var CantidadDisponible= parseFloat(document.getElementById('SaldoActual').value);
  var UnidadMedida=document.getElementById('UnidadMedida').value;
  var CantidadEnDetalle=0.00;
  
  var CantidadIngresadaSinPunto=CantidadIngresada.replace('.','');
  
  			$('#dgvDetalleFactura tr').each(function(row, tr){
	            var IDProductoEnDetalle= $(tr).find('td:eq(1)').text();
	        	
	        	if(IDProductoEnDetalle==IDProdAIngresar)
	        	{
					var CantPro=$(tr).find('td:eq(3)').text();
				    var CantBon=$(tr).find('td:eq(16)').text();					
					
					CantidadEnDetalle+=parseFloat(CantPro)+parseFloat(CantBon);
					
					CantidadEnDetalle=parseFloat(CantidadEnDetalle);
						
				}
	        });
  
  // @TODO Recorrer cada fila del detalle a ver sino hay otro producto igual. Si hay uno igual entonces sacar la cantoda, sumarla a la cantida del que se quiere agregar y restarlo con la cantidad disponible

  if(document.getElementById('IDProducto').value=="")
  {
      $("#MSJ").html("Error: debe ingresar un código de producto");
      $("#ModalMSJ").modal("show");
  }
  else if(CantidadIngresadaSinPunto==""||CantidadIngresada=="" ||CantidadIngresada=='.')
		{
			$("#MSJ").html("Error: Digite la cantidad de producto");
		        $("#ModalMSJ").modal("show");
		}
  else if(CantidadDisponible==0)
  {
      $("#MSJ").html("Error: no hay suficiente cantidad de ese producto para su venta");
      $("#ModalMSJ").modal("show"); 
  }
  else if(UnidadMedida=='Unidad'&& CantidadIngresada.slice(-2)!='00')
  {
	  $("#MSJ").html("Error: La cantidad ingresada es incorrecta. Digite un número entero.");
      $("#ModalMSJ").modal("show");
  }
  else if((UnidadMedida=='sp'&&CantidadIngresada>CantidadDisponible)||
  		  (UnidadMedida!='sp'&&((CantidadIngresada+CantidadEnDetalle)>CantidadDisponible)))
  {
      $("#MSJ").html("Error: La cantidad de producto ingresada en la factura es mayor a la cantidad disponible");
      $("#ModalMSJ").modal("show");
  }
  else if((allEqual(CantidadIngresadaSinPunto)) && CantidadIngresadaSinPunto.indexOf('0') > -1)
  {
	$("#MSJ").html("Error: La cantidad ingresada no puede ser cero");
    $("#ModalMSJ").modal("show");
  }
  else if(CantidadIngresada<0)
  {
      $("#MSJ").html("Error: La cantidad ingresada no puede ser menor a cero");
      $("#ModalMSJ").modal("show");
  }
  else if(document.getElementById('Cantidad').value=="")
  {
      $("#MSJ").html("Error: debe ingresar una cantidad de producto");
      $("#ModalMSJ").modal("show");
  }
  else if(document.getElementById('PrecioVenta').value=="")
  {
      $("#MSJ").html("Error: debe ingresar un precio de venta");
      $("#ModalMSJ").modal("show");
  }
  else if(document.getElementById('PrecioVenta').value=="0")
  {
      $("#MSJ").html("Error: El precio de venta no puede ser 0");
      $("#ModalMSJ").modal("show");
  }
  else
  {
      /*Ir a factura, calcular todo (Campos de producto y campos de Calculos de factura) y luego traerlo y meterlo en la tabla*/
                        
    $.ajax({
          url: 'Logica/Factura.php',
          type: 'post',
          data: 
          {
             btnAgregarProducto:'AgregarProducto', 
             PV:document.getElementById('PrecioVenta').value,
             IV:document.getElementById('IV').value,
             Des:document.getElementById('Descuento').value,
             Cant:document.getElementById('Cantidad').value,
             IDp:document.getElementById("IDProducto").value,
             NombreP:document.getElementById("NombreProducto").value,
             UM:document.getElementById("UnidadMedida").value,
             PreComp:document.getElementById("PrecioCosto").value,
             Bonificacion:0,/*De momento es 0, más adelante se cambiará*/

             /*Campos de Calculos*/
             MontSEF:document.getElementById('MontoSEF').value,
             MontSGF:document.getElementById('MontoSGF').value,
             MontExF:document.getElementById('ExentoF').value,
             MontGrF:document.getElementById('GravadoF').value,
             MontSubF:document.getElementById('SubF').value,
             MontDescF:document.getElementById('DescF').value,
             MontIVF:document.getElementById('ImpuestoVentasF').value,
             MontOImpF:document.getElementById('OImpF').value,
             MontTF:document.getElementById('TotalF').value,
          },
          dataType: 'json',
          success:function(response){
              
              var len = response.length;

              if(len > 0){
                /*Traer campos de la tabla para agregarlos*/
                 
                  var IdProducto = response[0]['IDProducto'];
                  var Nombrep = response[0]['NombreProducto'];
                  var PVSinIV = response[0]['PrecioVSinIV'];
                  var iv = response[0]['Impuesto'];
                  var Desc = response[0]['Descuento'];
                  var Can= parseFloat(response[0]['Cantidad']).toFixed(2);
                  var UM = response[0]['UM'];
                  var PreComp = response[0]['PreComp'];
                  var BN = response[0]['Bonificacion'];

                  var MontE=response[0]['MontoE'];
                  var MontG=response[0]['MontoG'];
                  var MontSE=response[0]['MontoSE'];
                  var MontSG=response[0]['MontoSG'];
                  var MontIV=response[0]['MontoImpV'];
                  var MontOImp=response[0]['MontoOImp'];
                  var MontDesc=response[0]['MontoDesc'];
                  var SubtL=response[0]['SubtL'];
                  var TotL=response[0]['TotL'];

                  /*Traer del vector los campos de calculo*/

                  var MEF=response[0]['MontoEF'];
                  var MGF=response[0]['MontoGF'];
                  var MSEF=response[0]['MontoSEF'];
                  var MSGF=response[0]['MontoSGF'];
                  var MIVF=response[0]['MontoImpVF'];
                  var MOIVF=response[0]['MontoOImpF'];
                  var MDF=response[0]['MontoDescF'];
                  var MSF=response[0]['SubtF'];
                  var MTF=response[0]['TotF'];

                  var a = document.getElementById(Tabla).insertRow(1+(document.getElementById(Tabla).rows.length-1));

                  var NoFilaDetalle=a.insertCell(0);
                  var Codigo = a.insertCell(1);
                  var Producto = a.insertCell(2);
                  var Cantidad = a.insertCell(3);
                  var Precio = a.insertCell(4);
                  var Medida = a.insertCell(5);
                  var Impuesto = a.insertCell(6);
                  var Descuento = a.insertCell(7);

                  var MontoExento = a.insertCell(8);
                  var MontoGravado = a.insertCell(9);
                  var MontoSExento = a.insertCell(10);
                  var MontoSGravado = a.insertCell(11);
                  var MontoIV = a.insertCell(12);
                  var MontoOtroI = a.insertCell(13);
                  var MontoDescuento = a.insertCell(14);
                  var PrecioCosto = a.insertCell(15);
                  var Bonificacion = a.insertCell(16);

                  var Subtotal = a.insertCell(17);
                  var Total = a.insertCell(18);
                  var BotonBorrar = a.insertCell(19);
                  var IDDetalle = a.insertCell(20); 
                  var CantADevolver = a.insertCell(21);
                  var CantDevuelta = a.insertCell(22);   
                  
                  MontoExento.style.display = 'none';
                  MontoGravado.style.display = 'none';
                  MontoSExento.style.display = 'none';
                  MontoSGravado.style.display = 'none';
                  MontoIV.style.display = 'none';
                  MontoOtroI.style.display = 'none';
                  MontoDescuento.style.display = 'none';
                  PrecioCosto.style.display = 'none';
                  Bonificacion.style.display = 'none';
                  IDDetalle.style.display = 'none'; 
                  CantADevolver.style.display = 'none';
                  CantDevuelta.style.display = 'none';          
                   
                  NoFilaDetalle.innerHTML=(document.getElementById(Tabla).rows.length-1);
                  Codigo.innerHTML = IdProducto;
                  Producto.innerHTML = Nombrep;
                  Cantidad.innerHTML = Can;
                  Precio.innerHTML = PVSinIV;
                  Medida.innerHTML = UM;
                  Impuesto.innerHTML = iv;
                  Descuento.innerHTML = Desc;
                  PrecioCosto.innerHTML = PreComp;
                  Bonificacion.innerHTML = BN;

                  MontoExento.innerHTML = MontE;
                  MontoGravado.innerHTML = MontG;
                  MontoSExento.innerHTML = MontSE;
                  MontoSGravado.innerHTML = MontSG;
                  MontoIV.innerHTML = MontIV;
                  MontoOtroI.innerHTML = MontOImp;
                  MontoDescuento.innerHTML = MontDesc;


                  Subtotal.innerHTML = SubtL;
                  Total.innerHTML =TotL;
                  
                  BotonBorrar.innerHTML='<button class="btn btn-primary btn-xs my-xs-btn" type="button" onClick="borrarFila(this)" >'
+ '<span class="glyphicon glyphicon-remove"></span>Borrar</button>';
                  
                  IDDetalle.innerHTML="";
              
                  CantADevolver.innerHTML="";
                  CantDevuelta.innerHTML="";

              /*Sumar el producto agregado a los campos correspondientes*/

                /*parseFloat(document.getElementById('MontoSEF').value).toFixed(2);*/

              document.getElementById('MontoSEF').value=MSEF;
            document.getElementById('MontoSGF').value=MSGF;
              document.getElementById('ExentoF').value=MEF;
              document.getElementById('GravadoF').value=MGF;
              document.getElementById('SubF').value=MSF;
              document.getElementById('DescF').value=MDF;
            document.getElementById('ImpuestoVentasF').value=MIVF;
            document.getElementById('OImpF').value=MOIVF;
              document.getElementById('TotalF').value=MTF;

            /*Borrar campos de productos luego de agregar a la linea*/

            document.getElementById('PrecioVenta').value="";
              document.getElementById('IV').value="";
              document.getElementById('Descuento').value="";
              document.getElementById('Cantidad').value="";
              document.getElementById("IDProducto").value="";
              document.getElementById("NombreProducto").value="";
              document.getElementById("UnidadMedida").value="";
              document.getElementById('CantDisp').value="";

              $("#IDProducto").focus();

              }
              
          }
      });

      return false;
    }  
}
</script>
	

	<script>
            /*Borrar fila del detalle de factura*/
	function borrarFila(oButton)
	{
		var dgvDetalleFactura = document.getElementById('dgvDetalleFactura');
		
		//Si la factura no es nueva              y  el detalle de factura solo tiene 1 linea
		if(document.getElementById('IDFactura').value!="" && (dgvDetalleFactura.rows.length-1)==1)
		{
			var tipodoc=$("#TipoDocumento :selected").text();
			
			if(tipodoc=='Factura')
			{
				$("#MSJ").html("Error: Una factura existente debe tener al menos una línea en el detalle");
			}
			else if(tipodoc=='Nota Débito')
			{
				$("#MSJ").html("Error: Una nota de crédito existente debe tener al menos una línea en el detalle");
			}
			else if(tipodoc=='Nota Crédito')
			{
				$("#MSJ").html("Error: Una nota de crédito existente debe tener al menos una línea en el detalle");
			}
			else if(tipodoc=='Tiquete')
			{
				$("#MSJ").html("Error: Un tiquete existente debe tener al menos una línea en el detalle");
			}
			
        	$("#ModalMSJ").modal("show");
		}
		else //borrar fila
		{
			var IDDF= dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[20].innerHTML;
			
			//obtener id de detalle de campo seleccionado
			if(IDDF=='')/*no tiene id detalle factura, es una linea nueva=> solo borrar*/
			{
				$.ajax({
		            url: 'Logica/Factura.php',
		            type: 'post',
		            data: 
		            {
		               btnBorrarFilaDetalle:'BorrarFilaDetalle', 
		               IDp:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[1].innerHTML,
		               NombreP:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[2].innerHTML,
		               Cant:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[3].innerHTML,
		               PV:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[4].innerHTML,
		               UM:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[5].innerHTML,
		               IV:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[6].innerHTML,
		               Des:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[7].innerHTML,

		               MET:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[8].innerHTML,
		               MGT:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[9].innerHTML,
		               MSET:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[10].innerHTML,
		               MSGT:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[11].innerHTML,
		               MIVT:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[12].innerHTML,
		               MOIT:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[13].innerHTML,
		               MDT:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[14].innerHTML,
		               PC:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[15].innerHTML,
		               BN:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[16].innerHTML,
					   ST:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[17].innerHTML,
		               TT:dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[18].innerHTML,

		               /*Campos de Calculos*/
		               MontSEF:document.getElementById('MontoSEF').value,
		               MontSGF:document.getElementById('MontoSGF').value,
		               MontExF:document.getElementById('ExentoF').value,
		               MontGrF:document.getElementById('GravadoF').value,
		               MontSubF:document.getElementById('SubF').value,
		               MontDescF:document.getElementById('DescF').value,
		               MontIVF:document.getElementById('ImpuestoVentasF').value,
		               MontOImpF:document.getElementById('OImpF').value,
						   MontTF:document.getElementById('TotalF').value,
		            },
		            dataType: 'json',
		            success:function(response){
		                
		                var len = response.length;

		                if(len > 0){

		         			/*Traer del vector los campos de calculo*/

		         			var MEF=response[0]['MontoEF'];
		                    var MGF=response[0]['MontoGF'];
		                    var MSEF=response[0]['MontoSEF'];
		                    var MSGF=response[0]['MontoSGF'];
		                    var MIVF=response[0]['MontoImpVF'];
		                    var MOIVF=response[0]['MontoOImpF'];
		                    var MDF=response[0]['MontoDescF'];
		                    var MSF=response[0]['SubtF'];
		                    var MTF=response[0]['TotF'];


		                
		                /*Restar el producto agregado a los campos correspondientes*/

		      			    document.getElementById('MontoSEF').value=MSEF;
		     			    document.getElementById('MontoSGF').value=MSGF;
		      			    document.getElementById('ExentoF').value=MEF;
		       			    document.getElementById('GravadoF').value=MGF;
		      			    document.getElementById('SubF').value=MSF;
		          			document.getElementById('DescF').value=MDF;
		     			    document.getElementById('ImpuestoVentasF').value=MIVF;
		     			    document.getElementById('OImpF').value=MOIVF;
		          			document.getElementById('TotalF').value=MTF;

		          			/*Borrar Fila de la tabla*/
	        				dgvDetalleFactura.deleteRow(oButton.parentNode.parentNode.rowIndex);

	                /*foreach para recorrer la tabla y poner numero de fila */

					i=0;
					$('#dgvDetalleFactura tr').each(function(row, tr){

						 $(tr).find('td:eq(0)').text(i++);
	        		});
	        		 
	        		TableData.shift();
		              }
		                
		            }
		        });

		        return false;	
			}
			else /*Tiene id detalle factura, es una factura existente*/
			{
				sessionStorage.setItem("IndiceBoton",oButton.parentNode.parentNode.rowIndex);
				sessionStorage.setItem("IDDF",IDDF);
				sessionStorage.setItem("IDp",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[1].innerHTML);
				sessionStorage.setItem("Cant",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[3].innerHTML);
				sessionStorage.setItem("BN",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[16].innerHTML);
				sessionStorage.setItem("UM",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[5].innerHTML);

				sessionStorage.setItem("MET",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[8].innerHTML);
				sessionStorage.setItem("MGT",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[9].innerHTML);
				sessionStorage.setItem("MSET",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[10].innerHTML);
				sessionStorage.setItem("MSGT",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[11].innerHTML);
				sessionStorage.setItem("MIVT",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[12].innerHTML);
				sessionStorage.setItem("MOIT",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[13].innerHTML);
				sessionStorage.setItem("MDT",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[14].innerHTML);
				sessionStorage.setItem("ST",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[17].innerHTML);
				sessionStorage.setItem("TT",dgvDetalleFactura.rows[oButton.parentNode.parentNode.rowIndex].cells[18].innerHTML);
				
				$("#MSJAdvertencia").html("¿Desea borrar el producto?");
				$("#ModalAdvertencia").modal("show");	
			}
		}
    }	
	
	</script>
	
	<script>
		/*borrar fila de detalle de una factura ya existente*/
		function BorrarFilaDetalleFactExist()
		{
			var dgvDetalleFactura = document.getElementById('dgvDetalleFactura');
			
			var IndBoton = sessionStorage.getItem('IndiceBoton');
			var IDF=document.getElementById('IDFactura').value;
			var IDDF= sessionStorage.getItem("IDDF");
			var IDp= sessionStorage.getItem("IDp");
			var Cant= sessionStorage.getItem("Cant");
			var BN= sessionStorage.getItem("BN");
			var UM= sessionStorage.getItem("UM");

			var MET= sessionStorage.getItem("MET");
			var MGT= sessionStorage.getItem("MGT");
			var MSET= sessionStorage.getItem("MSET");
			var MSGT= sessionStorage.getItem("MSGT");
			var MIVT= sessionStorage.getItem("MIVT");
			var MOIT= sessionStorage.getItem("MOIT");
			var MDT= sessionStorage.getItem("MDT");
			var ST= sessionStorage.getItem("ST");
			var TT= sessionStorage.getItem("TT");
			
			sessionStorage.clear();
			
			$.ajax({
	            url: 'Logica/Factura.php',
	            type: 'post',
	            data: 
	            { 
	               	btnBorrarFilaDetalleFactExist:'BorrarFilaDetalleFactExist',
	               	IDFactura:IDF,
	               	IDetalleFactura:IDDF,
					IDProducto:IDp,
					Cantidad:Cant,
					Bonificacion:BN,
					UM:UM,
					MET:MET,
					MGT:MGT,
					MSET:MSET,
					MSGT:MSGT,
					MIVT:MIVT,
					MOIT:MOIT,
					MDT:MDT,
					ST:ST,
					TT:TT, 

	               /*Campos de Calculos*/
	               MontSEF:document.getElementById('MontoSEF').value,
	               MontSGF:document.getElementById('MontoSGF').value,
	               MontExF:document.getElementById('ExentoF').value,
	               MontGrF:document.getElementById('GravadoF').value,
	               MontSubF:document.getElementById('SubF').value,
	               MontDescF:document.getElementById('DescF').value,
	               MontIVF:document.getElementById('ImpuestoVentasF').value,
	               MontOImpF:document.getElementById('OImpF').value,
				   MontTF:document.getElementById('TotalF').value,
	            },
	            dataType: 'json',
	            success:function(response){
	                
	                var len = response.length;

	                if(len > 0){

	         			/*Traer del vector los campos de calculo*/

	         			var MEF=response[0]['MontoEF'];
	                    var MGF=response[0]['MontoGF'];
	                    var MSEF=response[0]['MontoSEF'];
	                    var MSGF=response[0]['MontoSGF'];
	                    var MIVF=response[0]['MontoImpVF'];
	                    var MOIVF=response[0]['MontoOImpF'];
	                    var MDF=response[0]['MontoDescF'];
	                    var MSF=response[0]['SubtF'];
	                    var MTF=response[0]['TotF'];
						
						var Respuesta=response[0]['Respuesta'];

	                
	                /*Restar el producto agregado a los campos correspondientes*/

	      			    document.getElementById('MontoSEF').value=MSEF;
	     			    document.getElementById('MontoSGF').value=MSGF;
	      			    document.getElementById('ExentoF').value=MEF;
	       			    document.getElementById('GravadoF').value=MGF;
	      			    document.getElementById('SubF').value=MSF;
	          			document.getElementById('DescF').value=MDF;
	     			    document.getElementById('ImpuestoVentasF').value=MIVF;
	     			    document.getElementById('OImpF').value=MOIVF;
	          			document.getElementById('TotalF').value=MTF;

						/*Borrar Fila de la tabla*/
        				dgvDetalleFactura.deleteRow(IndBoton);
        				
        					/*Mostrar msj de exito*/

						$("#MSJ").html(Respuesta);
                    	$("#ModalMSJ").modal("show");

						/*foreach para recorrer la tabla y poner numero de fila */

						i=0;
						$('#dgvDetalleFactura tr').each(function(row, tr){

							 $(tr).find('td:eq(0)').text(i++);
		        		});
		        		 
		        		TableData.shift();
	    
	              }
	                
	            }
	        });

	        return false;
			
		}
		
	</script>

  <script type="text/javascript">
  function LimpiarSession()
  {
    sessionStorage.clear();
  }
</script>

<script>
	
	function AgregarProductoPNota()
	{
		var Linea=document.getElementById('Li').value;
		var CantVendida=document.getElementById('CantVend').value;
		var CantidadBonificacion=document.getElementById('CantidadBonificacion').value;
		var CantidadVenBon=(parseFloat(CantVendida)+parseFloat(CantidadBonificacion)).toFixed(2);
		var CodProducto=document.getElementById('IDProductoNota').value;
		var CantADev=document.getElementById('CantDev').value;
		var Descripcion=document.getElementById('NombreProductoNota').value;
		var PUSinIV=document.getElementById('PrecioVentaNota').value;
		var PorDesc=document.getElementById('DescuentoNota').value;
		var IV=document.getElementById('IVNota').value;
		var CantidadDevuelta=document.getElementById('CantidadDev').value;
		var UM=document.getElementById('UnidadMedida').value;
		var PrecioCosto=document.getElementById("PrecioCosto").value;
		var CantidadDevAnt=document.getElementById('CantidadDevAnt').value;
		
		
		var CantADev= (CantADev!='.' && CantADev!='') ? parseFloat(CantADev).toFixed(2):'.';
		
		var CantADevSinPunto=CantADev.replace('.','');
		
		if(Linea=="" || 
		  (CantVendida=='' && CodProducto=='' && (CantADev=='' || CantADev=='.') && Descripcion=='' && PUSinIV=='' && PorDesc=='' && IV==''))
		{
			$("#MSJ").html("Error: No hay seleccionada una linea para aplicar la devolución");
		        $("#ModalMSJ").modal("show");
		}
		else if(CantADevSinPunto==""||CantADev=="" ||CantADev=='.')
		{
			$("#MSJ").html("Error: Digite la cantidad de producto a devolver");
		        $("#ModalMSJ").modal("show");
		}
		else if(parseFloat(CantADev)>parseFloat(CantidadVenBon))
		{
			$("#MSJ").html("Error: La cantidad a devolver no puede ser mayor a la cantidad vendida y la bonificación");
		        $("#ModalMSJ").modal("show");
		}
		else if((parseFloat(CantADev)+parseFloat(CantidadDevuelta))>parseFloat(CantidadVenBon)&&CantidadDevuelta!='0.00')
		{
			$("#MSJ").html("Error: La cantidad ingresada y la cantidad devuelta es mayor que la cantidad vendida en la línea seleccionada. Ya se ha devuelto la cantidad de "+CantidadDevuelta);
		        $("#ModalMSJ").modal("show");
		} 
		else if((allEqual(CantADevSinPunto)) && CantADevSinPunto.indexOf('0') > -1 && CantidadDevAnt=='')
		{
			$("#MSJ").html("Error: La cantidad a devolver no puede ser cero");
		        $("#ModalMSJ").modal("show");
		}
		else if(UM=='Unidad'&& CantADev.slice(-2)!='00')
		{
			$("#MSJ").html("Error: La cantidad a devolver ingresada es incorrecta. Digite un número entero.");
		        $("#ModalMSJ").modal("show");
		}
		else if(parseFloat(CantidadVenBon).toFixed(2)==parseFloat(CantidadDevuelta).toFixed(2))
		{
			$("#MSJ").html("Error: Ya se han devuelto la totalidad de productos de la línea seleccionada");
		        $("#ModalMSJ").modal("show");
		}
		else if((parseFloat(CantADev)>parseFloat(CantidadVenBon)-parseFloat(CantidadDevuelta))&&CantidadDevuelta!='0.00')
		{
			$("#MSJ").html("Error: La cantidad ingresada es mayor que la cantidad disponible para devolver en la línea seleccionada. Ya se ha devuelto la cantidad de "+CantidadDevuelta);
		        $("#ModalMSJ").modal("show");
		}
		else
		{
			$.ajax({
          url: 'Logica/Nota.php',
          type: 'post',
          data: 
          {
             btnAgregarProducto:'AgregarProducto', 
        
	        	Linea:Linea,
				CantVendida:CantVendida,
				CodProducto:CodProducto,
				CantADev:CantADev,
				CantidadDevAnt:CantidadDevAnt,
				Descripcion:Descripcion,
				PUSinIV:PUSinIV,
				PorDesc:PorDesc,
				IV:IV,
				CantidadDevuelta:CantidadDevuelta,
				UM:UM,
				PreComp:PrecioCosto,
                Bonificacion:CantidadBonificacion,/*De momento es 0, más adelante se cambiará*/

             /*Campos de Calculos*/
             MontSEF:document.getElementById('MontoSEF').value,
             MontSGF:document.getElementById('MontoSGF').value,
             MontExF:document.getElementById('ExentoF').value,
             MontGrF:document.getElementById('GravadoF').value,
             MontSubF:document.getElementById('SubF').value,
             MontDescF:document.getElementById('DescF').value,
             MontIVF:document.getElementById('ImpuestoVentasF').value,
             MontOImpF:document.getElementById('OImpF').value,
             MontTF:document.getElementById('TotalF').value,
          },
          dataType: 'json',
          success:function(response){
              
              var len = response.length;

              if(len > 0){
                /*Traer campos de la tabla para agregarlos*/                
                 
                  var Linea= response[0]['Linea'];
                  var IdProducto = response[0]['IDProducto'];
                  var Nombrep = response[0]['NombreProducto'];
                  var PVSinIV = response[0]['PrecioVSinIV'];
                  var iv = response[0]['Impuesto'];
                  var Desc = response[0]['Descuento'];
                  var Can= response[0]['Cantidad'];
                  var UM = response[0]['UM'];
                  var PreComp = response[0]['PreComp'];
                  var BN = response[0]['Bonificacion'];
                  var CantidadDevuelta = response[0]['CantidadDevuelta'];
                  var CantidadADevolver = response[0]['CantidadADevolver'];
                  
                  var MontE=response[0]['MontoE'];
                  var MontG=response[0]['MontoG'];
                  var MontSE=response[0]['MontoSE'];
                  var MontSG=response[0]['MontoSG'];
                  var MontIV=response[0]['MontoImpV'];
                  var MontOImp=response[0]['MontoOImp'];
                  var MontDesc=response[0]['MontoDesc'];
                  var SubtL=response[0]['SubtL'];
                  var TotL=response[0]['TotL'];

                  /*Traer del vector los campos de calculo*/

                  var MEF=response[0]['MontoEF'];
                  var MGF=response[0]['MontoGF'];
                  var MSEF=response[0]['MontoSEF'];
                  var MSGF=response[0]['MontoSGF'];
                  var MIVF=response[0]['MontoImpVF'];
                  var MOIVF=response[0]['MontoOImpF'];
                  var MDF=response[0]['MontoDescF'];
                  var MSF=response[0]['SubtF'];
                  var MTF=response[0]['TotF'];  
                  
                  
                  var filtro, tabla, tr, td, i, txtValor;

				  filtro = Linea;

				  tabla = document.getElementById("dgvDetalleFactura");

				  tr = tabla.getElementsByTagName("tr");

				  for (i = 0; i < tr.length; i++) 
				  {
				    td = tr[i].getElementsByTagName("td")[0];

				    if (td) 
				    {
				      txtValor = td.textContent || td.innerText;

				      if (txtValor.indexOf(filtro) > -1) 
				      {
				        tr[i].getElementsByTagName("td")[0].innerHTML=Linea;//Linea
				        tr[i].getElementsByTagName("td")[1].innerHTML=IdProducto;//IDProductoNota  
				        tr[i].getElementsByTagName("td")[2].innerHTML=Nombrep;//NombreProductoNota
				        tr[i].getElementsByTagName("td")[3].innerHTML=Can; //CantVend 
				        tr[i].getElementsByTagName("td")[4].innerHTML=PVSinIV;//PrecioVentaNota
				        tr[i].getElementsByTagName("td")[5].innerHTML=UM;//UnidadMedida
				        tr[i].getElementsByTagName("td")[6].innerHTML=iv;//IVNota 
				        tr[i].getElementsByTagName("td")[7].innerHTML=Desc;//DescuentoNota
				        tr[i].getElementsByTagName("td")[8].innerHTML=MontE;//MExento
				        tr[i].getElementsByTagName("td")[9].innerHTML=MontG;//MGravado	
				        tr[i].getElementsByTagName("td")[10].innerHTML=MontSE;//MSExento
				        tr[i].getElementsByTagName("td")[11].innerHTML=MontSG;//MSGravado	
				        tr[i].getElementsByTagName("td")[12].innerHTML=MontIV;//MIV	
				        tr[i].getElementsByTagName("td")[13].innerHTML=MontOImp;//MOtroI	
				        tr[i].getElementsByTagName("td")[14].innerHTML=MontDesc;//MDescuento	
				        tr[i].getElementsByTagName("td")[15].innerHTML=PreComp;//PrecioCosto	
				        tr[i].getElementsByTagName("td")[16].innerHTML=BN;//Bonificación	
				        tr[i].getElementsByTagName("td")[17].innerHTML=SubtL;//Subtotal	
				        tr[i].getElementsByTagName("td")[18].innerHTML=TotL;//Total	
				        tr[i].getElementsByTagName("td")[19].innerHTML='';//Opciones	
				        //tr[i].getElementsByTagName("td")[20].innerHTML=;//IDDetalle	
				        tr[i].getElementsByTagName("td")[21].innerHTML=CantidadADevolver;//Cant. a Devolver	 
				        tr[i].getElementsByTagName("td")[22].innerHTML=CantidadDevuelta;//Cant. Devuelta
				        
				        
				        break;
				      }
				    }    
				  }

              /*Sumar el producto agregado a los campos correspondientes*/

                /*parseFloat(document.getElementById('MontoSEF').value).toFixed(2);*/

              document.getElementById('MontoSEF').value=MSEF;
            document.getElementById('MontoSGF').value=MSGF;
              document.getElementById('ExentoF').value=MEF;
              document.getElementById('GravadoF').value=MGF;
              document.getElementById('SubF').value=MSF;
              document.getElementById('DescF').value=MDF;
            document.getElementById('ImpuestoVentasF').value=MIVF;
            document.getElementById('OImpF').value=MOIVF;
              document.getElementById('TotalF').value=MTF;

            /*Borrar campos de productos luego de agregar a la linea*/

            document.getElementById("Li").value = "";
            document.getElementById("CantVend").value = ""; 
		    document.getElementById("IDProductoNota").value = "";  
		    document.getElementById("NombreProductoNota").value = ""; 
		    document.getElementById("PrecioVentaNota").value = ""; 
		    document.getElementById("DescuentoNota").value = ""; 
		    document.getElementById("IVNota").value = "";
		    document.getElementById("CantidadDev").value = "";
		    document.getElementById("UnidadMedida").value = "";
		    document.getElementById("CantDev").value= "";
		    document.getElementById("PrecioCosto").value= "";

              $("#Li").focus();

              }
              
          }
      });

      return false;
		}
	}
	
	//funcion para comprobar si todo los elementos de un string son iguales
function allEqual(input) {
    return input.split('').every(char => char === input[0]);
}
	
</script>

	<script type="text/javascript">

	function GrabarFactura()
	{	
		var TipoDoc=document.getElementById('TipoDocumento').value;
		
		if(TipoDoc=='NotaCredito')//si es Nota C/D enviar a Nota.php a guardar o modificar
		{
			//alert('Se va a hacer una nota');
			
			var SinCantADev=0;
			var CantidadesIguales=0;
			var CantidadMayor=0;
			
			
			$('#dgvDetalleFactura tr').each(function(row, tr){
				
			        var Cantidad= parseFloat($(tr).find('td:eq(3)').text()).toFixed(2);
			        var CantADev= $(tr).find('td:eq(21)').text();
			        var CantDevuelta= parseFloat($(tr).find('td:eq(22)').text()).toFixed(2);
			        
			        if(CantADev=="")
			        {
						SinCantADev++;
					}
					
					if(CantADev!='' && Cantidad==CantDevuelta)
					{
						CantidadesIguales++;
					}
			});
			
			
			
			
			var dgvDetalleFactura = document.getElementById('dgvDetalleFactura');
			var TipoBoton= (document.getElementById('IDFactura').value=="")?'GrabarNota':'ModificarNota';//guardar o modificar
				
			 	//si no existe el codigo de factura es guardar  

		    if(document.getElementById('TipoDocumento').value=="Factura" && 
		       document.getElementById('Cedula').value=="")
		    {
		        $("#MSJ").html("Error: Debe ingresar la cédula del emisor");
		        $("#ModalMSJ").modal("show");
		    }
		    else if((document.getElementById('TipoDocumento').value=="Factura" && 
		             document.getElementById('Cedula').value!="") &&
		            (document.getElementById('Nombre').value=="" ||
		            document.getElementById('Telefono').value=="" ||
		            document.getElementById('Email').value=="" ||
		            document.getElementById('Direccion').value=="" ||
		            document.getElementById('Zona').value==""))
		    {
		        $("#MSJ").html("Error: Debe ingresar un emisor");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('CondicionVenta').value=="")
		    {
		        $("#MSJ").html("Error: Debe seleccionar una condición de venta");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('Plazo').value=="")
		    {
		        $("#MSJ").html("Error: Debe seleccionar un plazo");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(!document.getElementById('cbEfectivo').checked &&
					!document.getElementById('cbTarjeta').checked &&
					!document.getElementById('cbCheque').checked &&
					!document.getElementById('cbTransferenciaDepositoBancario').checked &&
					!document.getElementById('cbRecaudado').checked)
		    {
		        $("#MSJ").html("Error: Debe seleccionar un medio de pago");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('TipoMoneda').value=="")
		    {
		        $("#MSJ").html("Error: Debe seleccionar un tipo de moneda");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('TipoCambio').value=="")
		    {
		        $("#MSJ").html("Error: Debe ingresar un tipo de cambio");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('Terminal').value=="")
		    {
		        $("#MSJ").html("Error: Debe ingresar una terminal");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('Sucursal').value=="")
		    {
		        $("#MSJ").html("Error: Debe ingresar una sucursal");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('TipoDocumento').value=="")
		    {
		        $("#MSJ").html("Error: Debe seleccionar un tipo de documento");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('Razon').value=="")
		    {
		        $("#MSJ").html("Error: Debe ingresar una razón");
		        $("#ModalMSJ").modal("show");
		    }
		    else if((dgvDetalleFactura.rows.length-1)==0)
		    {
		        $("#MSJ").html("Error: Debe agregar productos a la nota");
		        $("#ModalMSJ").modal("show");
		    }
		    else if((SinCantADev-1)==(dgvDetalleFactura.rows.length-1))
		    {
				$("#MSJ").html("Error: No ha agregado productos para hacer la devolución");
		        $("#ModalMSJ").modal("show");
			} 
			else if(CantidadesIguales>0)
		    {
				$("#MSJ").html("Error: Ya se han devuelto la totalidad de productos en algunas lineas de la factura");
		        $("#ModalMSJ").modal("show");
			}
		    else
		    {
		    	var TableData = new Array();
		    
		        	$('#dgvDetalleFactura tr').each(function(row, tr){
		        					            
							TableData[row]={
				             "NoLinea" : $(tr).find('td:eq(0)').text()	
				            ,"IDProducto" : $(tr).find('td:eq(1)').text()
				            , "NombreProducto" :$(tr).find('td:eq(2)').text()
				            , "Cantidad" : $(tr).find('td:eq(3)').text()
				            , "CantidadADevolver" : $(tr).find('td:eq(21)').text()
				            , "CantidadDevuelta" : $(tr).find('td:eq(22)').text()
				            , "PrecioVentaSinIV" : $(tr).find('td:eq(4)').text()
				            , "UnidadMedida" : $(tr).find('td:eq(5)').text()
				            , "ImpuestoVentas" : $(tr).find('td:eq(6)').text()
				            , "Descuento" : $(tr).find('td:eq(7)').text()
				            , "PrecioCosto" : $(tr).find('td:eq(15)').text()
				            , "Bonificacion" : $(tr).find('td:eq(16)').text()
				            , "TotalNeto" : $(tr).find('td:eq(18)').text()
				            , "IDDetalle" : $(tr).find('td:eq(20)').text()
				        	}
			        });
		        
		        	TableData.shift();/*quitar la fila del encabezado de la tabla*/
		        	
		        	
		        	var MP='';
		        	
		        	if(document.getElementById('cbEfectivo').checked)
					{
						MP+=document.getElementById('cbEfectivo').value;	
					}
					if(document.getElementById('cbTarjeta').checked)
					{
						MP+=document.getElementById('cbTarjeta').value;
					}
					if(document.getElementById('cbCheque').checked)
					{
						MP+=document.getElementById('cbCheque').value;
					}
					if(document.getElementById('cbTransferenciaDepositoBancario').checked)
					{
						MP+=document.getElementById('cbTransferenciaDepositoBancario').value;
					}
					if(document.getElementById('cbRecaudado').checked)
					{
						MP+=document.getElementById('cbRecaudado').value;
					}
					

		       		 $.ajax({
		                  url: 'Logica/Nota.php',
		                  type: 'post',
		                  data: 
		                  {
		                     btnFactura:TipoBoton,

		                     /*Campos de encabezado de Factura*/

		                     Cedula:document.getElementById('Cedula').value,
		                     Nombre:document.getElementById('Nombre').value,

							 IDFactura:document.getElementById('IDFactura').value,
		                     NoFactura:document.getElementById('NoFactura').value,
		                     NoOrden:document.getElementById('NoOrden').value,
		                     Fecha:document.getElementById('Fecha').value,
		                     Plazo:document.getElementById('Plazo').value,
		                     
		                     MedioPago:MP,
		                     
		                     
		                     
		                     CondicionVenta:document.getElementById('CondicionVenta').value,
		                     TipoMoneda:document.getElementById('TipoMoneda').value,
		                     TipoCambio:document.getElementById('TipoCambio').value,
		                     Sucursal:document.getElementById('Sucursal').value,
		                     Terminal:document.getElementById('Terminal').value,
		                     TipoDocumento:document.getElementById('TipoDocumento').value,/*01=Factura 02=NotaDebito 03=Nota Credito 04=Tiquete*/
		                     TipoDocumentoAfectado:document.getElementById('TipoDocAfec').value,
		                     NoReferencia:document.getElementById('NoReferencia').value,//No factura
		                     NoClave:document.getElementById('NoClave').value,//NoClaveDocAfectado
		                     Razon:document.getElementById('Razon').value,

		                     DetalleNota:TableData,

		                     /*Campos de Calculos*/
		                     MontSEF:document.getElementById('MontoSEF').value,
		                     MontSGF:document.getElementById('MontoSGF').value,
		                     MontExF:document.getElementById('ExentoF').value,
		                     MontGrF:document.getElementById('GravadoF').value,
		                     MontSubF:document.getElementById('SubF').value,
		                     MontDescF:document.getElementById('DescF').value,
		                     MontIVF:document.getElementById('ImpuestoVentasF').value,
		                     MontOImpF:document.getElementById('OImpF').value,
		                     MontTF:document.getElementById('TotalF').value,
		                  },
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
		}
		else
		{
			
				/*Poner la tabla del Detalle en un vector*/
			var dgvDetalleFactura = document.getElementById('dgvDetalleFactura');
			var TipoBoton= (document.getElementById('IDFactura').value=="")?'GrabarFactura':'ModificarFactura';//guardar o modificar
				
			 	//si no existe el codigo de factura es guardar  

		    if(document.getElementById('TipoDocumento').value=="Factura" && 
		       document.getElementById('Cedula').value=="")
		    {
		        $("#MSJ").html("Error: Debe ingresar la cédula del emisor");
		        $("#ModalMSJ").modal("show");
		    }
		    else if((document.getElementById('TipoDocumento').value=="Factura" && 
		             document.getElementById('Cedula').value!="") &&
		            (document.getElementById('Nombre').value=="" ||
		            document.getElementById('Telefono').value=="" ||
		            document.getElementById('Email').value=="" ||
		            document.getElementById('Direccion').value=="" ||
		            document.getElementById('Zona').value==""))
		    {
		        $("#MSJ").html("Error: Debe ingresar un emisor");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('CondicionVenta').value=="")
		    {
		        $("#MSJ").html("Error: Debe seleccionar una condición de venta");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('Plazo').value=="")
		    {
		        $("#MSJ").html("Error: Debe seleccionar un plazo");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(!document.getElementById('cbEfectivo').checked &&
					!document.getElementById('cbTarjeta').checked &&
					!document.getElementById('cbCheque').checked &&
					!document.getElementById('cbTransferenciaDepositoBancario').checked &&
					!document.getElementById('cbRecaudado').checked)
		    {
		        $("#MSJ").html("Error: Debe seleccionar un medio de pago");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('TipoMoneda').value=="")
		    {
		        $("#MSJ").html("Error: Debe seleccionar un tipo de moneda");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('TipoCambio').value=="")
		    {
		        $("#MSJ").html("Error: Debe ingresar un tipo de cambio");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('Terminal').value=="")
		    {
		        $("#MSJ").html("Error: Debe ingresar una terminal");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('Sucursal').value=="")
		    {
		        $("#MSJ").html("Error: Debe ingresar una sucursal");
		        $("#ModalMSJ").modal("show");
		    }
		    else if(document.getElementById('TipoDocumento').value=="")
		    {
		        $("#MSJ").html("Error: Debe seleccionar un tipo de documento");
		        $("#ModalMSJ").modal("show");
		    }
		    else if((dgvDetalleFactura.rows.length-1)==0)
		    {
		        $("#MSJ").html("Error: Debe agregar productos a la factura");
		        $("#ModalMSJ").modal("show");
		    }
		    else
		    {
					var TableData = new Array();
		    
		        	$('#dgvDetalleFactura tr').each(function(row, tr){
			            TableData[row]={
			             "NoLinea" : $(tr).find('td:eq(0)').text()	
			            ,"IDProducto" : $(tr).find('td:eq(1)').text()
			            , "NombreProducto" :$(tr).find('td:eq(2)').text()
			            , "Cantidad" : $(tr).find('td:eq(3)').text()
			            , "PrecioVentaSinIV" : $(tr).find('td:eq(4)').text()
			            , "UnidadMedida" : $(tr).find('td:eq(5)').text()
			            , "ImpuestoVentas" : $(tr).find('td:eq(6)').text()
			            , "Descuento" : $(tr).find('td:eq(7)').text()
			            , "PrecioCosto" : $(tr).find('td:eq(15)').text()
			            , "Bonificacion" : $(tr).find('td:eq(16)').text()
			            , "TotalNeto" : $(tr).find('td:eq(18)').text()
			            , "IDDetalle" : $(tr).find('td:eq(20)').text()
			        }
			        });
		        
		        	TableData.shift();/*quitar la fila del encabezado de la tabla*/
		        	
		        	var MP='';
		        	
		        	if(document.getElementById('cbEfectivo').checked)
					{
						MP+=document.getElementById('cbEfectivo').value;	
					}
					if(document.getElementById('cbTarjeta').checked)
					{
						MP+=document.getElementById('cbTarjeta').value;
					}
					if(document.getElementById('cbCheque').checked)
					{
						MP+=document.getElementById('cbCheque').value;
					}
					if(document.getElementById('cbTransferenciaDepositoBancario').checked)
					{
						MP+=document.getElementById('cbTransferenciaDepositoBancario').value;
					}
					if(document.getElementById('cbRecaudado').checked)
					{
						MP+=document.getElementById('cbRecaudado').value;
					}

		       		 $.ajax({
		                  url: 'Logica/Factura.php',
		                  type: 'post',
		                  data: 
		                  {
		                     btnFactura:TipoBoton,

		                     /*Campos de encabezado de Factura*/

		                     Cedula:document.getElementById('Cedula').value,
		                     Nombre:document.getElementById('Nombre').value,

							 IDFactura:document.getElementById('IDFactura').value,
		                     NoFactura:document.getElementById('NoFactura').value,
		                     NoOrden:document.getElementById('NoOrden').value,
		                     Fecha:document.getElementById('Fecha').value,
		                     Plazo:document.getElementById('Plazo').value,
		                     
		                     MedioPago:MP,
		                     
		                     CondicionVenta:document.getElementById('CondicionVenta').value,
		                     TipoMoneda:document.getElementById('TipoMoneda').value,
		                     TipoCambio:document.getElementById('TipoCambio').value,
		                     Sucursal:document.getElementById('Sucursal').value,
		                     Terminal:document.getElementById('Terminal').value,
		                     TipoDocumento:document.getElementById('TipoDocumento').value,/*01=Factura 02=NotaDebito 03=Nota Credito 04=Tiquete*/

		                     DetalleFactura:TableData,

		                     /*Campos de Calculos*/
		                     MontSEF:document.getElementById('MontoSEF').value,
		                     MontSGF:document.getElementById('MontoSGF').value,
		                     MontExF:document.getElementById('ExentoF').value,
		                     MontGrF:document.getElementById('GravadoF').value,
		                     MontSubF:document.getElementById('SubF').value,
		                     MontDescF:document.getElementById('DescF').value,
		                     MontIVF:document.getElementById('ImpuestoVentasF').value,
		                     MontOImpF:document.getElementById('OImpF').value,
		                     MontTF:document.getElementById('TotalF').value,
		                  },
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
		}

	}	
	
	</script>	
	
	<script>
		function OcultarEncabezado(){
			
			var fieldset = document.getElementById("fsEncabezado");
			var botonOEF= document.getElementById("OcultarEncabezadoFactura");
			var botonOED= document.getElementById("OcultarEncabezadoDocumento");

			if(botonOEF.textContent=="Ocultar Encabezado" || botonOED.textContent=="Ocultar Encabezado")
			{
				$('#fsEncabezado').hide();
				botonOEF.textContent="Mostrar Encabezado";
				botonOED.textContent="Mostrar Encabezado";
			}
			else
			{
				$('#fsEncabezado').show();
				botonOEF.textContent="Ocultar Encabezado";
				botonOED.textContent="Ocultar Encabezado";
			}
		}


	</script>
	
	<script>
		
function BuscarLinea() 
{

  var NoLinea, filtro, tabla, tr, td, i, txtValor;

  input = document.getElementById("Li");

  filtro = input.value;

  tabla = document.getElementById("dgvDetalleFactura");

  tr = tabla.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) 
  {
    td = tr[i].getElementsByTagName("td")[0];

    if (td) 
    {
      txtValor = td.textContent || td.innerText;

      if (txtValor.indexOf(filtro) > -1) 
      {
        document.getElementById("CantVend").value = tr[i].getElementsByTagName("td")[3].textContent;
        document.getElementById("CantidadBonificacion").value = tr[i].getElementsByTagName("td")[16].textContent; 
        document.getElementById("IDProductoNota").value = tr[i].getElementsByTagName("td")[1].textContent;  
        document.getElementById("NombreProductoNota").value = tr[i].getElementsByTagName("td")[2].textContent; 
        document.getElementById("PrecioVentaNota").value = tr[i].getElementsByTagName("td")[4].textContent; 
        document.getElementById("DescuentoNota").value = tr[i].getElementsByTagName("td")[7].textContent; 
        document.getElementById("IVNota").value = tr[i].getElementsByTagName("td")[6].textContent;
        document.getElementById("CantidadDev").value = tr[i].getElementsByTagName("td")[22].textContent;
        document.getElementById("UnidadMedida").value = tr[i].getElementsByTagName("td")[5].textContent;
        document.getElementById("PrecioCosto").value= tr[i].getElementsByTagName("td")[15].textContent;
        document.getElementById("CantidadDevAnt").value= tr[i].getElementsByTagName("td")[21].textContent;
        
        break;
      }
      else
      {
	  	document.getElementById("CantVend").value = "";
	  	document.getElementById("CantidadBonificacion").value = "";  
	    document.getElementById("IDProductoNota").value = "";  
	    document.getElementById("NombreProductoNota").value = ""; 
	    document.getElementById("PrecioVentaNota").value = ""; 
	    document.getElementById("DescuentoNota").value = ""; 
	    document.getElementById("IVNota").value = "";
	    document.getElementById("CantidadDev").value = "";
	    document.getElementById("UnidadMedida").value = "";
	    document.getElementById("CantDev").value= "";
	    document.getElementById("PrecioCosto").value= "";
	    document.getElementById("CantidadDevAnt").value= "";
	  }
    }    
  }
  
  if(!filtro)
  {
	document.getElementById("CantVend").value = "";
	document.getElementById("CantidadBonificacion").value = ""; 
    document.getElementById("IDProductoNota").value = "";  
    document.getElementById("NombreProductoNota").value = ""; 
    document.getElementById("PrecioVentaNota").value = ""; 
    document.getElementById("DescuentoNota").value = ""; 
    document.getElementById("IVNota").value = "";
    document.getElementById("CantidadDev").value = "";
    document.getElementById("UnidadMedida").value = "";
    document.getElementById("CantDev").value= "";
    document.getElementById("PrecioCosto").value= "";
    document.getElementById("CantidadDevAnt").value= "";
  } 
}
		
	</script>
	

	<script type="text/javascript">
		/*Cargar consecutivo de documento factura por defecto*/
window.onload = function() {
	
	document.getElementById('CedulaReceptor').value="<?php echo $_SESSION['Cedula']?>";
	document.getElementById('NombreReceptor').value="<?php echo $_SESSION['NombreRepresentante']?>";
	document.getElementById('ZonaReceptor').value="<?php echo $_SESSION['Zona']?>";
	document.getElementById('EmailReceptor').value="<?php echo $_SESSION['Email']?>";
	document.getElementById('TelefonoReceptor').value="<?php echo $_SESSION['Telefono']?>";
	document.getElementById('DireccionReceptor').value="<?php echo $_SESSION['Direccion']?>";

	var Estatus=sessionStorage.getItem("Estatus");
	var TipoDocAfectado=sessionStorage.getItem("TipoDocumento");
	var NoFactElect=sessionStorage.getItem("NoFactElect");
	var IDFactura=sessionStorage.getItem("IDFactura");
    var CedulaCliente=sessionStorage.getItem("CedulaCliente");
    var Modificar=sessionStorage.getItem("Modificar");
    var TipoDocAGenerar=sessionStorage.getItem("TipoDocAGenerar");
    var CondicionNota=sessionStorage.getItem("CondicionNota");
    var ValidarTipoDocumento=sessionStorage.getItem("ValidarTipoDoc");

	if(TipoDocAGenerar!=null && (TipoDocAGenerar=='NotaCredito'|| TipoDocAGenerar=='NotaDebito'))//se va a hacer una nota credito o debito
	{
		$("#AdvNota").show();
		
		if(Estatus!="" && NoFactElect!="" && IDFactura!=null && CedulaCliente!=null && Modificar!=null && TipoDocAGenerar=='NotaDebito')//para ND
    	{
	    	 document.getElementById('IDFactura').value=IDFactura;
	         sessionStorage.clear();

	         $.ajax({
	            url: 'Logica/Nota.php',
	            type: 'post',
	            data: 
	            {
	              MostrarDatos:'MostrarDatos',
	              IDFactura:IDFactura,
	              CedulaCliente:CedulaCliente,
	              TipoDocAGenerar:TipoDocAGenerar
	            },
	            dataType: 'json',

	        	success:function(response){
	          
	            var len = response.length;

	            if(len > 0){
	                		/*Cliente*/
	                  document.getElementById('IDFactura').value = "";
	                  document.getElementById('Cedula').value = response[0]['FK_Cliente']; 
	                  document.getElementById('Nombre').value = response[0]['NombreCliente'];
	                  document.getElementById('Telefono').value = response[0]['Telefono'];
	                  document.getElementById('Email').value = response[0]['Email1'];
	                  document.getElementById('Direccion').value = response[0]['Direccion'];
	                  document.getElementById('Zona').value = response[0]['Zona'];
	                  
	                  document.getElementById('NoReferencia').value=response[0]['NoNota'];//20 digitos Cons+Ter+Suc
	                  document.getElementById('NoClave').value=response[0]['Clave'];//clave de 50 digitos
	                  document.getElementById('Razon').value="";
	                  
	                  /*Encabezado Factura*/
	                  document.getElementById('NoFactura').value = response[0]['NoTipoDocAGenerar'];//consecutivo de notadebito
	                  document.getElementById('NoOrden').value = response[0]['NoOrden'];
	                  
	                  document.getElementById('CondicionVenta').value = response[0]['CondicionVenta'];
	                  document.getElementById('Plazo').value = response[0]['Plazo'];
	                  
	                  document.getElementById('TipoDocAfec').value = TipoDocAfectado;
	                  
	                  //MedioPago
	                  
	                  if(response[0]['MedioPago'].indexOf('01')>-1)
	                  {
					  	document.getElementById('cbEfectivo').checked=true;
					  }
					  if(response[0]['MedioPago'].indexOf('02')>-1)
	                  {
					  	document.getElementById('cbTarjeta').checked=true;
					  }
	                  if(response[0]['MedioPago'].indexOf('03')>-1)
	                  {
					  	document.getElementById('cbCheque').checked=true;
					  }
	                  if(response[0]['MedioPago'].indexOf('04')>-1)
	                  {
					  	document.getElementById('cbTransferenciaDepositoBancario').checked=true;
					  }
					  if(response[0]['MedioPago'].indexOf('05')>-1)
	                  {
					  	document.getElementById('cbRecaudado').checked=true;
					  }
	                  
	                  document.getElementById('TipoMoneda').value = response[0]['TipoMoneda']; 
	                  document.getElementById('TipoCambio').value = response[0]['TipoCambio']; 
	                  document.getElementById('Terminal').value = response[0]['Terminal']; 
	                  document.getElementById('Sucursal').value = response[0]['Sucursal']; 
	                  document.getElementById('TipoDocumento').value = TipoDocAGenerar;
	                  
	                  document.getElementById('MontoSEF').value = response[0]['ServicioExento'];
	                  document.getElementById('MontoSGF').value = response[0]['ServicioGravado'];
	                  document.getElementById('ExentoF').value = response[0]['MontoExento'];
	                  document.getElementById('GravadoF').value = response[0]['MontoGravado'];
	                  document.getElementById('SubF').value = response[0]['SubtotalNota']; 
	                  document.getElementById('DescF').value = response[0]['Descuento']; 
	                  document.getElementById('ImpuestoVentasF').value = response[0]['Impuesto']; 
	                  document.getElementById('OImpF').value = response[0]['OtroImpuesto']; 
	                  document.getElementById('TotalF').value = response[0]['TotalNota'];
	                  
	                  /*Detalle Factura*/
	                  var DetalleNota=response[0]['DetalleNota'];
	                  
	                  DetalleNota.forEach((subArr)=>{
						
					  var a = document.getElementById('dgvDetalleFactura').insertRow(1+(document.getElementById('dgvDetalleFactura').rows.length-1));
						
					  var NoFilaDetalle=a.insertCell(0);
	                  var Codigo = a.insertCell(1);
	                  var Producto = a.insertCell(2);
	                  var Cantidad = a.insertCell(3);
	                  var Precio = a.insertCell(4);
	                  var Medida = a.insertCell(5);
	                  var Impuesto = a.insertCell(6);
	                  var Descuento = a.insertCell(7);

	                  var MontoExento = a.insertCell(8);
	                  var MontoGravado = a.insertCell(9);
	                  var MontoSExento = a.insertCell(10);
	                  var MontoSGravado = a.insertCell(11);
	                  var MontoIV = a.insertCell(12);
	                  var MontoOtroI = a.insertCell(13);
	                  var MontoDescuento = a.insertCell(14);
	                  var PrecioCosto = a.insertCell(15);
	                  var Bonificacion = a.insertCell(16);  

	                  var Subtotal = a.insertCell(17);
	                  var Total = a.insertCell(18);
	                  var BotonBorrar = a.insertCell(19);
	                  var IDDetalle = a.insertCell(20);
	                  var CantADevolver = a.insertCell(21);
	                  var CantDevuelta = a.insertCell(22);   
	                  
	                  MontoExento.style.display = 'none';
	                  MontoGravado.style.display = 'none';
	                  MontoSExento.style.display = 'none';
	                  MontoSGravado.style.display = 'none';
	                  MontoIV.style.display = 'none';
	                  MontoOtroI.style.display = 'none';
	                  MontoDescuento.style.display = 'none';
	                  PrecioCosto.style.display = 'none';
	                  Bonificacion.style.display = 'none';
	                  IDDetalle.style.display = 'none'; 
	                  CantADevolver.style.display = 'none';
	                  CantDevuelta.style.display = 'none'; 
						
					  NoFilaDetalle.innerHTML= subArr['NoLinea'];
	                  Codigo.innerHTML = subArr['IDProducto'];
	                  Producto.innerHTML = subArr['NombreProducto'];
	                  Cantidad.innerHTML = subArr['Cantidad'];
	                  Precio.innerHTML = subArr['PrecioVSinIV'];
	                  Medida.innerHTML = subArr['UM'];
	                  Impuesto.innerHTML = subArr['Impuesto'];
	                  Descuento.innerHTML = subArr['Descuento'];
	                  PrecioCosto.innerHTML = subArr['PrecioCosto'];
	                  Bonificacion.innerHTML = subArr['Bonificacion'];

	                  MontoExento.innerHTML = subArr['MontoE'];
	                  MontoGravado.innerHTML = subArr['MontoG'];
	                  MontoSExento.innerHTML = subArr['MontoSE'];
	                  MontoSGravado.innerHTML = subArr['MontoSG'];
	                  MontoIV.innerHTML = subArr['MontoImpV'];
	                  MontoOtroI.innerHTML = subArr['MontoOImp'];
	                  MontoDescuento.innerHTML = subArr['MontoDesc'];


	                  Subtotal.innerHTML = subArr['SubtL'];
	                  Total.innerHTML = subArr['TotL'];
	                  
	                  BotonBorrar.innerHTML='';
	                  
	                  IDDetalle.innerHTML= subArr['IDDetalle']; 

	                  CantADevolver.innerHTML=subArr['Cantidad'];
					  CantDevuelta.innerHTML="";
					  });
					  
					  	$('#Cedula').prop("readonly",true);
						$('#NoOrden').prop("readonly",true);

						$('#IDProducto').prop("readonly",true); 
						$('#Cantidad').prop("readonly",true);
						$('#PrecioVenta').prop("readonly",true); 
						$('#Descuento').prop("readonly",true);

						/*disable*/$('#CondicionVenta').prop("disabled",true);
						/*disable*/$('#Plazo').prop("disabled",true);
						
						/*disable MedioPago*/
						$('#cbEfectivo').prop("disabled",true);
						$('#cbTarjeta').prop("disabled",true);
						$('#cbCheque').prop("disabled",true);
						$('#cbTransferenciaDepositoBancario').prop("disabled",true);
						$('#cbRecaudado').prop("disabled",true);
						
						/*disable*/$('#TipoMoneda').prop("disabled",true);
						/*disable*/$('#TipoDocumento').prop("disabled",true);
						/*disable*/$('#Razon').prop("disabled",false);
						
						
						//TipoDocumento
						  var TipoDoc = $('#TipoDocumento').val();
					      var NTipoDoc = $("#TipoDocumento :selected").text();
					      var leyenda=$("#Leyenda");

					  leyenda.text(NTipoDoc);
					  document.getElementById('EtiquetaTipoDoc').textContent='Nº '+NTipoDoc;
					  document.getElementById('exampleModalLabel').innerHTML=NTipoDoc;
					  
					  document.getElementById('lblDocAfectado').textContent= 'Nº '+TipoDocAfectado+' afectada';
						
						$("#AgrProd").hide();
						$("#GrabarFactura").hide();
						$("#EnviarAHacienda").hide();
						
						$("#divDocumentoAfectado").show();
						$("#divRazon").show(); 
						
						$("#BotonesNota").show();
							document.getElementById('GrabarNota').textContent=(TipoDocAGenerar=='NotaCredito')?'Grabar Nota Crédito':'Grabar Nota Débito';
							
							$("#DIVAgregarProducto").hide();
							$("#DIVBuscarLinea").show();
							
							document.getElementById("Li").readOnly = true;
							document.getElementById("CantDev").readOnly = true;
		        	}

	        	}

	        });

	         return false;
	    }
		else if(Estatus!="" && NoFactElect!="" && IDFactura!=null && CedulaCliente!=null && Modificar!=null && TipoDocAGenerar=='NotaCredito')//para NC
    	{
	    	 document.getElementById('IDFactura').value=IDFactura;
	         sessionStorage.clear();

	         $.ajax({
	            url: 'Logica/Factura.php',//va para factura porque hay que cargar la factura completa para hacer la nota
	            type: 'post',
	            data: 
	            {
	              MostrarDatos:'MostrarDatos',
	              IDFactura:IDFactura,
	              CedulaCliente:CedulaCliente,
	              TipoDocAGenerar:TipoDocAGenerar
	            },
	            dataType: 'json',

	        	success:function(response){
	          
	            var len = response.length;

	            if(len > 0){
	                	/*Cliente*/
	                  document.getElementById('IDFactura').value = "";
	                  document.getElementById('Cedula').value = response[0]['FK_Cliente']; 
	                  document.getElementById('Nombre').value = response[0]['NombreCliente'];
	                  document.getElementById('Telefono').value = response[0]['Telefono'];
	                  document.getElementById('Email').value = response[0]['Email1'];
	                  document.getElementById('Direccion').value = response[0]['Direccion'];
	                  document.getElementById('Zona').value = response[0]['Zona'];
	                  
	                  /*Encabezado Factura*/
	                  document.getElementById('NoFactura').value = response[0]['NoTipoDocAGenerar'];//consecutivo de notacredito
	                  document.getElementById('NoOrden').value = response[0]['NoOrden'];

	                  document.getElementById('CondicionVenta').value = response[0]['CondicionVenta'];
	                  document.getElementById('Plazo').value = response[0]['Plazo'];
	                  
	                  //MedioPago
	                  
	                  if(response[0]['MedioPago'].indexOf('01')>-1)
	                  {
					  	document.getElementById('cbEfectivo').checked=true;
					  }
					  if(response[0]['MedioPago'].indexOf('02')>-1)
	                  {
					  	document.getElementById('cbTarjeta').checked=true;
					  }
	                  if(response[0]['MedioPago'].indexOf('03')>-1)
	                  {
					  	document.getElementById('cbCheque').checked=true;
					  }
	                  if(response[0]['MedioPago'].indexOf('04')>-1)
	                  {
					  	document.getElementById('cbTransferenciaDepositoBancario').checked=true;
					  }
					  if(response[0]['MedioPago'].indexOf('05')>-1)
	                  {
					  	document.getElementById('cbRecaudado').checked=true;
					  }                 
	                  
	                  
	                  document.getElementById('TipoMoneda').value = response[0]['TipoMoneda']; 
	                  document.getElementById('TipoCambio').value = response[0]['TipoCambio']; 
	                  document.getElementById('Terminal').value = response[0]['Terminal']; 
	                  document.getElementById('Sucursal').value = response[0]['Sucursal']; 
	                  document.getElementById('TipoDocumento').value = TipoDocAGenerar;
	                  document.getElementById('NoReferencia').value = response[0]['NoFactura'];
	                  document.getElementById('NoClave').value = response[0]['Clave'];
	                  
	                  document.getElementById('MontoSEF').value = (CondicionNota!=null && CondicionNota=='Parcial')?'0.00':response[0]['ServicioExento'];
	                  document.getElementById('MontoSGF').value = (CondicionNota!=null && CondicionNota=='Parcial')?'0.00':response[0]['ServicioGravado'];
	                  document.getElementById('ExentoF').value = (CondicionNota!=null && CondicionNota=='Parcial')?'0.00':response[0]['MontoExento'];
	                  document.getElementById('GravadoF').value = (CondicionNota!=null && CondicionNota=='Parcial')?'0.00':response[0]['MontoGravado'];
	                  document.getElementById('SubF').value = (CondicionNota!=null && CondicionNota=='Parcial')?'0.00':response[0]['SubtotalFactura']; 
	                  document.getElementById('DescF').value = (CondicionNota!=null && CondicionNota=='Parcial')?'0.00':response[0]['Descuento']; 
	                  document.getElementById('ImpuestoVentasF').value = (CondicionNota!=null && CondicionNota=='Parcial')?'0.00':response[0]['Impuesto']; 
	                  document.getElementById('OImpF').value = (CondicionNota!=null && CondicionNota=='Parcial')?'0.00':response[0]['OtroImpuesto']; 
	                  document.getElementById('TotalF').value = (CondicionNota!=null && CondicionNota=='Parcial')?'0.00':response[0]['TotalFactura'];
	                  
	                  document.getElementById('TipoDocAfec').value=TipoDocAfectado;
	                  
	                  /*Detalle Factura*/
	                  var DetalleFactura=response[0]['DetalleFactura'];
	                  
	                  DetalleFactura.forEach((subArr)=>{
						
					  var a = document.getElementById('dgvDetalleFactura').insertRow(1+(document.getElementById('dgvDetalleFactura').rows.length-1));
						
					  var NoFilaDetalle=a.insertCell(0);
	                  var Codigo = a.insertCell(1);
	                  var Producto = a.insertCell(2);
	                  var Cantidad = a.insertCell(3);
	                  var Precio = a.insertCell(4);
	                  var Medida = a.insertCell(5);
	                  var Impuesto = a.insertCell(6);
	                  var Descuento = a.insertCell(7);

	                  var MontoExento = a.insertCell(8);
	                  var MontoGravado = a.insertCell(9);
	                  var MontoSExento = a.insertCell(10);
	                  var MontoSGravado = a.insertCell(11);
	                  var MontoIV = a.insertCell(12);
	                  var MontoOtroI = a.insertCell(13);
	                  var MontoDescuento = a.insertCell(14);
	                  var PrecioCosto = a.insertCell(15);
	                  var Bonificacion = a.insertCell(16);  

	                  var Subtotal = a.insertCell(17);
	                  var Total = a.insertCell(18);
	                  var BotonBorrar = a.insertCell(19);
	                  var IDDetalle = a.insertCell(20);
	                  var CantADevolver = a.insertCell(21);
	                  var CantDevuelta = a.insertCell(22);   
	                  
	                  MontoExento.style.display = 'none';
	                  MontoGravado.style.display = 'none';
	                  MontoSExento.style.display = 'none';
	                  MontoSGravado.style.display = 'none';
	                  MontoIV.style.display = 'none';
	                  MontoOtroI.style.display = 'none';
	                  MontoDescuento.style.display = 'none';
	                  PrecioCosto.style.display = 'none';
	                  Bonificacion.style.display = 'none';
	                  IDDetalle.style.display = 'none'; 
	                  CantADevolver.style.display = 'none';
	                  CantDevuelta.style.display = 'none'; 
						
					  NoFilaDetalle.innerHTML= subArr['NoLinea'];
	                  Codigo.innerHTML = subArr['IDProducto'];
	                  Producto.innerHTML = subArr['NombreProducto'];
	                  Cantidad.innerHTML = subArr['Cantidad'];
	                  Precio.innerHTML = subArr['PrecioVSinIV'];
	                  Medida.innerHTML = subArr['UM'];
	                  Impuesto.innerHTML = subArr['Impuesto'];
	                  Descuento.innerHTML = subArr['Descuento'];
	                  PrecioCosto.innerHTML = subArr['PrecioCosto'];
	                  Bonificacion.innerHTML = subArr['Bonificacion'];

	                  MontoExento.innerHTML = subArr['MontoE'];
	                  MontoGravado.innerHTML = subArr['MontoG'];
	                  MontoSExento.innerHTML = subArr['MontoSE'];
	                  MontoSGravado.innerHTML = subArr['MontoSG'];
	                  MontoIV.innerHTML = subArr['MontoImpV'];
	                  MontoOtroI.innerHTML = subArr['MontoOImp'];
	                  MontoDescuento.innerHTML = subArr['MontoDesc'];


	                  Subtotal.innerHTML = subArr['SubtL'];
	                  Total.innerHTML = subArr['TotL'];
	                  
	                  BotonBorrar.innerHTML='';
	                  
	                  IDDetalle.innerHTML= subArr['IDDetalle']; 

	                  CantADevolver.innerHTML=(CondicionNota!="Parcial")?subArr['Cantidad']:"";
					  CantDevuelta.innerHTML=subArr['CantidadDevuelta'];
					  });
					  
					  	$('#Cedula').prop("readonly",true);
						$('#NoOrden').prop("readonly",true);

						$('#IDProducto').prop("readonly",true); 
						$('#Cantidad').prop("readonly",true);
						$('#PrecioVenta').prop("readonly",true); 
						$('#Descuento').prop("readonly",true);

						/*disable*/$('#CondicionVenta').prop("disabled",true);
						/*disable*/$('#Plazo').prop("disabled",true);
						
						/*disable MedioPago*/
						$('#cbEfectivo').prop("disabled",true);
						$('#cbTarjeta').prop("disabled",true);
						$('#cbCheque').prop("disabled",true);
						$('#cbTransferenciaDepositoBancario').prop("disabled",true);
						$('#cbRecaudado').prop("disabled",true);
						
						/*disable*/$('#TipoMoneda').prop("disabled",true);
						/*disable*/$('#TipoDocumento').prop("disabled",true);
						/*disable*/$('#Razon').prop("disabled",false);
						
						//TipoDocumento
						  var TipoDoc = $('#TipoDocumento').val();
					      var NTipoDoc = $("#TipoDocumento :selected").text();
					      var leyenda=$("#Leyenda");

					  leyenda.text(NTipoDoc);
					  document.getElementById('EtiquetaTipoDoc').textContent='Nº '+NTipoDoc;
					  
					  document.getElementById('lblDocAfectado').textContent=
					  (TipoDocAfectado!=null && TipoDocAfectado=='Tiquete')?'Nº '+TipoDocAfectado+' afectado':
					  'Nº '+TipoDocAfectado+' afectada';
					  
					  document.getElementById('exampleModalLabel').innerHTML=NTipoDoc;
						
						
						if(CondicionNota!=null && CondicionNota=='Parcial')
						{
							$("#AgrProd").hide();
							$("#GrabarFactura").hide();
							$("#EnviarAHacienda").hide();
							
							$("#divDocumentoAfectado").show();
							$("#divRazon").show();
							$("#DIVBuscarLinea").show();
							
							$("#BotonesNota").show();
							document.getElementById('GrabarNota').textContent=(TipoDocAGenerar=='NotaCredito')?'Grabar Nota Crédito':'Grabar Nota Débito';
							
							$("#DIVAgregarProducto").hide();	
						}
						else
						{
							$("#AgrProd").hide();
							$("#GrabarFactura").hide();
							$("#EnviarAHacienda").hide();
							
							$("#divDocumentoAfectado").show();
							$("#divRazon").show();
							
							$("#BotonesNota").show();
							document.getElementById('GrabarNota').textContent=(TipoDocAGenerar=='NotaCredito')?'Grabar Nota Crédito':'Grabar Nota Débito';
							
							$("#DIVAgregarProducto").hide();	
						}
	                  
		        	}

	        	}

	        });

	         return false;
	    }
	}
	else//NO se va a hacer nota credito o debito (es factura o tiquete) pero tambien, se va a consultar una nota 
	{		
		var RutaRed= (ValidarTipoDocumento!=null && (ValidarTipoDocumento=='Tiquete' || ValidarTipoDocumento=='Factura'))?'Logica/Factura.php':'Logica/Nota.php';
	
	
		if(Estatus!="" && NoFactElect!="" && IDFactura!=null && CedulaCliente!=null && Modificar!=null)//ver la factura/Nota
    	{
    		//hacer las misma comprobaciones que abajo
    		
    		if(RutaRed.indexOf('Nota')>-1)
			{
				$("#AdvNota").show();
				$("#AdvFacTiq").hide();
			}
			else
			{
				$("#AdvNota").hide();
				$("#AdvFacTiq").show();
			}
    		
	    	 document.getElementById('IDFactura').value=IDFactura;
	         sessionStorage.clear();

	         $.ajax({
	            url: RutaRed,
	            type: 'post',
	            data: 
	            {
	              MostrarDatos:'MostrarDatos',
	              IDFactura:IDFactura,
	              CedulaCliente:CedulaCliente
	            },
	            dataType: 'json',

	        	success:function(response){
	          
	            var len = response.length;

	            if(len > 0 && ValidarTipoDocumento!=null && (ValidarTipoDocumento=='Tiquete' || ValidarTipoDocumento=='Factura')){//factura/tiquete
	                	/*Cliente*/
	                  document.getElementById('IDFactura').value = response[0]['IDFactura'];
	                  document.getElementById('Cedula').value = response[0]['FK_Cliente']; 
	                  document.getElementById('Nombre').value = response[0]['NombreCliente'];
	                  document.getElementById('Telefono').value = response[0]['Telefono'];
	                  document.getElementById('Email').value = response[0]['Email1'];
	                  document.getElementById('Direccion').value = response[0]['Direccion'];
	                  document.getElementById('Zona').value = response[0]['Zona'];
	                  
	                  /*Encabezado Factura*/
	                  document.getElementById('NoFactura').value = response[0]['NoFactura'];
	                  document.getElementById('NoOrden').value = response[0]['NoOrden'];
	                  document.getElementById('Fecha').value = response[0]['Fecha'];
	                  document.getElementById('CondicionVenta').value = response[0]['CondicionVenta'];
	                  document.getElementById('Plazo').value = response[0]['Plazo'];
	                  
	                  //MedioPago
	                  
	                  if(response[0]['MedioPago'].indexOf('01')>-1)
	                  {
					  	document.getElementById('cbEfectivo').checked=true;
					  }
					  if(response[0]['MedioPago'].indexOf('02')>-1)
	                  {
					  	document.getElementById('cbTarjeta').checked=true;
					  }
	                  if(response[0]['MedioPago'].indexOf('03')>-1)
	                  {
					  	document.getElementById('cbCheque').checked=true;
					  }
	                  if(response[0]['MedioPago'].indexOf('04')>-1)
	                  {
					  	document.getElementById('cbTransferenciaDepositoBancario').checked=true;
					  }
					  if(response[0]['MedioPago'].indexOf('05')>-1)
	                  {
					  	document.getElementById('cbRecaudado').checked=true;
					  }
	                  
	                  document.getElementById('TipoMoneda').value = response[0]['TipoMoneda']; 
	                  document.getElementById('TipoCambio').value = response[0]['TipoCambio']; 
	                  document.getElementById('Terminal').value = response[0]['Terminal']; 
	                  document.getElementById('Sucursal').value = response[0]['Sucursal']; 
	                  document.getElementById('TipoDocumento').value = response[0]['TipoDocumento'];
	                  
	                  document.getElementById('MontoSEF').value = response[0]['ServicioExento'];
	                  document.getElementById('MontoSGF').value = response[0]['ServicioGravado'];
	                  document.getElementById('ExentoF').value = response[0]['MontoExento'];
	                  document.getElementById('GravadoF').value = response[0]['MontoGravado'];
	                  document.getElementById('SubF').value = response[0]['SubtotalFactura']; 
	                  document.getElementById('DescF').value = response[0]['Descuento']; 
	                  document.getElementById('ImpuestoVentasF').value = response[0]['Impuesto']; 
	                  document.getElementById('OImpF').value = response[0]['OtroImpuesto']; 
	                  document.getElementById('TotalF').value = response[0]['TotalFactura'];
	                  
	                  /*Detalle Factura*/
	                  var DetalleFactura=response[0]['DetalleFactura'];
	                  
	                  DetalleFactura.forEach((subArr)=>{
						
					  var a = document.getElementById('dgvDetalleFactura').insertRow(1+(document.getElementById('dgvDetalleFactura').rows.length-1));
						
					  var NoFilaDetalle=a.insertCell(0);
	                  var Codigo = a.insertCell(1);
	                  var Producto = a.insertCell(2);
	                  var Cantidad = a.insertCell(3);
	                  var Precio = a.insertCell(4);
	                  var Medida = a.insertCell(5);
	                  var Impuesto = a.insertCell(6);
	                  var Descuento = a.insertCell(7);

	                  var MontoExento = a.insertCell(8);
	                  var MontoGravado = a.insertCell(9);
	                  var MontoSExento = a.insertCell(10);
	                  var MontoSGravado = a.insertCell(11);
	                  var MontoIV = a.insertCell(12);
	                  var MontoOtroI = a.insertCell(13);
	                  var MontoDescuento = a.insertCell(14);
	                  var PrecioCosto = a.insertCell(15);
	                  var Bonificacion = a.insertCell(16);  

	                  var Subtotal = a.insertCell(17);
	                  var Total = a.insertCell(18);
	                  var BotonBorrar = a.insertCell(19);
	                  var IDDetalle = a.insertCell(20);
	                  var CantADevolver = a.insertCell(21);
	                  var CantDevuelta = a.insertCell(22);   
	                  
	                  MontoExento.style.display = 'none';
	                  MontoGravado.style.display = 'none';
	                  MontoSExento.style.display = 'none';
	                  MontoSGravado.style.display = 'none';
	                  MontoIV.style.display = 'none';
	                  MontoOtroI.style.display = 'none';
	                  MontoDescuento.style.display = 'none';
	                  PrecioCosto.style.display = 'none';
	                  Bonificacion.style.display = 'none';
	                  IDDetalle.style.display = 'none'; 
	                  CantADevolver.style.display = 'none';
	                  CantDevuelta.style.display = 'none';
						
					  NoFilaDetalle.innerHTML= subArr['NoLinea'];
	                  Codigo.innerHTML = subArr['IDProducto'];
	                  Producto.innerHTML = subArr['NombreProducto'];
	                  Cantidad.innerHTML = subArr['Cantidad'];
	                  Precio.innerHTML = subArr['PrecioVSinIV'];
	                  Medida.innerHTML = subArr['UM'];
	                  Impuesto.innerHTML = subArr['Impuesto'];
	                  Descuento.innerHTML = subArr['Descuento'];
	                  PrecioCosto.innerHTML = subArr['PrecioCosto'];
	                  Bonificacion.innerHTML = subArr['Bonificacion'];

	                  MontoExento.innerHTML = subArr['MontoE'];
	                  MontoGravado.innerHTML = subArr['MontoG'];
	                  MontoSExento.innerHTML = subArr['MontoSE'];
	                  MontoSGravado.innerHTML = subArr['MontoSG'];
	                  MontoIV.innerHTML = subArr['MontoImpV'];
	                  MontoOtroI.innerHTML = subArr['MontoOImp'];
	                  MontoDescuento.innerHTML = subArr['MontoDesc'];


	                  Subtotal.innerHTML = subArr['SubtL'];
	                  Total.innerHTML = subArr['TotL'];
	                  
	                  BotonBorrar.innerHTML='';
	                  
	                  IDDetalle.innerHTML= subArr['IDDetalle']; 

	                  CantADevolver.innerHTML="";
					  CantDevuelta.innerHTML=subArr['CantidadDevuelta'];
					  });
					  
					  	$('#Cedula').prop("readonly",true);
						$('#NoOrden').prop("readonly",true);

						$('#IDProducto').prop("readonly",true); 
						$('#Cantidad').prop("readonly",true);
						$('#PrecioVenta').prop("readonly",true); 
						$('#Descuento').prop("readonly",true);

						/*disable*/$('#CondicionVenta').prop("disabled",true);
						/*disable*/$('#Plazo').prop("disabled",true);
						
						/*disable MedioPago*/
						$('#cbEfectivo').prop("disabled",true);
						$('#cbTarjeta').prop("disabled",true);
						$('#cbCheque').prop("disabled",true);
						$('#cbTransferenciaDepositoBancario').prop("disabled",true);
						$('#cbRecaudado').prop("disabled",true);
						
						/*disable*/$('#TipoMoneda').prop("disabled",true);
						/*disable*/$('#TipoDocumento').prop("disabled",true);
						
						//TipoDocumento
						  var TipoDoc = $('#TipoDocumento').val();
					      var NTipoDoc = $("#TipoDocumento :selected").text();
					      var leyenda=$("#Leyenda");

					  leyenda.text(NTipoDoc);
					  document.getElementById('EtiquetaTipoDoc').textContent='Nº '+NTipoDoc;
					  document.getElementById('exampleModalLabel').innerHTML=NTipoDoc;
						
						$("#AgrProd").hide();
						$("#GrabarFactura").hide();
						$("#EnviarAHacienda").hide();
	                  
		        	}
		        	else if(len > 0 && ValidarTipoDocumento!=null && (ValidarTipoDocumento!='Tiquete' || ValidarTipoDocumento!='Factura')){//Nota
		        	
	                	/*Cliente*/
	                  document.getElementById('IDFactura').value = response[0]['IDNota'];
	                  document.getElementById('Cedula').value = response[0]['FK_Cliente']; 
	                  document.getElementById('Nombre').value = response[0]['NombreCliente'];
	                  document.getElementById('Telefono').value = response[0]['Telefono'];
	                  document.getElementById('Email').value = response[0]['Email1'];
	                  document.getElementById('Direccion').value = response[0]['Direccion'];
	                  document.getElementById('Zona').value = response[0]['Zona'];
	                  
	                  document.getElementById('NoReferencia').value=response[0]['NoFacturaAfectada'];//20 digitos Cons+Ter+Suc
	                  document.getElementById('NoClave').value=response[0]['NoReferencia'];//clave de 50 digitos
	                  document.getElementById('Razon').value=response[0]['Razon'];
	                  
	                  /*Encabezado Factura*/
	                  document.getElementById('NoFactura').value = response[0]['NoNota'];
	                  document.getElementById('NoOrden').value = response[0]['NoOrden'];
	                  document.getElementById('Fecha').value = response[0]['Fecha'];
	                  document.getElementById('CondicionVenta').value = response[0]['CondicionVenta'];
	                  document.getElementById('Plazo').value = response[0]['Plazo'];
	                  
	                  //MedioPago
	                  
	                  if(response[0]['MedioPago'].indexOf('01')>-1)
	                  {
					  	document.getElementById('cbEfectivo').checked=true;
					  }
					  if(response[0]['MedioPago'].indexOf('02')>-1)
	                  {
					  	document.getElementById('cbTarjeta').checked=true;
					  }
	                  if(response[0]['MedioPago'].indexOf('03')>-1)
	                  {
					  	document.getElementById('cbCheque').checked=true;
					  }
	                  if(response[0]['MedioPago'].indexOf('04')>-1)
	                  {
					  	document.getElementById('cbTransferenciaDepositoBancario').checked=true;
					  }
					  if(response[0]['MedioPago'].indexOf('05')>-1)
	                  {
					  	document.getElementById('cbRecaudado').checked=true;
					  }
	                  
	                  document.getElementById('TipoMoneda').value = response[0]['TipoMoneda']; 
	                  document.getElementById('TipoCambio').value = response[0]['TipoCambio']; 
	                  document.getElementById('Terminal').value = response[0]['Terminal']; 
	                  document.getElementById('Sucursal').value = response[0]['Sucursal']; 
	                  document.getElementById('TipoDocumento').value = response[0]['TipoDocumento'];
	                  
	                  document.getElementById('MontoSEF').value = response[0]['ServicioExento'];
	                  document.getElementById('MontoSGF').value = response[0]['ServicioGravado'];
	                  document.getElementById('ExentoF').value = response[0]['MontoExento'];
	                  document.getElementById('GravadoF').value = response[0]['MontoGravado'];
	                  document.getElementById('SubF').value = response[0]['SubtotalNota']; 
	                  document.getElementById('DescF').value = response[0]['Descuento']; 
	                  document.getElementById('ImpuestoVentasF').value = response[0]['Impuesto']; 
	                  document.getElementById('OImpF').value = response[0]['OtroImpuesto']; 
	                  document.getElementById('TotalF').value = response[0]['TotalNota'];
	                  
	                  /*Detalle Factura*/
	                  var DetalleNota=response[0]['DetalleNota'];
	                  
	                  DetalleNota.forEach((subArr)=>{
						
					  var a = document.getElementById('dgvDetalleFactura').insertRow(1+(document.getElementById('dgvDetalleFactura').rows.length-1));
						
					  var NoFilaDetalle=a.insertCell(0);
	                  var Codigo = a.insertCell(1);
	                  var Producto = a.insertCell(2);
	                  var Cantidad = a.insertCell(3);
	                  var Precio = a.insertCell(4);
	                  var Medida = a.insertCell(5);
	                  var Impuesto = a.insertCell(6);
	                  var Descuento = a.insertCell(7);

	                  var MontoExento = a.insertCell(8);
	                  var MontoGravado = a.insertCell(9);
	                  var MontoSExento = a.insertCell(10);
	                  var MontoSGravado = a.insertCell(11);
	                  var MontoIV = a.insertCell(12);
	                  var MontoOtroI = a.insertCell(13);
	                  var MontoDescuento = a.insertCell(14);
	                  var PrecioCosto = a.insertCell(15);
	                  var Bonificacion = a.insertCell(16);  

	                  var Subtotal = a.insertCell(17);
	                  var Total = a.insertCell(18);
	                  var BotonBorrar = a.insertCell(19);
	                  var IDDetalle = a.insertCell(20);
	                  var CantADevolver = a.insertCell(21);
	                  var CantDevuelta = a.insertCell(22);   
	                  
	                  MontoExento.style.display = 'none';
	                  MontoGravado.style.display = 'none';
	                  MontoSExento.style.display = 'none';
	                  MontoSGravado.style.display = 'none';
	                  MontoIV.style.display = 'none';
	                  MontoOtroI.style.display = 'none';
	                  MontoDescuento.style.display = 'none';
	                  PrecioCosto.style.display = 'none';
	                  Bonificacion.style.display = 'none';
	                  IDDetalle.style.display = 'none'; 
	                  CantADevolver.style.display = 'none';
	                  CantDevuelta.style.display = 'none'; 
						
					  NoFilaDetalle.innerHTML= subArr['NoLinea'];
	                  Codigo.innerHTML = subArr['IDProducto'];
	                  Producto.innerHTML = subArr['NombreProducto'];
	                  Cantidad.innerHTML = subArr['Cantidad'];
	                  Precio.innerHTML = subArr['PrecioVSinIV'];
	                  Medida.innerHTML = subArr['UM'];
	                  Impuesto.innerHTML = subArr['Impuesto'];
	                  Descuento.innerHTML = subArr['Descuento'];
	                  PrecioCosto.innerHTML = subArr['PrecioCosto'];
	                  Bonificacion.innerHTML = subArr['Bonificacion'];

	                  MontoExento.innerHTML = subArr['MontoE'];
	                  MontoGravado.innerHTML = subArr['MontoG'];
	                  MontoSExento.innerHTML = subArr['MontoSE'];
	                  MontoSGravado.innerHTML = subArr['MontoSG'];
	                  MontoIV.innerHTML = subArr['MontoImpV'];
	                  MontoOtroI.innerHTML = subArr['MontoOImp'];
	                  MontoDescuento.innerHTML = subArr['MontoDesc'];


	                  Subtotal.innerHTML = subArr['SubtL'];
	                  Total.innerHTML = subArr['TotL'];
	                  
	                  BotonBorrar.innerHTML='';
	                  
	                  IDDetalle.innerHTML= subArr['IDDetalle']; 

	                  CantADevolver.innerHTML="";
					  CantDevuelta.innerHTML="";
					  });
					  
					  	$('#Cedula').prop("readonly",true);
						$('#NoOrden').prop("readonly",true);

						$('#IDProducto').prop("readonly",true); 
						$('#Cantidad').prop("readonly",true);
						$('#PrecioVenta').prop("readonly",true); 
						$('#Descuento').prop("readonly",true);

						/*disable*/$('#CondicionVenta').prop("disabled",true);
						/*disable*/$('#Plazo').prop("disabled",true);
						
						/*disable MedioPago*/
						$('#cbEfectivo').prop("disabled",true);
						$('#cbTarjeta').prop("disabled",true);
						$('#cbCheque').prop("disabled",true);
						$('#cbTransferenciaDepositoBancario').prop("disabled",true);
						$('#cbRecaudado').prop("disabled",true);
						
						/*disable*/$('#TipoMoneda').prop("disabled",true);
						/*disable*/$('#TipoDocumento').prop("disabled",true);
						/*disable*/$('#Razon').prop("disabled",true);
						
						
						//TipoDocumento
						  var TipoDoc = $('#TipoDocumento').val();
					      var NTipoDoc = $("#TipoDocumento :selected").text();
					      var leyenda=$("#Leyenda");

					  leyenda.text(NTipoDoc);
					  document.getElementById('EtiquetaTipoDoc').textContent='Nº '+NTipoDoc;
					  document.getElementById('exampleModalLabel').innerHTML=NTipoDoc;
						
						$("#AgrProd").hide();
						$("#GrabarFactura").hide();
						$("#EnviarAHacienda").hide();
						
						$("#divDocumentoAfectado").show();
						$("#divRazon").show();
	                  
		        	}

	        	}

	        });

	         return false;
	    }
	    else if(Estatus=="" && NoFactElect=="" && IDFactura!=null && CedulaCliente!=null && Modificar!=null)//modificar factura o tiquete o nota
	    {
	    	//verificar el tipo de documento para ver a donde se va a enviar: Formulario Nota o Formulario Factura
	    	
	    	if(RutaRed.indexOf('Nota')>-1)
			{
				$("#AdvNota").show();
				$("#AdvFacTiq").hide();
			}
			else
			{
				$("#AdvNota").hide();
				$("#AdvFacTiq").show();
			}
	    	
	    	 document.getElementById('IDFactura').value=IDFactura;
	         sessionStorage.clear();

	         $.ajax({
	            url: RutaRed,
	            type: 'post',
	            data: 
	            {
	              MostrarDatos:'MostrarDatos',
	              IDFactura:IDFactura,
	              CedulaCliente:CedulaCliente
	            },
	            dataType: 'json',

	        	success:function(response){
	          
	            var len = response.length;

	            if(len > 0 && ValidarTipoDocumento!=null && (ValidarTipoDocumento=='Tiquete' || ValidarTipoDocumento=='Factura')){//factura tiquete
	                	/*Cliente*/
	                  document.getElementById('IDFactura').value = response[0]['IDFactura'];
	                  document.getElementById('Cedula').value = response[0]['FK_Cliente']; 
	                  document.getElementById('Nombre').value = response[0]['NombreCliente'];
	                  document.getElementById('Telefono').value = response[0]['Telefono'];
	                  document.getElementById('Email').value = response[0]['Email1'];
	                  document.getElementById('Direccion').value = response[0]['Direccion'];
	                  document.getElementById('Zona').value = response[0]['Zona'];
	                  
	                  /*Encabezado Factura*/
	                  document.getElementById('NoFactura').value = response[0]['NoFactura'];
	                  document.getElementById('NoOrden').value = response[0]['NoOrden'];
	                  document.getElementById('Fecha').value = response[0]['Fecha'];
	                  document.getElementById('CondicionVenta').value = response[0]['CondicionVenta'];
	                  document.getElementById('Plazo').value = response[0]['Plazo'];

					  //MedioPago
	                  
	                  if(response[0]['MedioPago'].indexOf('01')>-1)
	                  {
					  	document.getElementById('cbEfectivo').checked=true;
					  }
					  if(response[0]['MedioPago'].indexOf('02')>-1)
	                  {
					  	document.getElementById('cbTarjeta').checked=true;
					  }
	                  if(response[0]['MedioPago'].indexOf('03')>-1)
	                  {
					  	document.getElementById('cbCheque').checked=true;
					  }
	                  if(response[0]['MedioPago'].indexOf('04')>-1)
	                  {
					  	document.getElementById('cbTransferenciaDepositoBancario').checked=true;
					  }
					  if(response[0]['MedioPago'].indexOf('05')>-1)
	                  {
					  	document.getElementById('cbRecaudado').checked=true;
					  }

	                  document.getElementById('TipoMoneda').value = response[0]['TipoMoneda']; 
	                  document.getElementById('TipoCambio').value = response[0]['TipoCambio']; 
	                  document.getElementById('Terminal').value = response[0]['Terminal']; 
	                  document.getElementById('Sucursal').value = response[0]['Sucursal']; 
	                  document.getElementById('TipoDocumento').value = response[0]['TipoDocumento'];
	                  
	                  //verificar el tipo de documento si es nota traer clave, nodocafectado y razon
	                  
	                  document.getElementById('MontoSEF').value = response[0]['ServicioExento'];
	                  document.getElementById('MontoSGF').value = response[0]['ServicioGravado'];
	                  document.getElementById('ExentoF').value = response[0]['MontoExento'];
	                  document.getElementById('GravadoF').value = response[0]['MontoGravado'];
	                  document.getElementById('SubF').value = response[0]['SubtotalFactura']; 
	                  document.getElementById('DescF').value = response[0]['Descuento']; 
	                  document.getElementById('ImpuestoVentasF').value = response[0]['Impuesto']; 
	                  document.getElementById('OImpF').value = response[0]['OtroImpuesto']; 
	                  document.getElementById('TotalF').value = response[0]['TotalFactura'];
	                  
	                  /*Detalle Factura*/
	                  var DetalleFactura=response[0]['DetalleFactura'];
	                  
	                  DetalleFactura.forEach((subArr)=>{
						
					  var a = document.getElementById('dgvDetalleFactura').insertRow(1+(document.getElementById('dgvDetalleFactura').rows.length-1));
						
					  var NoFilaDetalle=a.insertCell(0);
	                  var Codigo = a.insertCell(1);
	                  var Producto = a.insertCell(2);
	                  var Cantidad = a.insertCell(3);
	                  var Precio = a.insertCell(4);
	                  var Medida = a.insertCell(5);
	                  var Impuesto = a.insertCell(6);
	                  var Descuento = a.insertCell(7);

	                  var MontoExento = a.insertCell(8);
	                  var MontoGravado = a.insertCell(9);
	                  var MontoSExento = a.insertCell(10);
	                  var MontoSGravado = a.insertCell(11);
	                  var MontoIV = a.insertCell(12);
	                  var MontoOtroI = a.insertCell(13);
	                  var MontoDescuento = a.insertCell(14);
	                  var PrecioCosto = a.insertCell(15);
	                  var Bonificacion = a.insertCell(16);

	                  var Subtotal = a.insertCell(17);
	                  var Total = a.insertCell(18);
	                  var BotonBorrar = a.insertCell(19);
	                  var IDDetalle = a.insertCell(20);
	                  var CantADevolver = a.insertCell(21);
	                  var CantDevuelta = a.insertCell(22);   
	                  
	                  MontoExento.style.display = 'none';
	                  MontoGravado.style.display = 'none';
	                  MontoSExento.style.display = 'none';
	                  MontoSGravado.style.display = 'none';
	                  MontoIV.style.display = 'none';
	                  MontoOtroI.style.display = 'none';
	                  MontoDescuento.style.display = 'none';
	                  PrecioCosto.style.display = 'none';
	                  Bonificacion.style.display = 'none';
	                  IDDetalle.style.display = 'none'; 
	                  CantADevolver.style.display = 'none';
	                  CantDevuelta.style.display = 'none'; 
						
					  NoFilaDetalle.innerHTML= subArr['NoLinea'];
	                  Codigo.innerHTML = subArr['IDProducto'];
	                  Producto.innerHTML = subArr['NombreProducto'];
	                  Cantidad.innerHTML = subArr['Cantidad'];
	                  Precio.innerHTML = subArr['PrecioVSinIV'];
	                  Medida.innerHTML = subArr['UM'];
	                  Impuesto.innerHTML = subArr['Impuesto'];
	                  Descuento.innerHTML = subArr['Descuento'];
	                  PrecioCosto.innerHTML = subArr['PrecioCosto'];
	                  Bonificacion.innerHTML = subArr['Bonificacion'];

	                  MontoExento.innerHTML = subArr['MontoE'];
	                  MontoGravado.innerHTML = subArr['MontoG'];
	                  MontoSExento.innerHTML = subArr['MontoSE'];
	                  MontoSGravado.innerHTML = subArr['MontoSG'];
	                  MontoIV.innerHTML = subArr['MontoImpV'];
	                  MontoOtroI.innerHTML = subArr['MontoOImp'];
	                  MontoDescuento.innerHTML = subArr['MontoDesc'];


	                  Subtotal.innerHTML = subArr['SubtL'];
	                  Total.innerHTML = subArr['TotL'];
	                  
	                  BotonBorrar.innerHTML='<button class="btn btn-primary btn-xs my-xs-btn" type="button" onClick="borrarFila(this)" >'
	+ '<span class="glyphicon glyphicon-remove"></span>Borrar</button>';
	                  
	                  IDDetalle.innerHTML= subArr['IDDetalle']; 

	                  CantADevolver.innerHTML="";
	                  CantDevuelta.innerHTML=subArr['CantidadDevuelta'];
					
					  });
					  
					  
					$('#Cedula').prop("readonly",true);
					$('#NoOrden').prop("readonly",false);

					$('#IDProducto').prop("readonly",false); 
					$('#Cantidad').prop("readonly",false);
					$('#PrecioVenta').prop("readonly",false); 
					$('#Descuento').prop("readonly",false);

					$('#CondicionVenta').prop("disabled",false);
					$('#Plazo').prop("disabled",false);
					
					//MedioPago
					$('#cbEfectivo').prop("disabled",false);
					$('#cbTarjeta').prop("disabled",false);
					$('#cbCheque').prop("disabled",false);
					$('#cbTransferenciaDepositoBancario').prop("disabled",false);
					$('#cbRecaudado').prop("disabled",false);
					
					$('#TipoMoneda').prop("disabled",false);
					$('#TipoDocumento').prop("disabled",false);
	                  
		        	}
		        	else if(len > 0 && ValidarTipoDocumento!=null && (ValidarTipoDocumento!='Tiquete' || ValidarTipoDocumento!='Factura')){//nota
	         /*Cliente*/
	                  document.getElementById('IDFactura').value = response[0]['IDNota'];
	                  document.getElementById('Cedula').value = response[0]['FK_Cliente']; 
	                  document.getElementById('Nombre').value = response[0]['NombreCliente'];
	                  document.getElementById('Telefono').value = response[0]['Telefono'];
	                  document.getElementById('Email').value = response[0]['Email1'];
	                  document.getElementById('Direccion').value = response[0]['Direccion'];
	                  document.getElementById('Zona').value = response[0]['Zona'];
	                  
	                  document.getElementById('NoReferencia').value=response[0]['NoFacturaAfectada'];//20 digitos Cons+Ter+Suc
	                  document.getElementById('NoClave').value=response[0]['NoReferencia'];//clave de 50 digitos
	                  document.getElementById('Razon').value=response[0]['Razon'];
	                  
	                  /*Encabezado Factura*/
	                  document.getElementById('NoFactura').value = response[0]['NoNota'];
	                  document.getElementById('NoOrden').value = response[0]['NoOrden'];
	                  document.getElementById('Fecha').value = response[0]['Fecha'];
	                  document.getElementById('CondicionVenta').value = response[0]['CondicionVenta'];
	                  document.getElementById('Plazo').value = response[0]['Plazo'];

					  //MedioPago
	                  
	                  if(response[0]['MedioPago'].indexOf('01')>-1)
	                  {
					  	document.getElementById('cbEfectivo').checked=true;
					  }
					  if(response[0]['MedioPago'].indexOf('02')>-1)
	                  {
					  	document.getElementById('cbTarjeta').checked=true;
					  }
	                  if(response[0]['MedioPago'].indexOf('03')>-1)
	                  {
					  	document.getElementById('cbCheque').checked=true;
					  }
	                  if(response[0]['MedioPago'].indexOf('04')>-1)
	                  {
					  	document.getElementById('cbTransferenciaDepositoBancario').checked=true;
					  }
					  if(response[0]['MedioPago'].indexOf('05')>-1)
	                  {
					  	document.getElementById('cbRecaudado').checked=true;
					  }

	                  document.getElementById('TipoMoneda').value = response[0]['TipoMoneda']; 
	                  document.getElementById('TipoCambio').value = response[0]['TipoCambio']; 
	                  document.getElementById('Terminal').value = response[0]['Terminal']; 
	                  document.getElementById('Sucursal').value = response[0]['Sucursal']; 
	                  document.getElementById('TipoDocumento').value = response[0]['TipoDocumento'];
	                  
	                  document.getElementById('MontoSEF').value = response[0]['ServicioExento'];
	                  document.getElementById('MontoSGF').value = response[0]['ServicioGravado'];
	                  document.getElementById('ExentoF').value = response[0]['MontoExento'];
	                  document.getElementById('GravadoF').value = response[0]['MontoGravado'];
	                  document.getElementById('SubF').value = response[0]['SubtotalNota']; 
	                  document.getElementById('DescF').value = response[0]['Descuento']; 
	                  document.getElementById('ImpuestoVentasF').value = response[0]['Impuesto']; 
	                  document.getElementById('OImpF').value = response[0]['OtroImpuesto']; 
	                  document.getElementById('TotalF').value = response[0]['TotalNota'];
	                  
	                  /*Detalle Factura*/
	                  var DetalleNota=response[0]['DetalleNota'];
	                  
	                  DetalleNota.forEach((subArr)=>{
						
					  var a = document.getElementById('dgvDetalleFactura').insertRow(1+(document.getElementById('dgvDetalleFactura').rows.length-1));
						
					  var NoFilaDetalle=a.insertCell(0);
	                  var Codigo = a.insertCell(1);
	                  var Producto = a.insertCell(2);
	                  var Cantidad = a.insertCell(3);
	                  var Precio = a.insertCell(4);
	                  var Medida = a.insertCell(5);
	                  var Impuesto = a.insertCell(6);
	                  var Descuento = a.insertCell(7);

	                  var MontoExento = a.insertCell(8);
	                  var MontoGravado = a.insertCell(9);
	                  var MontoSExento = a.insertCell(10);
	                  var MontoSGravado = a.insertCell(11);
	                  var MontoIV = a.insertCell(12);
	                  var MontoOtroI = a.insertCell(13);
	                  var MontoDescuento = a.insertCell(14);
	                  var PrecioCosto = a.insertCell(15);
	                  var Bonificacion = a.insertCell(16);  

	                  var Subtotal = a.insertCell(17);
	                  var Total = a.insertCell(18);
	                  var BotonBorrar = a.insertCell(19);
	                  var IDDetalle = a.insertCell(20);
	                  var CantADevolver = a.insertCell(21);
	                  var CantDevuelta = a.insertCell(22);   
	                  
	                  MontoExento.style.display = 'none';
	                  MontoGravado.style.display = 'none';
	                  MontoSExento.style.display = 'none';
	                  MontoSGravado.style.display = 'none';
	                  MontoIV.style.display = 'none';
	                  MontoOtroI.style.display = 'none';
	                  MontoDescuento.style.display = 'none';
	                  PrecioCosto.style.display = 'none';
	                  Bonificacion.style.display = 'none';
	                  IDDetalle.style.display = 'none'; 
	                  CantADevolver.style.display = 'none';
	                  CantDevuelta.style.display = 'none'; 
						
					  NoFilaDetalle.innerHTML= subArr['NoLinea'];
	                  Codigo.innerHTML = subArr['IDProducto'];
	                  Producto.innerHTML = subArr['NombreProducto'];
	                  Cantidad.innerHTML = subArr['Cantidad'];
	                  Precio.innerHTML = subArr['PrecioVSinIV'];
	                  Medida.innerHTML = subArr['UM'];
	                  Impuesto.innerHTML = subArr['Impuesto'];
	                  Descuento.innerHTML = subArr['Descuento'];
	                  PrecioCosto.innerHTML = subArr['PrecioCosto'];
	                  Bonificacion.innerHTML = subArr['Bonificacion'];

	                  MontoExento.innerHTML = subArr['MontoE'];
	                  MontoGravado.innerHTML = subArr['MontoG'];
	                  MontoSExento.innerHTML = subArr['MontoSE'];
	                  MontoSGravado.innerHTML = subArr['MontoSG'];
	                  MontoIV.innerHTML = subArr['MontoImpV'];
	                  MontoOtroI.innerHTML = subArr['MontoOImp'];
	                  MontoDescuento.innerHTML = subArr['MontoDesc'];


	                  Subtotal.innerHTML = subArr['SubtL'];
	                  Total.innerHTML = subArr['TotL'];
	                  
	                 BotonBorrar.innerHTML='';
	                  
	                  IDDetalle.innerHTML= subArr['IDDetalle']; 

	                  CantADevolver.innerHTML="";
					  CantDevuelta.innerHTML="";
					  });
					  
					  	$('#Cedula').prop("readonly",true);
						$('#NoOrden').prop("readonly",true);

						$('#IDProducto').prop("readonly",true); 
						$('#Cantidad').prop("readonly",true);
						$('#PrecioVenta').prop("readonly",true); 
						$('#Descuento').prop("readonly",true);

						/*disable*/$('#CondicionVenta').prop("disabled",true);
						/*disable*/$('#Plazo').prop("disabled",true);
						
						/*disable MedioPago*/
						$('#cbEfectivo').prop("disabled",true);
						$('#cbTarjeta').prop("disabled",true);
						$('#cbCheque').prop("disabled",true);
						$('#cbTransferenciaDepositoBancario').prop("disabled",true);
						$('#cbRecaudado').prop("disabled",true);
						
						/*disable*/$('#TipoMoneda').prop("disabled",true);
						/*disable*/$('#TipoDocumento').prop("disabled",true);
						/*disable*/$('#Razon').prop("disabled",true);
						
						
						//TipoDocumento
						  var TipoDoc = $('#TipoDocumento').val();
					      var NTipoDoc = $("#TipoDocumento :selected").text();
					      var leyenda=$("#Leyenda");

					  leyenda.text(NTipoDoc);
					  document.getElementById('EtiquetaTipoDoc').textContent='Nº '+NTipoDoc;
					  document.getElementById('exampleModalLabel').innerHTML=NTipoDoc;
						
						$("#AgrProd").hide();
						$("#GrabarFactura").hide();
						$("#EnviarAHacienda").hide();
						
						$("#divDocumentoAfectado").show();
						$("#divRazon").show();         
		        	}
					
					/*cbmCondicionVenta*/
					
					var CondVenta = $('#CondicionVenta').val();

			      	if(CondVenta=="01")
					{
						$('#Plazo').val('0');
						
						var op = document.getElementById("Plazo").getElementsByTagName("option");
						for (var i = 0; i < op.length; i++) {
						 
						  if (op[i].value != "0") {
							op[i].disabled = true;
						  }
						  else
						  {
						  	op[i].disabled = false;	
						  }
						}
					}
					else
					{
					$('#Plazo').val('');
					
						var op = document.getElementById("Plazo").getElementsByTagName("option");
						for (var i = 0; i < op.length; i++) {
		
						  if (op[i].value != "0") {
							op[i].disabled = false;
						  }
						  else
						  {
						  	op[i].disabled = true;	
						  }
						}
					}
					
					//cmbTipoMoneda
					
					var TipoMon = $('#TipoMoneda').val();

			      	if(TipoMon=='C'){
			 			document.getElementById('TipoCambio').value="1.00";
			 			$("#TipoCambio").prop("readonly", true); 
			        }
			        else if(TipoMon=='D'){
			        	document.getElementById('TipoCambio').value="";
			 			$("#TipoCambio").prop("readonly", false); 	
			        }
			        else if(TipoMon=='E'){
			        	document.getElementById('TipoCambio').value="";
			 			$("#TipoCambio").prop("readonly", false); 
			        }
			        else
			        {
			        	document.getElementById('TipoCambio').value="";
			 			$("#TipoCambio").prop("readonly", true);
			        }
					
					
					//TipoDocumento
					  var TipoDoc = $('#TipoDocumento').val();
				      var NTipoDoc = $("#TipoDocumento :selected").text();
				      var leyenda=$("#Leyenda");

				      	if(TipoDoc=='Factura'){

				 			$("#Cedula").prop("readonly", false);
				        }
				        else if(TipoDoc=='Tiquete'){
				 			
				 			document.getElementById('Cedula').value="000000000";
				 			document.getElementById('Nombre').value="CONTADO";/*cuando es tiquete se usa un cliente generico*/
				 			document.getElementById('Email').value="";
				 			document.getElementById('Telefono').value="";
				 			document.getElementById('Direccion').value="";
				 			document.getElementById('Zona').value="";
				 			
				 			$("#Cedula").prop("readonly", true);
				 			
				 			document.getElementById('lblClienteExonerado').innerHTML="";
				 			document.getElementById('Exonerado').value=0;

				        }
				        else if(TipoDoc=='NotaDebito'){
				        		/*Mostrar campo tipo documento afectado (No Referencia y razon del porque) (hay que hacerlo)*/
				        }
				        else if(TipoDoc=='NotaCredito'){
				        		/*Mostrar campo tipo documento afectado (hay que hacerlo)*/
				        }

					  leyenda.text(NTipoDoc);
					  document.getElementById('EtiquetaTipoDoc').textContent='Nº '+NTipoDoc;
					  document.getElementById("GrabarFactura").textContent='Modificar '+NTipoDoc;
					  document.getElementById('exampleModalLabel').innerHTML=NTipoDoc;

					  $.ajax({
			            url: 'Logica/Factura.php',
			            type: 'post',
			            data: 
			            {
			            	CargarNoDocumento:'CargarNoDocumento',
			            	TipoDocumento:TipoDoc
			            },
			            dataType: 'json',
			            success:function(response){
			                
			                var len = response.length;

			                if(len > 0){
			                	document.getElementById('NoFactura').value = response[0]['NoConsecutivo'];	
						 	}
			                
			            }
			        });

			        return false;
			        
			        //verificar el tipo de documento si es nota mostrar campos de clave, nodocafectado y razon y ocultar linea de producto y poner linea
					
					$("#AgrProd").show();
					$("#GrabarFactura").show(); 
					$("#EnviarAHacienda").hide();
	        	}

	        });

	         return false;
	    }
	    else //para hacer una nuevo factura o tiquete
	    {
	    	$("#AdvFacTiq").show();
	    	$.ajax({
	              url: 'Logica/Factura.php',
	              type: 'post',
	              data: 
	              {
	                CargarNoDocumento:'CargarNoDocumento',
	                TipoDocumento:'Factura'
	              },
	              dataType: 'json',

	              success:function(response){
	                  
	                  var len = response.length;

	                  if(len > 0)
	                  {
	                    document.getElementById('NoFactura').value = response[0]['NoConsecutivo'];  
	                  }
	                  
	                $('#Cedula').prop("readonly",false);
					$('#NoOrden').prop("readonly",false);

					$('#IDProducto').prop("readonly",false); 
					$('#Cantidad').prop("readonly",false);
					$('#PrecioVenta').prop("readonly",false); 
					$('#Descuento').prop("readonly",false);

					$('#CondicionVenta').prop("disabled",false);
					$('#Plazo').prop("disabled",false);
					
					//MedioPago
					$('#cbEfectivo').prop("disabled",false);
					$('#cbTarjeta').prop("disabled",false);
					$('#cbCheque').prop("disabled",false);
					$('#cbTransferenciaDepositoBancario').prop("disabled",false);
					$('#cbRecaudado').prop("disabled",false);
					
					$('#TipoMoneda').prop("disabled",false);
					$('#TipoDocumento').prop("disabled",false);
					
					$("#AgrProd").show();
					$("#GrabarFactura").show();
					document.getElementById("GrabarFactura").textContent='Grabar Factura';
					$("#EnviarAHacienda").hide();
	              }
	         });
	    }	
	    
	    $("#divDocumentoAfectado").hide();
		$("#divRazon").hide();
		$("#DIVBuscarLinea").hide();
	    $("#DIVAgregarProducto").show();
	}

}
	</script>

<script type="text/javascript">
				/*Cargar consecutivo de documento seleccionado en el combobox*/
$(document).ready(function(){

	$('#TipoDocumento').on('change', function () {
      
      var TipoDoc = $(this).val();
      var NTipoDoc = $("#TipoDocumento :selected").text();
      var leyenda=$("#Leyenda");

      	if(TipoDoc=='Factura'){
      		
      		if(document.getElementById('Email').value==""&&
 			document.getElementById('Telefono').value==""&&
 			document.getElementById('Direccion').value==""&&
 			document.getElementById('Zona').value=="")
 			{
	      		document.getElementById('Cedula').value="";
	 			document.getElementById('Nombre').value="";
	 			document.getElementById('Email').value="";
	 			document.getElementById('Telefono').value="";
	 			document.getElementById('Direccion').value="";
	 			document.getElementById('Zona').value="";	
			}

 			$("#Cedula").prop("readonly", false);
        }
        else if(TipoDoc=='Tiquete'){
 			
 			document.getElementById('Cedula').value="000000000";
 			document.getElementById('Nombre').value="CONTADO";/*cuando es tiquete se usa un cliente generico*/
 			document.getElementById('Email').value="";
 			document.getElementById('Telefono').value="";
 			document.getElementById('Direccion').value="";
 			document.getElementById('Zona').value="";
 			
 			$("#Cedula").prop("readonly", true);
 			
 			document.getElementById('lblClienteExonerado').innerHTML="";
 			document.getElementById('Exonerado').value=0;

        }
        else if(TipoDoc=='NotaDebito'){
        		/*Mostrar campo tipo documento afectado (No Referencia y razon del porque) (hay que hacerlo)*/
        }
        else if(TipoDoc=='NotaCredito'){
        		/*Mostrar campo tipo documento afectado (hay que hacerlo)*/
        }

	  leyenda.text(NTipoDoc);
	  document.getElementById('EtiquetaTipoDoc').textContent='Nº '+NTipoDoc;
	  document.getElementById('exampleModalLabel').innerHTML=NTipoDoc;
	  
	  if (document.getElementById('GrabarFactura').textContent.indexOf('Modificar') > -1)
	  {
	  	document.getElementById('GrabarFactura').textContent='Modificar '+NTipoDoc;
	  }
	  else
	  {
	  	document.getElementById('GrabarFactura').textContent='Grabar '+NTipoDoc;	
	  }

	  $.ajax({
	            url: 'Logica/Factura.php',
	            type: 'post',
	            data: 
	            {
	            	CargarNoDocumento:'CargarNoDocumento',
	            	TipoDocumento:TipoDoc
	            },
	            dataType: 'json',
	            success:function(response){
	                
	                var len = response.length;

	                if(len > 0){
	                	document.getElementById('NoFactura').value = response[0]['NoConsecutivo'];	
				 	}
	                
	            }
	        });

	        return false;
        
  });
});

</script>

<script type="text/javascript">
				/*ver tipo moneda y habilitar o desabilitar el campo de Tipo Cambio*/
$(document).ready(function(){

	$('#TipoMoneda').on('change', function () {
      
      var TipoMon = $(this).val();

      	if(TipoMon=='C'){
 			document.getElementById('TipoCambio').value="1.00";
 			$("#TipoCambio").prop("readonly", true); 
        }
        else if(TipoMon=='D'){
        	document.getElementById('TipoCambio').value="";
 			$("#TipoCambio").prop("readonly", false); 	
        }
        else if(TipoMon=='E'){
        	document.getElementById('TipoCambio').value="";
 			$("#TipoCambio").prop("readonly", false); 
        }
        else
        {
        	document.getElementById('TipoCambio').value="";
 			$("#TipoCambio").prop("readonly", true);
        }
  });
});

</script>

<script type="text/javascript">
				/*Condicion de venta: si es contado es plazo 0 sino que permita seleccionar el plazo*/
$(document).ready(function(){

	$('#CondicionVenta').on('change', function () {
      
      var CondVenta = $(this).val();

      	if(CondVenta=="01")
		{
			$('#Plazo').val('0');
			
			var op = document.getElementById("Plazo").getElementsByTagName("option");
			for (var i = 0; i < op.length; i++) {
			 
			  if (op[i].value != "0") {
				op[i].disabled = true;
			  }
			  else
			  {
			  	op[i].disabled = false;	
			  }
			}
		}
		else
		{
		$('#Plazo').val('');
		
			var op = document.getElementById("Plazo").getElementsByTagName("option");
			for (var i = 0; i < op.length; i++) {
		  // lowercase comparison for case-insensitivity
			  if (op[i].value != "0") {
				op[i].disabled = false;
			  }
			  else
			  {
			  	op[i].disabled = true;	
			  }
			}
		}
  });
});

</script>

<script type="text/javascript">
  
  $(document).ready(function(){

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

    //Moneda con dos decimales)

    setInputFilter(document.getElementById("PrecioVenta"), function(value) {
  return /^-?\d*[.]?\d{0,2}$/.test(value); });

    setInputFilter(document.getElementById("TipoCambio"), function(value) {
  return /^-?\d*[.]?\d{0,2}$/.test(value); });

  setInputFilter(document.getElementById("Descuento"), function(value) {
  return /^-?\d*[.]?\d{0,2}$/.test(value); });

    setInputFilter(document.getElementById("Cantidad"), function(value) {
  return /^-?\d*[.]?\d{0,2}$/.test(value); });

    setInputFilter(document.getElementById("NoOrden"), function(value) {
      return /^\d*$/.test(value); });

    //Integer (positive only)
    setInputFilter(document.getElementById("Cedula"), function(value) {
    return /^\d*$/.test(value); }); 

    setInputFilter(document.getElementById("Li"), function(value) {
    return /^\d*$/.test(value); }); 

    setInputFilter(document.getElementById("CantDev"), function(value) {
  return /^-?\d*[.]?\d{0,2}$/.test(value); });
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

  <script>
	
$('#ModalMSJ').on('hide.bs.modal', function (e) {
		
	var GuarMod = sessionStorage.getItem("GuarMod");
	
	sessionStorage.clear();	
		
	if(GuarMod =='Guardo')
	{
		window.open('FormularioFactura.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('FormularioVerFacturas.php', '_self');	
	}
});

	
</script>



<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->


<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

<!--<script type="text/javascript">
    $(document).ready(function(){
        $('#upload').change(function(){
            alert("A file has been selected.");
        });
    });
</script>-->

</body>

</html>