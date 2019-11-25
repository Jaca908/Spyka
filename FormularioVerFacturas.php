<?php	session_start();?>
<!DOCTYPE html>   
<html lang="es">   
<head> 

<?php

if (!isset($_SESSION['UsuarioLogIn'])) 
{
	        header("location: index.html#parent");
			exit;
}

include 'Conexion/Conexion.php';

?>

<meta charset="utf-8">  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<title>Ver Documentos</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<meta name="description" content="Bootstrap.">  

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>  

<style type="text/css">
  
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


<body style="margin:0px auto">  
<div class="brand">
      <img src="images\SPYKA_Logo.png" width="100" height="30" style="float: left; margin-top: 20px;">
    </div>
<section class="navigation" style="font-family: verdana; font-size: 1 em;">
  <?php include('Menu.php')?>
</section>

<article>
  <h2><?php echo $_SESSION['NombreRepresentante']?></h2>
</article>

<div class="container">
<div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Documentos</b></h2></div>
                    <div class="col-sm-4">
                    </div>
                </div>
            </div>
<table id="dtBasicExample"  class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
		<tr>
			<th>Estatus</th>
			<th>Tipo Documento<i class="fa fa-sort"></i></th>
			<th>Nº Electrónico<i class="fa fa-sort"></i></th>
			<th>Usuario</th>
			<th>No. Orden<i class="fa fa-sort"></i></th>
			<th style="width: 100px;">Fecha<i class="fa fa-sort"></i></th>
			<th>Cliente<i class="fa fa-sort"></i></th>
			<th style="width: 200px;">Nombre del Cliente</th>
			<th>Monto<i></i></th>
			<th>Saldo<i></i></th>
			<th style="width: 200px;">Acciones</th>
			<th style="display: none">TipoDevolucion</th>
		</tr>
	</thead>
	<tbody>
		<?php
                $Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                if ($Conexion->connect_error) 
                {
                    die("Connection failed: " . $Conexion->connect_error);
                } 
                
                $sql = "SELECT 
						        Status,
						        
						        CASE TipoDocumento 
										WHEN '01'      THEN 'Factura'
									   	WHEN '02'      THEN 'Nota Debito'
									  	WHEN '03'      THEN 'Nota Credito'
									   	WHEN '04'      THEN 'Tiquete'
									       END AS TipoDocumento,
						        NoFactura AS 'No Documento',
						        FK_Usuario,
						        IDFactura, 
						        Fecha,
						        FK_Cliente,
						        NombreCliente,
						        TotalFactura AS Total,
						        Saldo,
						        TipoDevolucion
						        FROM Factura WHERE FK_Usuario=".$_SESSION['IDUsuario']."
						        
						UNION ALL

						SELECT 
						        Status,
						        
						        CASE TipoDocumento 
										WHEN '01'      THEN 'Factura'
									   	WHEN '02'      THEN 'Nota Debito'
									  	WHEN '03'      THEN 'Nota Credito'
									   	WHEN '04'      THEN 'Tiquete'
									       END AS TipoDocumento,
						        NoNota AS 'No Documento',
						        FK_Usuario,
						        IDNota, 
						        Fecha,
						        FK_Cliente,
						        NombreCliente,
						        TotalNota As Total,
						        '',
						        TipoDevolucion
						        FROM NotaCreditoDebito WHERE FK_Usuario=".$_SESSION['IDUsuario']."
						        
						        ORDER BY Fecha DESC";                     
                $result = $Conexion->query($sql);
        ?>
                <?php while($ri =  mysqli_fetch_array($result))
                      {
                      	$Fecha=DateTime::createFromFormat('Y-m-d H:i:s', $ri['Fecha'])->format('d-m-Y');//dar formato
                      	
                      echo "<tr>";
                        echo "<td>".$ri['Status']."</td>";
                        echo "<td>".$ri['TipoDocumento']."</td>";
                        echo "<td>".$ri['No Documento']."</td>";
                        echo "<td>".$ri['FK_Usuario']."</td>";
                        echo "<td>".$ri['IDFactura']."</td>";
                        echo "<td>".$Fecha."</td>";
                        echo "<td>".$ri['FK_Cliente']."</td>";
                        echo "<td>".$ri['NombreCliente']."</td>";
                        echo "<td>".number_format($ri['Total'],2)."</td>";
                        
                        if($ri['Saldo']!='')
                        {
							echo "<td>".number_format($ri['Saldo'],2)."</td>";	
						}
						else
						{
							echo "<td></td>";
						}
                        
                       echo "<td>";
                       echo '<button Onclick="ObtenerDatosFila(this)" style="border: none; background: none;"><a class="view" title="Ver" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a></button>';
                       //echo '<button Onclick="ObtenerDatosParaEnviarAHacienda(this)" style="border: none; background: none;"><a title="Enviar a Hacienda" data-toggle="tooltip"><i style = "color:orange" class="glyphicon glyphicon-send"></i></a></button>';	
                       
                       /*if($ri['Status']=='aceptado' || ($ri['Status']==''&&$ri['TipoDocumento']=='Tiquete'))
                       {*/
					   		echo '<button Onclick="CargarPDF(this)" style="border: none; background: none;"><a title="PDF" data-toggle="tooltip"><i class="fa fa-file-pdf-o" style="color:red"></i></a></button>';
					   							   		
					   //} 
					   
					   if($ri['FK_Cliente']!='000000000' AND $ri['Status']=='aceptado')
				   		{
							echo '<button Onclick="ReenviarEmail(this)" style="border: none; background: none;"><a title="Reenviar Email" data-toggle="tooltip"><i  style = "color:green" class="material-icons">&#xE0BE;</i></a></button>';	
						}
					   
					                         
                       //si tiene nofactura(se envio a hacienda) y es una factura o tiquete //El estado tiene que ser aceptado o rechazado
                       if(($ri['Status']=='aceptado'||$ri['Status']=='rechazado') &&!empty($ri['No Documento'])&&($ri['TipoDocumento']=='Factura'||$ri['TipoDocumento']=='Tiquete') && $ri['TipoDevolucion']!='Total')
                       {
					   		echo '<button Onclick="ObtenerDatosFilaParaNotaCredito(this)" style="border: none; background: none;"><a class="edit" title="Nota Crédito" data-toggle="tooltip"><i class="material-icons">&#xE873;</i></a></button>';
					   		
					   		if($ri['Status']=='rechazado')
					   		{
								echo '<button Onclick="ConsultaEstadoDocumento(this)" style="border: none; background: none;"><a title="Consultar Estado" data-toggle="tooltip"><i style = "color:black" class="fa fa-binoculars"></i></a></button>';		
							}				   		
					   }
					   //si tiene nonota(se envio a hacienda) y es una nota credito //El estado tiene que ser aceptado o rechazado
					   else if(($ri['Status']=='aceptado'||$ri['Status']=='rechazado') && !empty($ri['No Documento'])&&$ri['TipoDocumento']=='Nota Credito' && $ri['TipoDevolucion']!='Total')
                       {
					   		echo '<button Onclick="ObtenerDatosFilaParaNotaDebito(this)" style="border: none; background: none;"><a title="Nota Débito" data-toggle="tooltip"><i style = "color:purple" class="material-icons">&#xE8B0;</i></a></button>';
					   		
					   		if($ri['Status']=='rechazado')
					   		{
								echo '<button Onclick="ConsultaEstadoDocumento(this)" style="border: none; background: none;"><a title="Consultar Estado" data-toggle="tooltip"><i style = "color:black" class="fa fa-binoculars"></i></a></button>';		
							}
					   }
					   //si tiene nonota(se envio a hacienda) y es una nota debito //El estado tiene que ser aceptado o rechazado
					   
					   else if(($ri['Status']=='aceptado'||$ri['Status']=='rechazado') && !empty($ri['No Documento'])&&$ri['TipoDocumento']=='Nota Debito')
                       {					   		
					   		if($ri['Status']=='rechazado')
					   		{
								echo '<button Onclick="ConsultaEstadoDocumento(this)" style="border: none; background: none;"><a title="Consultar Estado" data-toggle="tooltip"><i style = "color:black" class="fa fa-binoculars"></i></a></button>';		
							}
					   }
					   else if(($ri['Status']=='procesando'||$ri['Status']=='en espera') && !empty($ri['No Documento']))
					   {
					   		echo '<button Onclick="ConsultaEstadoDocumento(this)" style="border: none; background: none;"><a title="Consultar Estado" data-toggle="tooltip"><i style = "color:black" class="fa fa-binoculars"></i></a></button>';
					   }
					   else
					   {
					   		if((!empty($ri['Status']) || !empty($ri['No Documento'])) && $ri['Status']!='aceptado')
					   		{
								echo '<button Onclick="ConsultaEstadoDocumento(this)" style="border: none; background: none;"><a title="Consultar Estado" data-toggle="tooltip"><i style = "color:black" class="fa fa-binoculars"></i></a></button>';	
							}
							else if(((empty($ri['Status']) || empty($ri['No Documento'])) && $ri['Status']!='aceptado'))
					   		{
					   			echo '<button Onclick="ObtenerDatosParaEnviarAHacienda(this)" style="border: none; background: none;"><a title="Enviar a Hacienda" data-toggle="tooltip"><i style = "color:orange" class="glyphicon glyphicon-send"></i></a></button>';
								echo '<button Onclick="ObtenerFilaABorrar(this)" style="border: none; background: none;"><a class="delete" title="Borrar" data-toggle="tooltip"><i class="material-icons">&#xE92B;</i></a></button>';
							}
							
							if((!empty($ri['Status']) || !empty($ri['No Documento'])) && ($ri['Status']=='no enviado' || $ri['Status']=='sin respuesta'))
					   		{
								echo '<button Onclick="ObtenerDatosParaEnviarAHacienda(this)" style="border: none; background: none;"><a title="Enviar a Hacienda" data-toggle="tooltip"><i style = "color:orange" class="glyphicon glyphicon-send"></i></a></button>';	
							}
					   }
					   
					   /*if($ri['TipoDocumento']=='Factura' && ($ri['Saldo']!='0.00' || ($ri['Saldo']!='' && $ri['Saldo']!='0.00')) && (!empty($ri['Status']) || !empty($ri['No Documento'])))
					   {
					   		echo '<a title="Hacer abono" data-toggle="tooltip"><button Onclick="" style="border: none; background: url(images/costa-rica-colon-currency-symbol.png); width:16px; height:16px;"></button></a>';
					   }*/
                       echo "</td>";
                       echo "<td style='display: none'>".$ri['TipoDevolucion']."</td>";
                      echo "</tr>";
                      }?>
	</tbody>
  <tfoot>
  </tfoot>
</table> 
 </div>

<div class="modal fade" id="ModalMSJ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="DialogMSJ" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Documento</h4>
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
          <button type="button" onclick="BorrarFactura()" class="btn btn btn-warning" data-dismiss="modal">Borrar</button>
          <button type="button" onclick="LimpiarSession()" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
        </div>
      </div>
      
<div class="modal fade" id="ModalNotaCreditoDebito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:#F0AD4E;" id="exampleModalLabel">Advertencia</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body" style="color:black;" id="MSJNotaCreditoDebito">
          </div>
          <div class="modal-footer">
          <button type="button" id="bntNotaTotal" onclick="RedirigirAFormularioFacturaNotaTotal()" class="btn btn-danger" data-dismiss="modal">Total</button>
          <button type="button" id="bntNotaParcial" onclick="RedirigirAFormularioFacturaNotaParcial()" class="btn btn btn-warning" data-dismiss="modal">Parcial</button>
          <button type="button" onclick="LimpiarSession()" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
        </div>
      </div>
      
<div class="modal fade" id="ModalEnvioHacienda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="font-weight: bold; color:#F0AD4E;" id="exampleModalLabel">Advertencia</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body" style="color:black;" id="MSJModalEnvioHacienda">
          </div>
          <div class="modal-footer">
          <button type="button" onclick="EnviarDocumento()" class="btn btn-danger" data-dismiss="modal">Enviar</button>
          <button type="button" onclick="LimpiarSession()" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
        </div>
      </div>
      
<footer class="page-footer">
  <?php include('PiePagina.php')?>
</footer>

</body>  
<script> 
$(document).ready(function(){
  
  //cambiar idioma de Tabla
	
	$('#dtBasicExample').DataTable({
			"scrollX": true,
			"ordering": false,
              "paging": true,
              "search": true,
              "info": true,
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


<script>
function ObtenerFilaABorrar(oButton)
{
  /*
  @TODO al tocar este boton verificar primero si es de solo lectura o modificar(si tiene estatus no factura electronica es solo lectura )*/
    var dgvVerFacturas = document.getElementById('dtBasicExample');

    sessionStorage.setItem("IDDocumento",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[4].innerHTML);
    sessionStorage.setItem("TipoDocumento",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[1].innerHTML);
    sessionStorage.setItem("CedulaCliente",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[6].innerHTML);
    sessionStorage.setItem("Borrar",'Borrar');
    sessionStorage.setItem("IndiceBoton",oButton.parentNode.parentNode.rowIndex);

    $("#MSJAdvertencia").html("¿Desea borrar el documento seleccionado?");
    $("#ModalAdvertencia").modal("show"); 
}   
</script>

<script>
  function LimpiarSession()
  {
    sessionStorage.clear();
  }
</script>

<script>
  function ReenviarEmail(oButton)
  {
  		var dgvVerFacturas = document.getElementById('dtBasicExample');
  		
		var IDDocumento=dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[4].innerHTML;
		var TipoDocumento=dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[1].innerHTML;
		var CedulaCliente=dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[6].innerHTML;
		var ReenviarEmail="ReenviarEmail";	    
	    
	    if(TipoDocumento=="Factura" || TipoDocumento=='Tiquete')
	    {
			$.ajax({
	                  url: 'Logica/Factura.php',
	                  type: 'post',
	                  data: 
	                  {
	                     btnReenviarEmail:ReenviarEmail,
	                     IDDocumento:IDDocumento,
	                     CedulaCliente:CedulaCliente,
	                  },
	                  dataType: 'json',
	                  success:function(response){
	                      
	                      var len = response.length;

	                      if(len > 0){

	                      var EmailEnviado = ' Email Enviado <br/> <br/>';	
	                      var Respuesta=EmailEnviado.bold()+response[0]['Respuesta'];

	                    
	                    $('#DialogMSJ').height('auto !important');
	                    $('#DialogMSJ').width('auto');

	                    $("#MSJ").html(Respuesta);
	                    $("#ModalMSJ").modal("show");

	                    }
	                      
	                  }
	              });

	              return false;
	        	
		}
		else if(TipoDocumento=="Nota Debito" || TipoDocumento=='Nota Credito')
	    {
	    	//ir a notacreditodebito
	    	$.ajax({
	                  url: 'Logica/Nota.php',
	                  type: 'post',
	                  data: 
	                  {
	                     btnReenviarEmail:ReenviarEmail,
	                     IDDocumento:IDDocumento,
	                     CedulaCliente:CedulaCliente,
	                  },
	                  dataType: 'json',
	                  success:function(response){
	                      
	                      var len = response.length;

	                      if(len > 0){

						  var EmailEnviado = ' Email Enviado <br/> <br/>';	
	                      var Respuesta=EmailEnviado.bold()+response[0]['Respuesta'];

	                    
	                    $('#DialogMSJ').height('auto !important');
	                    $('#DialogMSJ').width('auto');

	                    $("#MSJ").html(Respuesta);
	                    $("#ModalMSJ").modal("show");

	                    }
	                      
	                  }
	              });

	              return false;
		}
  }
	
</script>


<script>
		
		function CargarPDF(oButton)
		{
			var dgvVerFacturas = document.getElementById('dtBasicExample');
			
			var IDDocumento = dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[4].innerHTML;
			var TipoDocumento = dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[1].innerHTML;
    		var CedulaCliente = dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[6].innerHTML;
			
			$.post('Logica/PDF/PDF.php', {IDDocumento:IDDocumento,TipoDocumento:TipoDocumento,CedulaCliente:CedulaCliente,btnPDF:"btnPDF"}, function(){
    window.open('Logica/PDF/PDF.php');
});

		}
		
</script>

<script>
function ObtenerDatosFila(oButton)
{
	/*
	@TODO al tocar este boton verificar primero si es de solo lectura o modificar(si tiene estatus no factura electronica es solo lectura )*/
    var dgvVerFacturas = document.getElementById('dtBasicExample');
    
    sessionStorage.clear();

	sessionStorage.setItem("Estatus",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[0].innerHTML);
	sessionStorage.setItem("NoFactElect",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[2].innerHTML);
    sessionStorage.setItem("IDFactura",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[4].innerHTML);
    sessionStorage.setItem("CedulaCliente",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[6].innerHTML);
    sessionStorage.setItem("Modificar",'Modificar');
    sessionStorage.setItem("ValidarTipoDoc",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[1].innerHTML);//le mando el tipo de documento
    
    location.href ="FormularioFactura.php";
}   
</script>

<script>
function ObtenerDatosParaEnviarAHacienda(oButton)
{
    var dgvVerFacturas = document.getElementById('dtBasicExample');
    
    sessionStorage.clear();

	sessionStorage.setItem("TipoDocumento",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[1].innerHTML);
    sessionStorage.setItem("IDDocumento",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[4].innerHTML);
    sessionStorage.setItem("CedulaCliente",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[6].innerHTML);
    sessionStorage.setItem("EnviarAHacienda",'EnviarAHacienda');

    $("#MSJModalEnvioHacienda").html("¿Desea enviar el documento selecionado al Ministerio de Hacienda?");
    $("#ModalEnvioHacienda").modal("show"); 
}    
</script>


<script>
function ObtenerDatosFilaParaNotaCredito(oButton)
{
	/*
	@TODO al tocar este boton verificar primero si es de solo lectura o modificar(si tiene estatus no factura electronica es solo lectura )*/
    var dgvVerFacturas = document.getElementById('dtBasicExample');
    
    sessionStorage.clear();

	sessionStorage.setItem("Estatus",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[0].innerHTML);
	sessionStorage.setItem("TipoDocumento",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[1].innerHTML);
	sessionStorage.setItem("NoFactElect",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[2].innerHTML);
    sessionStorage.setItem("IDFactura",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[4].innerHTML);
    sessionStorage.setItem("CedulaCliente",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[6].innerHTML);
    sessionStorage.setItem("TipoDevolucion",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[10].innerHTML);
    sessionStorage.setItem("Modificar",'Modificar');
    sessionStorage.setItem("TipoDocAGenerar","NotaCredito");
    
    if(sessionStorage.getItem("TipoDocumento")=='Tiquete')
    {
		$('#bntNotaParcial').hide();
		
		 $("#MSJNotaCreditoDebito").html("¿Desea aplicar una devolución total de "+sessionStorage.getItem("TipoDocumento")+"?");
	}
	else if(sessionStorage.getItem("TipoDocumento")!='Tiquete' && sessionStorage.getItem("TipoDevolucion")=='Parcial')
    {
		$('#bntNotaTotal').hide();
		
		 $("#MSJNotaCreditoDebito").html("¿Desea aplicar una devolución parcial de "+sessionStorage.getItem("TipoDocumento")+"?");
	}
	else
	{
		$('#bntNotaParcial').show();
		$('#bntNotaTotal').show();
		
		$("#MSJNotaCreditoDebito").html("¿Desea aplicar una devolución parcial o total de "+sessionStorage.getItem("TipoDocumento")+"?");
	}

    
    $("#ModalNotaCreditoDebito").modal("show"); 
}   
</script>

<script>
function ObtenerDatosFilaParaNotaDebito(oButton)
{
	/*
	@TODO al tocar este boton verificar primero si es de solo lectura o modificar(si tiene estatus no factura electronica es solo lectura )*/
    var dgvVerFacturas = document.getElementById('dtBasicExample');
    
    sessionStorage.clear();

	sessionStorage.setItem("Estatus",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[0].innerHTML);
	sessionStorage.setItem("TipoDocumento",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[1].innerHTML);
	sessionStorage.setItem("NoFactElect",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[2].innerHTML);
    sessionStorage.setItem("IDFactura",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[4].innerHTML);
    sessionStorage.setItem("CedulaCliente",dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[6].innerHTML);
    sessionStorage.setItem("Modificar",'Modificar');
    sessionStorage.setItem("TipoDocAGenerar","NotaDebito");
    
    location.href ="FormularioFactura.php";
}   
</script>

<script>
	
$('#ModalMSJ').on('hide.bs.modal', function (e) {
		window.open('FormularioVerFacturas.php', '_self');
	});
	
</script>

<script>
	
	function RedirigirAFormularioFacturaNotaParcial()
	{
		sessionStorage.setItem("CondicionNota","Parcial");
		location.href ="FormularioFactura.php";
	}
	
	function RedirigirAFormularioFacturaNotaTotal()
	{
		sessionStorage.setItem("CondicionNota","Total");
		location.href ="FormularioFactura.php";
	}
	
</script>

<script>
	
	function BorrarFactura()
	{	
    var IndBoton=sessionStorage.getItem("IndiceBoton");
    var dgvVerFacturas = document.getElementById('dtBasicExample');
	var IDDocumento=sessionStorage.getItem("IDDocumento");
	var TipoDocumento=sessionStorage.getItem("TipoDocumento");
	var CedulaCliente=sessionStorage.getItem("CedulaCliente");
    var Borrar=sessionStorage.getItem("Borrar");

    sessionStorage.clear();
    
    
    if(TipoDocumento=="Factura" || TipoDocumento=='Tiquete')
    {
		$.ajax({
                  url: 'Logica/Factura.php',
                  type: 'post',
                  data: 
                  {
                     btnBorrar:Borrar,
                     IDDocumento:IDDocumento,
                  },
                  dataType: 'json',
                  success:function(response){
                      
                      var len = response.length;

                      if(len > 0){

                        dgvVerFacturas.deleteRow(IndBoton);

                      var Respuesta=response[0]['Respuesta'];

                    $("#MSJ").html(Respuesta);
                    $("#ModalMSJ").modal("show");

                      }
                      
                  }
              });

              return false;
        	
	}
	else if(TipoDocumento=="Nota Debito" || TipoDocumento=='Nota Credito')
    {
    	//ir a notacreditodebito
    	$.ajax({
                  url: 'Logica/Nota.php',
                  type: 'post',
                  data: 
                  {
                     btnBorrar:Borrar,
                     IDDocumento:IDDocumento,
                     TipoDocumento:(TipoDocumento=="Nota Debito")?'02':'03',
                     CedulaCliente:CedulaCliente,
                  },
                  dataType: 'json',
                  success:function(response){
                      
                      var len = response.length;

                      if(len > 0){

                        dgvVerFacturas.deleteRow(IndBoton);

                      var Respuesta=response[0]['Respuesta'];

                    $("#MSJ").html(Respuesta);
                    $("#ModalMSJ").modal("show");

                      }
                      
                  }
              });

              return false;
	}
}
	
</script>

<script>
	
function ConsultaEstadoDocumento(oButton)
{
	var dgvVerFacturas = document.getElementById('dtBasicExample');
	
	var TipoDocumento = dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[1].innerHTML;
	var IDDocumento = dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[4].innerHTML;
    var CedulaCliente = dgvVerFacturas.rows[oButton.parentNode.parentNode.rowIndex].cells[6].innerHTML;
	
	if(TipoDocumento=="Factura" || TipoDocumento=='Tiquete')
    {
		$.ajax({
                  url: 'Logica/Factura.php',
                  type: 'post',
                  data: 
                  {
                     btnConsultarEstado:'ConsultarEstado',
                     IDDocumento:IDDocumento,
                     CedulaCliente:CedulaCliente,
                  },
                  dataType: 'json',
                  success:function(response){
                      
                      var len = response.length;

                      if(len > 0){

                      var Respuesta=response[0]['Respuesta'];

                    
                    $('#DialogMSJ').height('auto !important');
                    $('#DialogMSJ').width('auto');

                    $("#MSJ").html(Respuesta);
                    $("#ModalMSJ").modal("show");

                    }
                      
                  }
              });

              return false;
        	
	}
	else if(TipoDocumento=="Nota Debito" || TipoDocumento=='Nota Credito')
    {
    	//ir a notacreditodebito
    	$.ajax({
                  url: 'Logica/Nota.php',
                  type: 'post',
                  data: 
                  {
                     btnConsultarEstado:'ConsultarEstado',
                     IDDocumento:IDDocumento,
                     CedulaCliente:CedulaCliente,
                  },
                  dataType: 'json',
                  success:function(response){
                      
                      var len = response.length;

                      if(len > 0){

                      var Respuesta=response[0]['Respuesta'];

                    
                    $('#DialogMSJ').height('auto !important');
                    $('#DialogMSJ').width('auto');

                    $("#MSJ").html(Respuesta);
                    $("#ModalMSJ").modal("show");

                    }
                      
                  }
              });

              return false;
	}
}
	
</script>

<script>
	
function EnviarDocumento()
{	
    var dgvVerFacturas = document.getElementById('dtBasicExample');
	var IDDocumento=sessionStorage.getItem("IDDocumento");
	var TipoDocumento=sessionStorage.getItem("TipoDocumento");
	var CedulaCliente=sessionStorage.getItem("CedulaCliente");
	var EnviarAHacienda=sessionStorage.getItem("EnviarAHacienda");

    sessionStorage.clear();
    
    
    if(TipoDocumento=="Factura" || TipoDocumento=='Tiquete')
    {
		$.ajax({
                  url: 'Logica/Factura.php',
                  type: 'post',
                  data: 
                  {
                     btnEnviarAHacienda:EnviarAHacienda,
                     IDDocumento:IDDocumento,
                     CedulaCliente:CedulaCliente,
                  },
                  dataType: 'json',
                  success:function(response){
                      
                      var len = response.length;

                      if(len > 0){

                      var Respuesta=response[0]['Respuesta'];

                    
                    $('#DialogMSJ').height('auto !important');
                    $('#DialogMSJ').width('auto');

                    $("#MSJ").html(Respuesta);
                    $("#ModalMSJ").modal("show");

                    }
                      
                  }
              });

              return false;
        	
	}
	else if(TipoDocumento=="Nota Debito" || TipoDocumento=='Nota Credito')
    {
    	//ir a notacreditodebito
    	$.ajax({
                  url: 'Logica/Nota.php',
                  type: 'post',
                  data: 
                  {
                     btnEnviarAHacienda:EnviarAHacienda,
                     IDDocumento:IDDocumento,
                     CedulaCliente:CedulaCliente,
                  },
                  dataType: 'json',
                  success:function(response){
                      
                      var len = response.length;

                      if(len > 0){

                      var Respuesta=response[0]['Respuesta'];

                    
                    $('#DialogMSJ').height('auto !important');
                    $('#DialogMSJ').width('auto');

                    $("#MSJ").html(Respuesta);
                    $("#ModalMSJ").modal("show");

                    }
                      
                  }
              });

              return false;
	}
}	
</script>


<style type="text/css">
    body {
        color: #566787;
        background: #ffff;
		font-family: 'Roboto', sans-serif;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px;
        margin: 30px 0;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }
    .search-box {
        position: relative;        
        float: right;
    }
    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }
	.search-box input:focus {
		border-color: #3FBAE4;
	}
    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
	table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }    
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 95%;
        width: 30px;
        height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
        padding: 0;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 6px;
        font-size: 95%;
    }    
</style>

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


</html>  