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


	    <!--Librerias para el modal -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	   <!-- JavaScripts para autocomplete -->

  <script src="js/jquery-migrate-1.2.1.min.js"></script>
	
	<link href='jquery-ui.min.css' type='text/css' rel='stylesheet' >

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
            <br>
            	<div>
            		<label style="margin-left:10px; float: left;" for="NumDoc">Para ver el estado de cuenta de un cliente, pulse sobre el cliente a consultar en la tabla de clientes. El estado de cuenta aparecerá en la tabla inferior de la página.</label>
            	</div>
            
                <div class="col-md-12">
                <br>
                    <fieldset class="group-border" id="fsEncabezado" style="background-color:white; /*display: none;*/">
                        <legend id="Leyenda" align="center" class="group-border">Estados de Cuenta por Clientes</legend>
                        
                        		<div style="margin: auto; width: 100%;" class="row">
		                           <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
									  <thead>
											<tr>
												<th>Cédula<i class="fa fa-sort"></i></th>
												<th>Nombre del Cliente<i class="fa fa-sort"></i></th>
												<th>Nº Teléfono<i class="fa fa-sort"></i></th>
												<th>Saldo Actual<i class="fa fa-sort"></i></th>
											</tr>
										</thead>
										<tbody>
											<?php
						                $Conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

						                if ($Conexion->connect_error) 
						                {
						                    die("Connection failed: " . $Conexion->connect_error);
						                } 
						                
						                $sql="SELECT 
											  Cedula,Nombre,Telefono,
											  (SELECT IFNULL((SUM(Saldo)),0.00) 
											  FROM Factura
		                       				  WHERE FK_Usuario=".$_SESSION['IDUsuario']." AND FK_Cliente=Cedula 
		                       				  					 AND CondicionVenta='02' 
		                       				  					 AND Saldo!=0.00) AS SaldoActual
											  FROM Cliente 
  											  WHERE FK_Usuario=".$_SESSION['IDUsuario']." AND Cedula NOT IN('000000000');";
						                                    
						                $result = $Conexion->query($sql);
						        ?>
						                <?php while($ri =  mysqli_fetch_array($result))
						                      {
						                      echo "<tr>";
						                        echo "<td>".$ri['Cedula']."</td>";
						                        echo "<td>".$ri['Nombre']."</td>";
						                        echo "<td>".$ri['Telefono']."</td>";
						                        echo "<td>".number_format($ri['SaldoActual'],2)."</td>";
						                      echo "</tr>";
						                      }?>
										</tbody>
									  <tfoot>
									  </tfoot>
									</table> 

		                           
                        		</div>
                        </fieldset>
                        <br>
                        
                        <fieldset class="group-border" id="fsEncabezado" style="background-color:white; /*display: none;*/">
                        <legend id="Leyenda" align="center" class="group-border">Detalle del Estado de Cuenta</legend>
                        
                        		<div style="margin: auto; width: 100%;" class="row">
		                           <table id="dtDetalleEstadoCuenta" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
									  <thead>
											<tr>
												<th>Tipo Doc.<i class="fa fa-sort"></i></th>
												<th>Nº Factura Electrónica<i class="fa fa-sort"></i></th>
												<th>Rec Deb Cre<i class="fa fa-sort"></i></th>
												<th>Fecha<i class="fa fa-sort"></i></th>
												<th>Vence<i class="fa fa-sort"></i></th>
												<th>Monto<i class="fa fa-sort"></i></th>
												<th>Saldo Actual Factura<i class="fa fa-sort"></i></th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									  <tfoot>
									  </tfoot>
									</table> 

		                           
                        		</div>
                        </fieldset>
                        <br>

                        <div class="modal fade" id="ModalMSJ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Recibos de Abonos</h4>
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
                  					<div id="ModalAbono" class="modal fade" role="dialog">
						<div class="modal-dialog"style="width: 230px;">
							<div class="modal-content">
								<div class="modal-header">
									<a class="close" data-dismiss="modal">×</a>
								</div>
									<div class="modal-body">				
										<div class="form-group">
											<label id="lblModalAbono" for="name">Monto Abono</label>
											<input style="width: 200px" type="text" maxlength="16" id="MontoAbono" name="name" class="form-control">
										</div>	
											<button type="button" onclick="AplicarAbono()" class="btn btn-success float-right">Aplicar</button>
											<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cerrar</button>
											
									</div>
									<div class="modal-footer">					
										<div id="ErrorModalAbono" style="display: none">
											<h5 style="color:red;">Error:El monto ingresado es mayor al saldo de la factura</h5>
										</div>
										<div id="ErrorNULLModalAbono" style="display: none">
											<h5 style="color:red;">Error:El monto no puede ser 0 o estar en blanco</h5>
										</div>
									</div>
							</div>
						</div>
</div>

<div id="ModalCancelacionAutomatica" class="modal fade" role="dialog">
						<div class="modal-dialog"style="width: 230px;">
							<div class="modal-content">
								<div class="modal-header">
									<a class="close" data-dismiss="modal">×</a>
								</div>
									<div class="modal-body">				
										<div class="form-group">
											<label id="lblModalCA" for="name">Monto Abono</label>
											<input style="width: 200px" type="text" maxlength="16" id="MontoAbonoCancAut" name="name" class="form-control">
										</div>	
											<button type="button" onclick="AplicarCancelacionAutomatica()" class="btn btn-success float-right">Aplicar</button>
											<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cerrar</button>
											
									</div>
									<div class="modal-footer">					
										<div id="ErrorModalCancAut" style="display: none">
											<h5 style="color:red;">Error:El monto ingresado es mayor al saldo del cliente</h5>
										</div>
										<div id="ErrorNULLModalCancAut" style="display: none">
											<h5 style="color:red;">Error:El monto no puede ser 0 o estar en blanco</h5>
										</div>
									</div>
							</div>
						</div>
</div> 
               
            </div>
        </div>
<footer class="page-footer">
  <?php include('PiePagina.php')?>
    
    
    <script>

$('#ModalMSJ').on('hide.bs.modal', function () 
{   
    var GuarMod = sessionStorage.getItem("GuarMod");
    
    sessionStorage.clear();	
	
	if(GuarMod =='Guardo')
	{	
		location.reload();	
	}
    
    //window.open('ModalP.php', '_self');
    //location.reload(); 
});
	
</script> 

  <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script>

$(document).ready(function(){
  $.noConflict(true);
  //$.fn.dataTable.ext.errMode = 'none';//quitar errores del datatable porque me muestra error de que no s epuede reinicializar la tabla del detalle
  //cambiar idioma de Tabla
	
	$('table').DataTable({
			"bDestroy": true,//destrir la tabla para poder reinicializarla de nuevo
			"pageLength": 5,
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
				}					
			},
			"fnDrawCallback": function( oSettings ) {
    
                if(oSettings.sTableId=='dtBasicExample')
                {
                  var Clientes = $('#dtBasicExample').DataTable();
 
					Clientes 
					    .rows( '.selected' )
					    .nodes()
					    .to$() 
					    .removeClass( 'selected' );
		            
		            var Documentos = $('#dtDetalleEstadoCuenta').DataTable();
		 
					Documentos.clear();
					Documentos.draw();
                }
             },
             "columnDefs": [{targets: 0,
		                    render: function ( data, type, row ) {
		                      var color = 'black';
		                      if (data == 'Factura') {
		                        color = 'green';
		                      } 
		                      if (data=='Recibo') {
		                        color = 'blue';
		                      }
		                      if (data=='Nota Debito') {
		                        color = '#8B0000';
		                      }
		                      if (data=='Nota Credito') {
		                        color = 'purple';
		                      }
		                      return '<span style="color:' + color + '">' + data + '</span>';
		                    }
		               }]
		});
		
		
	$('.DataTables_length').addClass('bs-select');
	
	var table = $('#dtBasicExample').DataTable();
 
  
  $('#dtBasicExample tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            
            var Documentos = $('#dtDetalleEstadoCuenta').DataTable();
 
			Documentos.clear();
			Documentos.draw();
        }
        else 
        {
        	var table = $('#dtBasicExample').DataTable();
        	
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            
            var Documentos = $('#dtDetalleEstadoCuenta').DataTable();
 
			Documentos.clear();
			Documentos.draw();
			
			/*Traer datos del estado de cuenta del cliente*/

    		var rowIndex = table.row( this ).index(); //get row index
		    
		    var CedulaCliente=table.cell(rowIndex, 0).data();
			
			$.ajax({
	                url: 'Logica/ReciboAbono.php',
	                type: 'post',
	                data: {
	                		CedulaCliente:CedulaCliente,
	                		ConsultarEstadoCuentaCliente:'ConsultarEstadoCuentaCliente',
	                	  },
	                dataType: 'json',
	                success:function(response){
	                    
	                    var len = response.length;

	                    if(len > 0){	      
	                    
	                    	var Documentos=response[0]["Documentos"];                  
	                        
	                        var t = $('#dtDetalleEstadoCuenta').DataTable();


	                        //agregar filas a datatable
	                        
	                        Documentos.forEach((subArr)=>
	                        {
	                        	t.row.add( [
									        	 subArr['TipoDocumento'],	
									        	 subArr['NoDoc'],		
					                             subArr['IDRecibo'],		
					                             subArr['Fecha'],		
					                             subArr['Vence'],		
					                             subArr['Monto'],	
					                             subArr['Saldo'],
									        ] ).draw( false );	
							});
	                        
	                    }	                    
	                }
	            });

	            return false;
        }
    } );
  
});
	
</script>

<script>


</script>

<script type="text/javascript">

window.onload = function() 
{ 

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
    
<script>

</script>

</footer>
</html>