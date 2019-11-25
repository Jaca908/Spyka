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
                    <div class="col-sm-4"><h2><b>Documentos</b></h2></div>

					<form id="frmXML" action="" enctype="multipart/form-data" method="post">
                        <div class="col-sm-1">
                                <label class="control-label" for="Name">Agregar XML</label>
                        </div>
                        <div class="col-sm-3">
				    		 <input id='upload' name="upload[]" type="file" accept=".xml" multiple="multiple" />
                        </div>
                        <div class="col-sm-2">
				    		 <input type="submit" name="submit" value="Cargar">
                        </div>
                    </form>
                    
                    <div class="col-sm-2">
                    <button type="button" onclick="EnviarAHacienda()" class="btn btn-primary">Enviar a Hacienda</button>
                    </div>
                </div>
            </div>            
                       
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
		<tr>
			<th>Estatus</th>
			<th>Tipo Documento<i class="fa fa-sort"></i></th>
			<th>Nº Electrónico<i class="fa fa-sort"></i></th>
			<th>Usuario</th>
			<th style="width: 200px;">Consecutivo Interno<i class="fa fa-sort"></i></th>
			<th style="width: 700px;">Fecha<i class="fa fa-sort"></i></th>
			<th>Emisor<i class="fa fa-sort"></i></th>
			<th style="width: 200px;">Nombre del Emisor</th>
			<th>Monto<i></i></th>
			<th style="width: 200px;"><input type="checkbox" id = "checkTotal"/>Aceptación</th>
			<th style="width: 300px;"><input type="checkbox" id = "checktodas"/> Selec. Todo</th>
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
							WHEN '01' THEN 'Factura'
						   WHEN '02' THEN 'Nota Debito'
						  	WHEN '03' THEN 'Nota Credito'
						   WHEN '04' THEN 'Tiquete'
						       END AS TipoDocumento,
						NumeroConsecutivoHacienda AS 'No Documento',
						FK_Usuario,
						Secuencia, 
						Fecha,
						FK_Cliente,
						NombreEmisor,
						TotalComprobante AS Total
						FROM Compra WHERE FK_Usuario=".$_SESSION['IDUsuario']."
						
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
                        echo "<td>".$ri['Secuencia']."</td>";
                        echo "<td>".$Fecha."</td>";
                        echo "<td>".$ri['FK_Cliente']."</td>";
                        echo "<td>".$ri['NombreEmisor']."</td>";
                        echo "<td>".number_format($ri['Total'],2)."</td>";
                        
                        if($ri['Status']=='aceptado' || $ri['Status']=='rechazado')
                        {
							echo "<td></td>";                       	
	                       	echo "<td></td>";
						}
						else
						{
							echo "<td>";
	                       	echo "<input type='checkbox' class='chb' id='chbTotal' name='Total' value='Total'>Total<br>";
	  						echo "<input type='checkbox' class='chb' id='chbParcial' name='Parcial' value='Parcial'>Parcial<br>";
	  						echo "<input type='checkbox' class='chb' id='chbRechazo' name='Rechazo' value='Rechazo'>Rechazo";
	                       	echo "</td>";                       	
	                       	echo "<td><input type='checkbox' class = 'chcktbl'/> Enviar</td>";
						}
                      echo "</tr>";
                      }?>
	</tbody>
  <tfoot>
  </tfoot>
</table> 
 </div>

<!-- Modal -->
<div class="modal fade" id="ModalMSJ" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="DialogMSJ" style="width: 90%" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Compras</h4>
      </div>
      <div class="modal-body">
        <div id="MSJ" style="max-height: 328.5px; overflow-y: auto;">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalMSJError" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="DialogMSJError" style="width: 80%" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Compras</h4>
      </div>
      <div class="modal-body">
        <div id="MSJError" style="max-height: 328.5px; overflow-y: auto;">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
       
<footer class="page-footer">
<?php include('PiePagina.php')?>
</footer>

</body> 
 
<script> 
$(document).ready(function(){
  
  //cambiar idioma de Tabla
	
	$('#dtBasicExample').DataTable({
			"scrollX": true,
			"bInfo": false, //Dont display info e.g. "Showing 1 to 4 of 4 entries"
		    "paging": false,//Dont want paging                
		    "bPaginate": false,//Dont want paging
			"ordering": false,
              "search": true,
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
			},
				"columnDefs": [
							    { "orderable": false, "targets": [9,10] }
							  ]
		});
		
	$('.dataTables_length').addClass('bs-select');
  
});
</script>

<script>
	
$('#ModalMSJ').on('hide.bs.modal', function (e) {
	/*	if(sessionStorage.getItem("EnvioMasivo")!='SI' || 
		   sessionStorage.getItem("EnvioMasivo")==null)
		{*/
			sessionStorage.clear();
			window.open('FormularioVerCompras.php', '_self');	
		//}
	});
	
</script>

<script>
	function EnviarAHacienda()
	{
		var TableData = new Array();
		var Aceptacion='';
		var Enviar;
		var Errores='';
		var Seleccionado=0;
		
		$('#dtBasicExample tr').each(function(row, tr){
			
					if($(tr).find('td .chcktbl').prop('checked') == true &&
					  ($(tr).find('td #chbTotal').prop('checked') == true ||
					   $(tr).find('td #chbParcial').prop('checked') == true ||
					   $(tr).find('td #chbRechazo').prop('checked') == true))
		    		{//todo marcado
		    			Enviar=true;
		    			Seleccionado++;
		    			
		    			if($(tr).find('td #chbTotal').prop('checked') == true)
		    			{
							Aceptacion=document.getElementById('chbTotal').value;
						}
		    			else if($(tr).find('td #chbParcial').prop('checked') == true)
		    			{
							Aceptacion=document.getElementById('chbParcial').value;
						}
						else if($(tr).find('td #chbRechazo').prop('checked') == true)
		    			{
							Aceptacion=document.getElementById('chbRechazo').value;
						}
						else
						{
							Aceptacion='';	
						}
				
						TableData[row]={
					             "Estatus" : $(tr).find('td:eq(0)').text()
					            ,"TipoDoc" : $(tr).find('td:eq(1)').text()
					            , "NumeroElectronico" :$(tr).find('td:eq(2)').text()
					            , "Usuario" : $(tr).find('td:eq(3)').text()
					            , "ConsecutivoInterno" : $(tr).find('td:eq(4)').text()
					            , "Fecha" : $(tr).find('td:eq(5)').text()
					            , "CedulaEmisor" : $(tr).find('td:eq(6)').text()
					            , "NombreEmisor" : $(tr).find('td:eq(7)').text()
					            , "MontoTotal" : $(tr).find('td:eq(8)').text()
					            , "Aceptacion" : Aceptacion
					            , "Enviar" : Enviar
					        	}
    				}
    				else if($(tr).find('td .chcktbl').prop('checked') == true &&
	    		   ($(tr).find('td #chbTotal').prop('checked') != true &&
			        $(tr).find('td #chbParcial').prop('checked') != true &&
			        $(tr).find('td #chbRechazo').prop('checked') != true))
					{
						Errores+='&#10148; EL documento Nº '+ $(tr).find('td:eq(2)').text()+' no tiene Un tipo de aceptación. Seleccione el tipo de aceptación. <br>';
						Seleccionado++;
					}
		    		else if($(tr).find('td .chcktbl').prop('checked') != true &&
			    		   ($(tr).find('td #chbTotal').prop('checked') == true ||
					        $(tr).find('td #chbParcial').prop('checked') == true ||
					        $(tr).find('td #chbRechazo').prop('checked') == true))
					{
						Errores+='&#10148; EL documento Nº '+ $(tr).find('td:eq(2)').text()+' no se encuentra seleccionado para enviarlo.<br>';
						Seleccionado++;
					}        	
			});

    		//TableData.shift();
    		
    		if(Errores=='' && Seleccionado>0)
    		{   
    			sessionStorage.setItem("EnvioMasivo",'SI');
    			 					
				$.ajax({  
				    type: 'POST', 
				    url: 'Logica/Compra.php',  
				    data: { FacturasCompras:TableData, btnEnviar:"Enviar" },
				    success: function(data) {
							$("#MSJ").html(data);
			            	$("#ModalMSJ").modal("show");
				    }
				});

		        return false;
		    }
		    else if(Errores!='' && Seleccionado>0)
		    {
		    	$("#MSJError").html(Errores);
            	$("#ModalMSJError").modal("show");
		    }
	}
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

<script type="text/javascript">
    $('#checktodas').click(function () {
        if (this.checked == false) {
            $('.chcktbl:checked').attr('checked', false);
        }
        else {
            $('.chcktbl:not(:checked)').attr('checked', true);
        }
    });
    $('#chckHead').click(function () {
    });
</script>

<script type="text/javascript">
    $('#checkTotal').click(function () {
        if (this.checked == false) {
            $('#chbTotal:checked').attr('checked', false);
        }
        else {
        	$(".chb").siblings().prop('checked', false);
            $('#chbTotal:not(:checked)').attr('checked', true);
        }
    });
    $('#chckHead').click(function () {
    });
</script>

<script>
	
$(".chb").change(function() {
$(this).siblings().prop('checked', false);   
});
	
</script>

<?php

if(isset($_POST['submit']))
{
	$Errores='';
	$FK_Usuario=$_SESSION['IDUsuario'];
	$CedulaUsuario=$_SESSION['Cedula'];
	
    if(count($_FILES['upload']['name']) > 0)
    {    	
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) 
        {

            //save the filename
            $xml = $_FILES['upload']['name'][$i];
            
            $Extension = (isset(pathinfo($xml)['extension']))?strtolower(pathinfo($xml)['extension']):'';
            
            if(empty($xml) AND $Extension=='')
            {
				exit;
			}
            else if(($Extension!='xml' AND $Extension!='')|| ($Extension!='xml' AND $Extension==''))
            {
            	$Errores.="&#10148; El documento $xml que intenta guardar no es un archivo XML<br>";
            	
            	echo "<script>";
				echo "$('#MSJ').html('".rtrim($Errores,'<br>')."');";
			    echo "$('#ModalMSJ').modal('show');";
				echo "</script>";
				
				exit;
			}
            
            $xmlTemporal = $_FILES['upload']['tmp_name'][$i];
            
            if(!empty($xmlTemporal))
            {
				$xmlfile = file_get_contents($xmlTemporal);	
			}
			else
			{
				$Errores.="&#10148; El documento $xml que intenta guardar está vacío<br>";
			}

            
            $InicioEmisorValido=ValidarEtiquetas(strtolower($xmlfile),'<emisor>');
            $FinalEmisorValido=ValidarEtiquetas(strtolower($xmlfile),'</emisor>');
			$InicioReceptorValido=ValidarEtiquetas(strtolower($xmlfile),'<receptor>');
			$FinalReceptorValido=ValidarEtiquetas(strtolower($xmlfile),'</receptor>');
			
			$Clave=ObtenerTextoEntreEtiquetas($xmlfile,'<Clave>','</Clave>');
				
			//Emisor
			
			$BloqueEmisor= ObtenerTextoEntreEtiquetas($xmlfile,'<Emisor>','</Emisor>');
			
			$NombreEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Nombre>','</Nombre>');
			$CedulaEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Numero>','</Numero>');
			$ProvinciaEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Provincia>','</Provincia>');
			$CantonEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Canton>','</Canton>');
			$DistritoEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Distrito>','</Distrito>');
			
			//Receptor
			
			$BloqueReceptor= ObtenerTextoEntreEtiquetas($xmlfile,'<Receptor>','</Receptor>');

			$CedulaReceptor=ObtenerTextoEntreEtiquetas($BloqueReceptor,'<Numero>','</Numero>');				
			
			$TotalComprobante= ObtenerTextoEntreEtiquetas($xmlfile,'<TotalComprobante>','</TotalComprobante>');

			if($InicioEmisorValido AND $FinalEmisorValido AND $InicioReceptorValido AND $FinalReceptorValido AND $Clave!='' 
			AND $CedulaEmisor!=''AND $ProvinciaEmisor!='' AND $CantonEmisor!='' AND $DistritoEmisor!='' AND $CedulaReceptor!=''
			AND $TotalComprobante!='')
			{
				$Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

			    if ($Conexion->connect_error) 
			    {
			        die("Connection failed: " . $Conexion->connect_error);
			    }
				
				/*Comprobar con NoCLave que no este en la BD $Clave*/
				$sql = "SELECT ClaveHacienda FROM Compra WHERE FK_Usuario = $FK_Usuario AND ClaveHacienda= '$Clave'";
							
				$result = $Conexion->query($sql);

				if ($result->num_rows > 0) 
				{					
					$Errores.="&#10148; Error: El documento XML Nº $Clave del emisor $NombreEmisor, cédula $CedulaEmisor ya existe en la Base de Datos<br>";
				}
				else
				{	
					$sql = "SELECT Cedula FROM Cliente WHERE FK_Usuario = $FK_Usuario AND Cedula= '$CedulaEmisor';";
							
					$result = $Conexion->query($sql);

					if ($result->num_rows > 0) 
					{
							
					}
					else
					{	
						//guardar el emisor que no exista y poner el Doc como valido
					
						$BloqueEmisor= ObtenerTextoEntreEtiquetas($xmlfile,'<Emisor>','</Emisor>');
				
						$NombreEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Nombre>','</Nombre>');
						$TipoCedulaEmisor=FormatoTipoCedula(ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Tipo>','</Tipo>'));
						$CedulaEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Numero>','</Numero>');
						$NombreComercialEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<NombreComercial>','</NombreComercial>');
						$ProvinciaEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Provincia>','</Provincia>');
						$CantonEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Canton>','</Canton>');
						$DistritoEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Distrito>','</Distrito>');
						$BarrioEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Barrio>','</Barrio>');
						$DireccionEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<OtrasSenas>','</OtrasSenas>');
						$CodigoPaisEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<CodigoPais>','</CodigoPais>');
						$NumeroTelefonoEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<NumTelefono>','</NumTelefono>');
						$EmailEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<CorreoElectronico>','</CorreoElectronico>');
						
						$FechaIngreso='now()';
						$FechaUltimaFacturacion='null';
						$Zona=$ProvinciaEmisor.$CantonEmisor.$DistritoEmisor.$BarrioEmisor;
						
						$sql = "insert into Cliente
						(Cedula,FK_Usuario,Nombre,Direccion,Telefono,FechaIngreso,FechaUltimaFacturacion,
						TipoCedula,Email1,Email2,Zona,Exonerado,Activo,Expediente)
						values('$CedulaEmisor',$FK_Usuario,'$NombreEmisor','$DireccionEmisor','$NumeroTelefonoEmisor',$FechaIngreso,$FechaUltimaFacturacion,'$TipoCedulaEmisor','$EmailEmisor','','$Zona',0,1,'');";
							
						if($Conexion->query($sql) === TRUE) 
						{  
						   			  
						} 
						else 
						{}	
					}
				}						
			}
			else if($Clave=='')
			{
				$Errores.="&#10148; Error: El documento XML $xml No contiene un  Nº Clave<br>";
			}
			else if($CedulaReceptor=='')
			{
				$Errores.="&#10148; Error: El documento XML Nº $Clave No contiene la cédula del receptor<br>";
			}
			else if($CedulaEmisor=='')
			{
				$Errores.="&#10148; Error: El documento XML Nº $Clave no contine la cedula del emisor<br>";
			}
			else if($ProvinciaEmisor==''||$CantonEmisor==''||$DistritoEmisor=='')
			{
				$Errores.="&#10148; Error: El documento XML Nº $Clave del emisor $NombreEmisor, cédula $CedulaEmisor No contiene la zona del emisor completa<br>";
			}
			else if($TotalComprobante=='')
			{
				$Errores.="&#10148; Error: El documento XML Nº $Clave del emisor $NombreEmisor, cédula $CedulaEmisor No contiene un monto total<br>";
			}
			else if(!$InicioEmisorValido AND !$FinalEmisorValido AND !$InicioReceptorValido AND !$FinalReceptorValido)
			{
				$Clave=ObtenerTextoEntreEtiquetas($xmlfile,'<Clave>','</Clave>');
				
				$Errores.="&#10148; Error: XML no válido. El documento Nº $Clave No contiene las etiquetas del Emisor ni del Receptor<br>";
			}
			else if(!$InicioEmisorValido AND !$FinalEmisorValido)
			{
				$Clave=ObtenerTextoEntreEtiquetas($xmlfile,'<Clave>','</Clave>');
				
				$Errores.="&#10148; Error: XML no válido. El documento Nº $Clave No contiene las etiquetas del Emisor<br>";
			}
			else if(!$InicioEmisorValido)
			{
				$Clave=ObtenerTextoEntreEtiquetas($xmlfile,'<Clave>','</Clave>');
				
				$Errores.="&#10148; Error: XML no válido. El documento Nº $Clave No contiene la etiqueta de apertura del Emisor<br>";
			}
			else if(!$FinalEmisorValido)
			{
				$Clave=ObtenerTextoEntreEtiquetas($xmlfile,'<Clave>','</Clave>');
				
				$Errores.="&#10148; Error: XML no válido. El documento Nº $Clave No contiene la etiqueta de cierre del Emisor<br>";
			}
			else if(!$InicioReceptorValido AND !$FinalReceptorValido)
			{
				$Clave=ObtenerTextoEntreEtiquetas($xmlfile,'<Clave>','</Clave>');
				
				$Errores.="&#10148; Error: XML no válido. El documento Nº $Clave No contiene las etiquetas del Receptor<br>";
			}
			else if(!$InicioReceptorValido)
			{
				$Clave=ObtenerTextoEntreEtiquetas($xmlfile,'<Clave>','</Clave>');
				
				$Errores.="&#10148; Error: XML no válido. El documento Nº $Clave No contiene la etiqueta de apertura del Receptor<br>";
			}
			else if(!$FinalReceptorValido)
			{
				$Clave=ObtenerTextoEntreEtiquetas($xmlfile,'<Clave>','</Clave>');
				
				$Errores.="&#10148; Error: XML no válido. El documento Nº $Clave No contiene la etiqueta de cierre del Receptor<br>";
			}
        }

        	$FK_Usuario=$_SESSION['IDUsuario'];
		    $IDCompra=0;
		    
		    $TotalLineasFactura=0;
		    $TotalFacturasGuardadas=0;
        	
        	
			for($i=0; $i<count($_FILES['upload']['name']); $i++) 
        	{
        		$TotalFilasGuardadas=0;
        		
        		$xmlTemporal = $_FILES['upload']['tmp_name'][$i];
            
	            if(!empty($xmlTemporal))
	            {
					$xmlfile = file_get_contents($xmlTemporal);	
				}
				else
				{
					$Errores.="&#10148; El documento $xml que intenta guardar está vacío<br>";
				}
				
								
				$Clave=ObtenerTextoEntreEtiquetas($xmlfile,'<Clave>','</Clave>');
				$NumeroConsecutivo=ObtenerTextoEntreEtiquetas($xmlfile,'<NumeroConsecutivo>','</NumeroConsecutivo>');
				$TipoDocumento=substr($NumeroConsecutivo,8,2);
				$FechaEmision=ObtenerTextoEntreEtiquetas($xmlfile,'<FechaEmision>','</FechaEmision>');
				$FechaEmision=date('Y-m-d', strtotime(substr($FechaEmision,0,10)));
				
				//Emisor
				
				$BloqueEmisor= ObtenerTextoEntreEtiquetas($xmlfile,'<Emisor>','</Emisor>');
				
				$NombreEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Nombre>','</Nombre>');
				$TipoCedulaEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Tipo>','</Tipo>');
				$CedulaEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Numero>','</Numero>');
				$NombreComercialEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<NombreComercial>','</NombreComercial>');
				$ProvinciaEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Provincia>','</Provincia>');
				$CantonEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Canton>','</Canton>');
				$DistritoEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Distrito>','</Distrito>');
				$BarrioEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<Barrio>','</Barrio>');
				$DireccionEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<OtrasSenas>','</OtrasSenas>');
				$CodigoPaisEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<CodigoPais>','</CodigoPais>');
				$NumeroTelefonoEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<NumTelefono>','</NumTelefono>');
				$EmailEmisor=ObtenerTextoEntreEtiquetas($BloqueEmisor,'<CorreoElectronico>','</CorreoElectronico>');
				
				//Receptor
				
				$BloqueReceptor= ObtenerTextoEntreEtiquetas($xmlfile,'<Receptor>','</Receptor>');
				
				$NombreReceptor=ObtenerTextoEntreEtiquetas($BloqueReceptor,'<Nombre>','</Nombre>');
				$TipoCedulaReceptor=ObtenerTextoEntreEtiquetas($BloqueReceptor,'<Tipo>','</Tipo>');
				$CedulaReceptor=ObtenerTextoEntreEtiquetas($BloqueReceptor,'<Numero>','</Numero>');
				$CodigoPaisReceptor=ObtenerTextoEntreEtiquetas($BloqueReceptor,'<CodigoPais>','</CodigoPais>');
				$NumeroTelefonoReceptor=ObtenerTextoEntreEtiquetas($BloqueReceptor,'<NumTelefono>','</NumTelefono>');
				$EmailReceptor=ObtenerTextoEntreEtiquetas($BloqueReceptor,'<CorreoElectronico>','</CorreoElectronico>');
				
				//Otros Datos
				$CondicionVenta= ObtenerTextoEntreEtiquetas($xmlfile,'<CondicionVenta>','</CondicionVenta>');	
				$Plazo=(ObtenerTextoEntreEtiquetas($xmlfile,'<PlazoCredito>','</PlazoCredito>')=='')?0:ObtenerTextoEntreEtiquetas($xmlfile,'<PlazoCredito>','</PlazoCredito>');	
				
				$CodigoMoneda= ObtenerCodigoMoneda(ObtenerTextoEntreEtiquetas($xmlfile,'<CodigoMoneda>','</CodigoMoneda>'));
				$TipoCambio= ObtenerTextoEntreEtiquetas($xmlfile,'<TipoCambio>','</TipoCambio>');
				$TotalServGravados= (ObtenerTextoEntreEtiquetas($xmlfile,'<TotalServGravados>','</TotalServGravados>')=='')?0.00:ObtenerTextoEntreEtiquetas($xmlfile,'<TotalServGravados>','</TotalServGravados>');
				$TotalServExentos= (ObtenerTextoEntreEtiquetas($xmlfile,'<TotalServExentos>','</TotalServExentos>')=='')?0.00:ObtenerTextoEntreEtiquetas($xmlfile,'<TotalServExentos>','</TotalServExentos>');
				$TotalMercanciasGravadas= (ObtenerTextoEntreEtiquetas($xmlfile,'<TotalMercanciasGravadas>','</TotalMercanciasGravadas>')=='')?0.00:ObtenerTextoEntreEtiquetas($xmlfile,'<TotalMercanciasGravadas>','</TotalMercanciasGravadas>');
				$TotalMercanciasExentas= (ObtenerTextoEntreEtiquetas($xmlfile,'<TotalMercanciasExentas>','</TotalMercanciasExentas>')=='')?0.00:ObtenerTextoEntreEtiquetas($xmlfile,'<TotalMercanciasExentas>','</TotalMercanciasExentas>');
				$TotalGravado= (ObtenerTextoEntreEtiquetas($xmlfile,'<TotalGravado>','</TotalGravado>')=='')?0.00:ObtenerTextoEntreEtiquetas($xmlfile,'<TotalGravado>','</TotalGravado>');
				$TotalExento= (ObtenerTextoEntreEtiquetas($xmlfile,'<TotalExento>','</TotalExento>')=='')?0.00:ObtenerTextoEntreEtiquetas($xmlfile,'<TotalExento>','</TotalExento>');
				$TotalVenta= (ObtenerTextoEntreEtiquetas($xmlfile,'<TotalVenta>','</TotalVenta>')=='')?0.00:ObtenerTextoEntreEtiquetas($xmlfile,'<TotalVenta>','</TotalVenta>');
				$TotalDescuentos= (ObtenerTextoEntreEtiquetas($xmlfile,'<TotalDescuentos>','</TotalDescuentos>')=='')?0.00:ObtenerTextoEntreEtiquetas($xmlfile,'<TotalDescuentos>','</TotalDescuentos>');
				$TotalVentaNeta= (ObtenerTextoEntreEtiquetas($xmlfile,'<TotalVentaNeta>','</TotalVentaNeta>')=='')?0.00:ObtenerTextoEntreEtiquetas($xmlfile,'<TotalVentaNeta>','</TotalVentaNeta>');
				$TotalImpuesto= (ObtenerTextoEntreEtiquetas($xmlfile,'<TotalImpuesto>','</TotalImpuesto>')=='')?0.00:ObtenerTextoEntreEtiquetas($xmlfile,'<TotalImpuesto>','</TotalImpuesto>');
				$TotalComprobante= (ObtenerTextoEntreEtiquetas($xmlfile,'<TotalComprobante>','</TotalComprobante>')=='')?0.00:ObtenerTextoEntreEtiquetas($xmlfile,'<TotalComprobante>','</TotalComprobante>');
				
        		//si ya esta en la bd no lo guarde
				$sql = "SELECT ClaveHacienda FROM Compra WHERE FK_Usuario = $FK_Usuario AND ClaveHacienda= '$Clave'";
							
				$result = $Conexion->query($sql);

				if ($result->num_rows > 0)
				{}
				else if($CedulaReceptor!=$CedulaUsuario)
				{
					$Errores.="&#10148; Error: XML no válido. La cédula del receptor en el documento Nº $Clave no coincide con la cédula del Usuario.<br>";
				}
        		else
        		{
					//guardar
					$sql="INSERT INTO Compra 
						(
						FK_Usuario,
						FK_Cliente,
						Fecha,
						Status,
						ClaveLarga,/*Clave que se genera en el sistema*/
						Secuencia,/*Consecutivo que se genera en el sistema*/
						ClaveHacienda,/*Clave que ya tiene la factura*/
						NumeroConsecutivoHacienda,/*Consecutivo que ya tiene la factura*/
						TipoDocumento,
						NombreEmisor,
						NombreComercialEmisor,
						TipoEmisor,
						NombreReceptor,
						CedulaReceptor,
						TipoReceptor,
						CondicionVenta,
						Plazo,
						CodigoMoneda,
						TipoCambio,
						Mensaje,
						TotalServGravados,
						TotalServExentos,
						TotalMercanciasGravadas,
						TotalMercanciasExentas,
						TotalGravado,
						TotalExento,
						TotalVenta,
						TotalDescuentos,
						TotalVentaNeta,
						TotalImpuesto,
						TotalComprobante
						)
						VALUES
						(
						$FK_Usuario,
						'$CedulaEmisor',
						'$FechaEmision',
						'',
						'',
						'',
						'$Clave',
						'$NumeroConsecutivo',
						'$TipoDocumento',
						'$NombreEmisor',
						'$NombreComercialEmisor',
						'',
						'$NombreReceptor',
						'$CedulaReceptor',
						'',
						'$CondicionVenta',
						$Plazo,
						'$CodigoMoneda',
						$TipoCambio,
						'',
						$TotalServGravados,
						$TotalServExentos,
						$TotalMercanciasGravadas,
						$TotalMercanciasExentas,
						$TotalGravado,
						$TotalExento,
						$TotalVenta,
						$TotalDescuentos,
						$TotalVentaNeta,
						$TotalImpuesto,
						$TotalComprobante
						);";
						
						if($Conexion->query($sql) === TRUE) 
					    { 
					        //Guardar el Detalle de Factura

					        //Obtener IDFactura

					        $sql="SELECT max(IDCompra) as IDCompra FROM Compra where FK_Usuario=$FK_Usuario and FK_Cliente='$CedulaEmisor';";

					        $result=$Conexion->query($sql);

					        if($result->num_rows > 0)
					        {
					          $row = $result->fetch_assoc();
					          $IDCompra=$row["IDCompra"];
					        }								
							
							//Detalle
							$DetalleFactura=ObtenerTextoEntreEtiquetas($xmlfile,'<DetalleServicio>','</DetalleServicio>');
							
							//Lineas del Detalle
							
							$Lineas = explode("<LineaDetalle>", $DetalleFactura);
							
							$TotalLineasFactura=count($Lineas)-1;

							foreach($Lineas as $l=>$ldf){

							    if(!empty($ldf)){
							        
							        $line = explode( "</LineaDetalle>", $ldf)[0];
							        
							        $NumeroLinea = ObtenerTextoEntreEtiquetas($line,'<NumeroLinea>','</NumeroLinea>');
							        
							        $TipoCodigo = ObtenerTextoEntreEtiquetas($line,'<Tipo>','</Tipo>');
							        $Codigo = ObtenerTextoEntreEtiquetas($line,'</Tipo><Codigo>','</Codigo></Codigo>');
							        
							        $Cantidad= ObtenerTextoEntreEtiquetas($line,'<Cantidad>','</Cantidad>');
							        $UnidadMedida= ConvertirUnidades(ObtenerTextoEntreEtiquetas($line,'<UnidadMedida>','</UnidadMedida>'));
							        $Producto= ObtenerTextoEntreEtiquetas($line,'<Detalle>','</Detalle>');
							        $PrecioUnitarioSinIV= ObtenerTextoEntreEtiquetas($line,'<PrecioUnitario>','</PrecioUnitario>');
							        $MontoTotal= ObtenerTextoEntreEtiquetas($line,'<MontoTotal>','</MontoTotal>');//cant*preciounitario
							        $MontoDescuento= (ObtenerTextoEntreEtiquetas($line,'<MontoDescuento>','</MontoDescuento>')=='')?0.00:ObtenerTextoEntreEtiquetas($line,'<MontoDescuento>','</MontoDescuento>');
							        $NaturalezaDescuento= (ObtenerTextoEntreEtiquetas($line,'<NaturalezaDescuento>','</NaturalezaDescuento>')=='')?'':ObtenerTextoEntreEtiquetas($line,'<NaturalezaDescuento>','</NaturalezaDescuento>');
							        $SubTotal= ObtenerTextoEntreEtiquetas($line,'<SubTotal>','</SubTotal>');
							        
							        $ImpuestoCTM= ObtenerTextoEntreEtiquetas($line,'<Impuesto>','</Impuesto>');
							        $CodigoIV= (ObtenerTextoEntreEtiquetas($ImpuestoCTM,'<Codigo>','</Codigo>'))?:0.00;
							        $PorcentajeIV= (ObtenerTextoEntreEtiquetas($ImpuestoCTM,'<Tarifa>','</Tarifa>'))?:0.00;
							        $MontoIV= (ObtenerTextoEntreEtiquetas($ImpuestoCTM,'<Monto>','</Monto>'))?:0.00;
							        
							        $MontoTotalLinea= ObtenerTextoEntreEtiquetas($line,'<MontoTotalLinea>','</MontoTotalLinea>');
							        
							        $sql="INSERT INTO DetalleCompra
											(
											FK_Compra,
											NoLinea,
											TipoCodigo,
											CodigoProducto,
											NombreProducto,
											Cantidad,
											UnidadMedida,
											PrecioUnitarioSinIV,
											MontoTotal,
											MontoDescuento,
											NaturalezaDescuento,
											Subtotal,
											CodigoIV,
											PorcentajeIV,
											MontoIV,
											MontoTotalLinea
											)
											VALUES
											(
											$IDCompra,
											$NumeroLinea,
											'$TipoCodigo',
											''/*CodigoProducto queda en blanco*/,
											'$Producto',
											$Cantidad,
											'$UnidadMedida',
											$PrecioUnitarioSinIV,
											$MontoTotal,
											$MontoDescuento,
											'$NaturalezaDescuento',
											$SubTotal,
											'$CodigoIV',
											$PorcentajeIV,
											$MontoIV,
											$MontoTotalLinea
											);";
							        
							        if($Conexion->query($sql) === TRUE) 
					    			{
							        	$TotalFilasGuardadas++;
									}
							    }
							}
				 			
				 			if($TotalFilasGuardadas==$TotalLineasFactura)
				 			{
				 				$TotalFacturasGuardadas++;
							}
							else
							{
								$sql="delete from DetalleCompra where FK_Compra=$IDCompra;";

					            if($Conexion->query($sql) === TRUE) 
					              { 
					                //Borrar encabezado de factura luego del detalle
					                $sql="delete from Compra where IDCompra=$IDCompra;";

					                 if($Conexion->query($sql) === TRUE) 
					                {
					                  //Error al guardar la factura
										$Errores.="&#10148; Error: No se pudo guardar el documento No $Clave <br>";
										
					                }

					              }
							}
							
						}
						else
						{
							$Errores.="&#10148; Error: No se pudo guardar el documento Nº $Clave <br>";
						}	
				}		
			}
			
			if($TotalFacturasGuardadas==count($_FILES['upload']['name']))
			{
				$Errores.="Documentos guardados exitosamente<br>";
			}
			else if($TotalFacturasGuardadas>0)
			{
				$Errores.="<br>";
				$Errores.='<b style="color:red;">AVISO: LOS DOCUMENTOS QUE PRESENTARON PROBLEMAS NO SE GUARDARON. FAVOR REVISARLOS.<br>';
			}
			else
			{
				$Errores.="<br>";
				$Errores.='<b style="color:red;">AVISO: LOS DOCUMENTOS QUE PRESENTARON PROBLEMAS NO SE GUARDARON. FAVOR REVISARLOS.<br>';
			}			
			        
        echo "<script>";
		echo "$('#MSJ').html('".rtrim($Errores,'<br>')."');";
	    echo "$('#ModalMSJ').modal('show');";
		echo "</script>";
        
    }  
  
}



function ObtenerTextoEntreEtiquetas($XML,$inicio,$fin)
{
    $r = explode($inicio, $XML);
    if (isset($r[1])){
        $r = explode($fin, $r[1]);
        return $r[0];
    }
    return '';
}


function ValidarEtiquetas($XML,$Etiqueta)
{
	$EtiquetaValida=(strpos($XML, $Etiqueta)!==false)?true:false;

	return $EtiquetaValida;
}

function ObtenerCodigoMoneda($TipoMoneda)
{
	$CodMoneda='';
	
	if($TipoMoneda=='CRC')
	{
		$CodMoneda='C';
	}
	else if($TipoMoneda=='USD')
	{
		$CodMoneda='D';
	}
	else if($TipoMoneda=='EUR')
	{
		$CodMoneda='E';
	}
	
	return $CodMoneda;
}

function ConvertirUnidades($UnidadMedida)
{
	$UM='';

	switch ($UnidadMedida) 
	{
	    case "Unid":
	        $UM='Unidad';
	        break;
	    case "kg":
	        $UM='Kg';
	        break;
	    case "Oz":
	        $UM='oz';
	        break;
	    case "L":
	        $UM='l';
	        break;
	    case "Gal":
	        $UM='gal';
	        break;
	    case "m":
	        $UM='m';
	        break;
	    case "min":
	        $UM='min';
	        break;
	    case "h":
	        $UM='h';
	        break;
	    case "d":
	        $UM='d';
	        break;
	    case "mL":
	        $UM='ml';
	        break;
	    case "g":
	        $UM='g';
	        break;
	    case "t":
	        $UM='t';
	        break;
	    case "Sp":
	        $UM='sp';
	        break;
	    default:
	        $UM='';
	}
	
	return $UM;	
}

function FormatoTipoCedula($TipoCeduNum)
{
	$TipoCedulaLetra='';
	
	if($TipoCeduNum=='01')
	{
		$TipoCedulaLetra='F';
	}
	else if($TipoCeduNum=='02')
	{
		$TipoCedulaLetra='J';
	}
	else if($TipoCeduNum=='03')
	{
		$TipoCedulaLetra='D';
	}
	else if($TipoCeduNum=='04')
	{
		$TipoCedulaLetra='N';
	}
	
	return $TipoCedulaLetra;
}

?>

</html>  