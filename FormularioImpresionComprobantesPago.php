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
            		<label style="margin-left:10px; float: left;" for="NumDoc">
            		Para imprimir un comprobante, pulse dos veces sobre el comprobante a imprimir en la tabla de comprobantes.</label>
            	</div>
            
                <div class="col-md-12">
                <br>
                    <fieldset class="group-border" id="fsEncabezado" style="background-color:white; /*display: none;*/">
                        <legend id="Leyenda" align="center" class="group-border">Comprobantes de Pago</legend>
                        
                        		<div style="margin: auto; width: 100%;" class="row">
		                           <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
									  <thead>
											<tr>
												<th>Tipo Documento<i class="fa fa-sort"></i></th>
												<th>Nº Comprobante<i class="fa fa-sort"></i></th>
												<th>Cédula<i class="fa fa-sort"></i></th>
												<th>Cliente<i class="fa fa-sort"></i></th>
												<th>Fecha<i class="fa fa-sort"></i></th>
												<th>Monto<i class="fa fa-sort"></i></th>
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
												DISTINCT
												CASE R.TipoDocumento 
												    WHEN '2' THEN 'Recibo'
													WHEN '3' THEN 'Nota Debito'
												  	WHEN '4' THEN 'Nota Credito'
													END AS TipoDocumento,
												R.IDRecibo,
												R.FK_Cliente,
												C.Nombre,
												R.Fecha,
												(SELECT CAST(SUM(Monto) AS DECIMAL(14,2)) FROM ReciboAbono WHERE IDRecibo=R.IDRecibo) AS MontoRecibo
												FROM ReciboAbono R INNER JOIN Cliente C ON R.FK_Cliente=C.Cedula
												WHERE R.FK_Usuario=".$_SESSION['IDUsuario']."";
						                
						                                    
						                $result = $Conexion->query($sql);
						        ?>
						                <?php while($ri =  mysqli_fetch_array($result))
						                      {
						                      	$Fecha=DateTime::createFromFormat('Y-m-d H:i:s', $ri['Fecha'])->format('d-m-Y');
						                      	
						                      echo "<tr>";
						                        echo "<td>".$ri['TipoDocumento']."</td>";
						                        echo "<td>".$ri['IDRecibo']."</td>";
						                        echo "<td>".$ri['FK_Cliente']."</td>";
						                        echo "<td>".$ri['Nombre']."</td>";
						                        echo "<td>".$Fecha."</td>";
						                        echo "<td>".number_format($ri['MontoRecibo'],2)."</td>";
						                      echo "</tr>";
						                      }?>
										</tbody>
									  <tfoot>
									  </tfoot>
									</table> 

		                           
                        		</div>
                        </fieldset>
                        <br>
               
            </div>
        </div>
<footer class="page-footer">
  <?php include('PiePagina.php')?>

  <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script>

$(document).ready(function(){
  $.noConflict(true);
  $.fn.dataTable.ext.errMode = 'none';//quitar errores del datatable porque me muestra error de que no s epuede reinicializar la tabla del detalle
  //cambiar idioma de Tabla
	
	$('#dtBasicExample').DataTable({
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
				},					
			},
		});	
		
	$('.DataTables_length').addClass('bs-select');
	
	var table = $('#dtBasicExample').DataTable();
 
  
  /*$('#dtBasicExample tbody').on( 'dblclick', 'tbody td', function () {
        
        	var table = $('#dtBasicExample').DataTable();
			
			//Traer datos del estado de cuenta del cliente

    		var rowIndex = table.row( this ).index(); //get row index
		    
		    var NoRecibo=table.cell(rowIndex, 1).data();
		    var CedulaCliente=table.cell(rowIndex, 2).data();
		    var MontoTotalRecibo=table.cell(rowIndex, 5).data();
			
			$.ajax({
	                url: 'Logica/ReciboAbono.php',
	                type: 'post',
	                data: {
	                		NoRecibo:NoRecibo,
	                		CedulaCliente:CedulaCliente,
	                		MontoTotalRecibo:MontoTotalRecibo,
	                		ImprimirRecibo:'ImprimirRecibo',
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
							})
	                        
	                    }	                    
	                }
	            });

	            return false;
    } );*/
  
});
	
</script>

<script>
	
$('#dtBasicExample').on('dblclick', 'tbody td', function() 
{  
	var table = $('#dtBasicExample').DataTable();
				
	/*Traer datos del estado de cuenta del cliente*/
  	
    var rowIndex = table.cell(this).index().row;
    
	var NoRecibo=table.cell(rowIndex, 1).data();
	var CedulaCliente=table.cell(rowIndex, 2).data();
	var MontoTotalRecibo=table.cell(rowIndex, 5).data(); 
	
	//alert(NoRecibo+' '+CedulaCliente+' '+MontoTotalRecibo);
	    
	//ir a recibo abono para hacer los calculos
		
		$.ajax({
	          url: 'Logica/ReciboAbono.php',
	          type: 'post',
	          data: 
	          {
	            NoRecibo:NoRecibo,
	            CedulaCliente:CedulaCliente,
	            MontoTotalRecibo:MontoTotalRecibo,
	            ReimprimirRecibo:'ReimprimirRecibo'
	          },
	          dataType: 'json',
	          success:function(response){
	            
	              var len = response.length;

	              if(len > 0)
	              {	
						var IDRecibo = response[0]["IDRecibo"];
						var TipoDocumento = response[0]["TipoDocumento"];
						var CedulaCliente = response[0]["CedulaCliente"];
						var NombreCliente = response[0]["NombreCliente"];
						var Fecha = response[0]["Fecha"];
						var SaldoAnterior = response[0]["SaldoTotalAnterior"];
						var MontoRecibo = response[0]["MontoTotalRecibo"];
						var SaldoActual = response[0]["SaldoTotalActual"]; 
												
						var FacturasData = response[0]["Facturas"];
						
						
						FacturasData;
						
						$.post('Logica/PDF/PDF_Recibo.php', {
																IDRecibo:IDRecibo,
																TipoDocumento:TipoDocumento,
																CedulaCliente:CedulaCliente,
																NombreCliente:NombreCliente,
																Fecha:Fecha,
																SaldoAnterior:SaldoAnterior,
																MontoRecibo:MontoRecibo,
																SaldoActual:SaldoActual,
																Facturas:FacturasData,
																btnPDF:"btnPDF"}, 
																
						function(){
									location.reload();
									window.open('Logica/PDF/PDF_Recibo.php');
								  });
				  }              
			}
	      });

	      return false;
})
	
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