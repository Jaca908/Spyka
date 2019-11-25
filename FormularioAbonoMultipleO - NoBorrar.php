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
                <div class="col-md-12">
                    <fieldset class="group-border" id="fsEncabezado" style="background-color:white; /*display: none;*/">
                        <legend id="Leyenda" class="group-border">Abonos Múltiples</legend>
                        
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Nº Recibo:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="NoRecibo" name="txtNoRecibo" readonly="true" required>
                            </div>
                            
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Fecha de Emisión </label>
                            </div>
                            <div class="col-lg-2">
                                    <input class="form-control input-sm" readonly id="Fecha" name="txtFecha" placeholder="Fecha de Emisión" 
									value="<?php 
												date_default_timezone_set("America/Costa_Rica");
												$date = date('d-m-Y H:i:s');
												echo $date;
											?>" type="text">
                            </div>
                          </div>
                          <br> 
                          <div style="margin: auto; width: 100%;" class="row"> 
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Cédula Cliente<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" id="Cedula" name="txtCedula" required>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Nombre<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" readonly="true" class="form-control input-sm" id="Nombre" Maxlength=43 name="txtNombre" required>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Saldo Actual:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" readonly="true" class="form-control input-sm" id="SaldoActual" name="txtSaldoActual" required>
                            </div>
                        </div>
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                            
                        </div>
                        <br>
                        
                        		<div style="margin: auto; width: 100%;" class="row">
		                           <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
									  <thead>
											<tr>
												<th>Tipo Doc.<i class="fa fa-sort"></i></th>
												<th>IDFactura<i class="fa fa-sort"></i></th>
												<th>Nº Factura Electrónica<i class="fa fa-sort"></i></th>
												<th>Fecha<i class="fa fa-sort"></i></th>
												<th>Plazo<i class="fa fa-sort"></i></th>
												<th>Vence<i class="fa fa-sort"></i></th>
												<th>Monto<i class="fa fa-sort"></i></th>
												<th>Abono<i class="fa fa-sort"></i></th>
												<th>Saldo Factura Actual<i class="fa fa-sort"></i></th>
												<!--<th>Acciones<i class="fa fa-sort"></i></th>-->
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									  <tfoot>
									  </tfoot>
									</table> 
		                           
                        		</div>
                        <br>
                        
                        <!-- Para hacer los campos de calculos de factura -->
						
							
							<div class="row" style="margin-right:5px;">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Total Vencido</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="TotalesVencidos" name="txtTotalVencido" type="text" value="" readonly>
								      </div>
								</div>
							</div>

							<div class="row" style="margin-right:5px;">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Total Sin Vencer</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="TotalesSinVencer" name="txtTotalSinVencer" type="text" value="" readonly>
								      </div>
								</div>
							</div>

							<br>

							<div class="row" style="margin-right:5px;">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Saldo Anterior</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="SaldosAnteriores" name="txtSaldoAnterior" type="text" value="" readonly>
								      </div>
								</div>
							</div>

							<div class="row" style="margin-right:5px;">
							<!--<label style="margin-left:10px; float: left;" for="NumDoc">Total a Abonar</label>-->
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Total a Abonar</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="TotalesAAbonar" name="txtTotalAAbonar" type="text" value="" readonly>
								      </div>
								</div>
							</div>


							<div class="row" style="margin-right:5px;">
								<div class="pull-right">
								      <div class="form-inline" >
								        <label class="control-label" for="NumDoc">Saldo Actual</label>
								        <input class="form-control input-sm" style="font-size:15px;" id="SaldosActuales" name="txtSaldoActual" type="text" value="" readonly>
								      </div>
								</div>
							</div>
                        
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                        	<button type="button" onclick="CancelacionAutomatica()" style='margin-right:72px' class="btn btn-lg btn-primary pull-left">Cancelación<br>Automática</button>
                            
                            <button type="button" onclick="GrabarRecibo()" id="AplicarPagos" style='margin-right:5px' class="btn btn-lg btn-warning pull-left">Aplicar<br>Pagos</button>
                        </div>
                        <br> 
                        <div class="col-sm-12 form-group" align="left">

                            </div>

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
											<label for="name">Monto a abonar</label>
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
											<label for="name">Monto a abonar</label>
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
               
                    </fieldset>
            </div>
        </div>
<footer class="page-footer">
  <?php include('PiePagina.php')?>
</footer>

  <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>


<script>

$(document).ready(function(){
  $.noConflict(true)
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
			},
			"columnDefs": [//ocultar columna DataTable
	            {
	                "targets": [ 1 ],
	                "visible": false,
	                "searchable": false
	            }
            ]
		});
	
	/*	
	$('.DataTables_length').addClass('bs-select');
	
	var table = $('#dtBasicExample').DataTable();
 
  
  $('#dtBasicExample tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
  */
});
	
</script>

<script>
	
$('#dtBasicExample').on('click', 'tbody td', function() {

/*var table = $('#dtBasicExample').DataTable();

    var colIndex = table.cell(this).index().column - 1; //get previous column index
    var rowIndex = table.cell(this).index().row; //get row index

    // Use data() instead of textContent and cell instead of cells
    var text = table.cell(rowIndex, colIndex).data(); 

    alert(text);*/


/*
  var table = $('#dtBasicExample').DataTable();
  
  alert('TD cell textContent : '+ this.textContent);
  
  if(table.cell(this).index().column==8)
  {
  	var colIndex = table.cell(this).index().column-1;
    var rowIndex = table.cell(this).index().row;
  	
  	var montoabononuevo=table.cells(rowIndex, colIndex).textContent;
  	
  	alert(montoabononuevo);
  }
  
  
  //get textContent of the TD
  //alert('TD cell textContent : '+ this.textContent);
  
  document.getElementById('MontoAbono').value=this.textContent;
  
  //$("#ModalAbono").modal("show");
  
  //alert('Clicked on cell in visible column: '+table.cell( this ).index().columnVisible);
  //alert('Clicked on row in visible column: '+table.cell( this ).index().row);
  
  //table.cell(this).data("new");
  
  /*var montoabononuevo=this.textContent;
  
    var colIndex = table.cell(this).index().column-1;
    var rowIndex = table.cell(this).index().row;
    table.cell(rowIndex, colIndex).data(montoabononuevo)*/


  //get the value of the TD using the API 
  //alert('value by API : '+ table.cell({ row: this.parentNode.rowIndex, column : this.cellIndex }).data());
})

</script>


<script>
	
$('#dtBasicExample').on('dblclick', 'tbody td', function() {

  var table = $('#dtBasicExample').DataTable();
  
  if(table.cell(this).index().column==8)//aplicar abono a toda la fatura
  {
  	var MontoAAbonar=this.textContent;
  	
  	var colIndex = table.cell(this).index().column-1;
    var rowIndex = table.cell(this).index().row;
    
    var MontoAbono=table.cell(rowIndex, colIndex).data();
    
    if(MontoAbono=='0.00')
    {
    	sessionStorage.setItem("SaldoFactura",this.textContent);
	  	sessionStorage.setItem("ColumnaAbono",colIndex);
	  	sessionStorage.setItem("FilaAbono",rowIndex);
	  	
	  	document.getElementById('MontoAbono').value=MontoAAbonar;
  
    	$("#ModalAbono").modal("show");
		
	}
	else
	{
		$("#MSJ").html("Error: ya existe un monto de abono para esa factura. Si desea cambiar el monto, elimine el monto actual e inténtelo nuevamente.");
        $("#ModalMSJ").modal("show");
	}
  	
  }
  else if(table.cell(this).index().column==7)//quitar abono de la fatura
  {
  	var colIndex = table.cell(this).index().column;
    var rowIndex = table.cell(this).index().row;
  	
  	sessionStorage.setItem("ColumnaAbono",colIndex);
  	sessionStorage.setItem("FilaAbono",rowIndex);
  	
  	var MontoAbono=this.textContent;
	var TotalFinalAbono=document.getElementById('TotalesAAbonar').value;
	var SaldoActual=document.getElementById('SaldosActuales').value;
	var Accion='BorrarAbono';//individual/BorrarAbono/AbonoAutomaticoMultiple
	
	CalcularAbono(MontoAbono,TotalFinalAbono,SaldoActual,Accion);
  }
})

</script>

<script>
function CancelacionAutomatica()
{
	var table = $('#dtBasicExample').DataTable();
	
	table.rows().every(function(){
		
		var Fila=this.data();
		
		
		if(Fila[7]!='0.00')
		{
			var colIndex = 7;
    		var rowIndex = table.row( this ).index();
    		
    		table.cell(rowIndex, colIndex).data('0.00');
    		
    		document.getElementById('TotalesAAbonar').value = '0.00';
            document.getElementById('SaldosActuales').value = document.getElementById('SaldoActual').value;
		}
	});
	
	$("#ModalCancelacionAutomatica").modal("show");	
}	
</script>

<script>
	function allEqual(input) {
    return input.split('').every(char => char === input[0]);
	}
</script>

<script>
function AplicarCancelacionAutomatica()
{
	$('#ErrorModalCancAut').hide();
	$('#ErrorNULLModalCancAut').hide();
	
	var table = $('#dtBasicExample').DataTable();
	
	var MontoAbonoCancAut = document.getElementById("MontoAbonoCancAut").value.replace(/,/g, '');
	var SaldoCliente = document.getElementById('SaldoActual').value.replace(/,/g, '');
	
	var CantidadIngresadaSinPunto=MontoAbonoCancAut.replace('.','');
	
	if(parseFloat(SaldoCliente)<parseFloat(MontoAbonoCancAut))
	{
		$('#ErrorModalCancAut').show();
	}
	else if(MontoAbonoCancAut=='0.00' || MontoAbonoCancAut=='' || CantidadIngresadaSinPunto==""||MontoAbonoCancAut=="" ||MontoAbonoCancAut=='.' || CantidadIngresadaSinPunto=="NaN"||MontoAbonoCancAut=="NaN" ||MontoAbonoCancAut=='NaN' ||((allEqual(CantidadIngresadaSinPunto)) && CantidadIngresadaSinPunto.indexOf('0') > -1) )
	{
		$('#ErrorNULLModalCancAut').show();
	}
	else
	{
		$('#ModalCancelacionAutomatica').modal('toggle');
		
		var TotalFinalAbono=document.getElementById('TotalesAAbonar').value;
		var TotalSaldoActual=document.getElementById('SaldosActuales').value;
		var Accion='AbonoAutomaticoMultiple';
		
		var FacturasData = new Array();
	
		table.rows().every(function(){
			
		var Fila=this.data();
		
		FacturasData[table.row(this).index()]={
									             "TipoDoc" : Fila[0]	
									            ,"IDFactura" : Fila[1]
									            , "NoFacturaElect" : Fila[2]
									            , "Fecha" : Fila[3]
									            , "Plazo" : Fila[4]
									            , "Vence" : Fila[5]
									            , "Monto" : Fila[6]
									            , "Abono" : Fila[7]
									            , "SaldoActual" : Fila[8]
									           }
		});
		
		//ir a recibo abono para hacer los calculos
		
		$.ajax({
              url: 'Logica/ReciboAbono.php',
              type: 'post',
              data: 
              {
                MontoAbonoCancAut:MontoAbonoCancAut,
                TotalFinalAbono:TotalFinalAbono,
                TotalSaldoActual:TotalSaldoActual,
                Accion:Accion,
                FacturasData:FacturasData,
                btnAbonarMultiplesFacturas:'btnAbonarMultiplesFacturas'
              },
              dataType: 'json',
              success:function(response){
                
                  var len = response.length;

                  if(len > 0)
                  {	
                  	var FacturasAbonadas= response[0]['FacturasAbonadas'];
                  
                  
                  	var t = $('#dtBasicExample').DataTable();
                    //var counter = 1;
                  	
                  	t.clear();
    				t.draw();
                  
                  	FacturasAbonadas.forEach((subArr)=>
					                                    {
					                                    	t.row.add( [
																        	 subArr['TipoDoc'],	
																        	 subArr['IDFactura'],	
												                             subArr['NoFacturaElect'],	
												                             subArr['Fecha'],	
												                             subArr['Plazo'],	
												                             subArr['Vence'],	
												                             subArr['Monto'],	
												                             subArr['Abono'],	
												                             subArr['SaldoActual'],
																        ] ).draw( false );
																 
																        //counter++;	
														})
                  					
					document.getElementById('TotalesAAbonar').value=response[0]['TotalFinalAbono'];
					document.getElementById('SaldosActuales').value=response[0]['TotalSaldoActual'];	
				}              
			}
          });

          return false;
		
		$('#ErrorModalCancAut').hide();
		$('#ErrorNULLModalCancAut').hide();
	}
	
}
</script>

<script>
	
function AplicarAbono()
{
	$('#ErrorModalAbono').hide();
	$('#ErrorNULLModalAbono').hide();
	
	var MontoAbono=document.getElementById('MontoAbono').value.replace(/,/g, '');
	var SaldoFactura=sessionStorage.getItem("SaldoFactura").replace(/,/g, '');
	
	var CantidadIngresadaSinPunto=MontoAbono.replace('.','');
	
	if(parseFloat(SaldoFactura)<parseFloat(MontoAbono))
	{
		$('#ErrorModalAbono').show();
	}
	else if(MontoAbono=='0.00' || MontoAbono=='' || CantidadIngresadaSinPunto==""||MontoAbono=='.' || CantidadIngresadaSinPunto=="NaN"||MontoAbono=="NaN" ||MontoAbono=='NaN' ||((allEqual(CantidadIngresadaSinPunto)) && CantidadIngresadaSinPunto.indexOf('0') > -1) )
	{
		$('#ErrorNULLModalAbono').show();
	}
	else
	{
		$('#ModalAbono').modal('toggle');
		
		var TotalFinalAbono=document.getElementById('TotalesAAbonar').value;
		var SaldoActual=document.getElementById('SaldosActuales').value;
		var Accion='AbonoIndividual';//individual/BorrarAbono/AbonoAutomaticoMultiple
	
		CalcularAbono(MontoAbono,TotalFinalAbono,SaldoActual,Accion);
		
		$('#ErrorModalAbono').hide();
		$('#ErrorNULLModalAbono').hide();
	}
}
	
</script>

<script>
	
	function CalcularAbono(MontoAbono,TotalFinalAbono,TotalSaldoActual,Accion)
	{		
		$.ajax({
              url: 'Logica/ReciboAbono.php',
              type: 'post',
              data: 
              {
                MontoAbono:MontoAbono,
                TotalFinalAbono:TotalFinalAbono,
                TotalSaldoActual:TotalSaldoActual,
                Accion:Accion,
                btnAbonar:'btnAbonar'
              },
              dataType: 'json',
              success:function(response){
                
                  var len = response.length;

                  if(len > 0){
                  	
															
					document.getElementById('TotalesAAbonar').value=response[0]['TotalFinalAbono'];
					document.getElementById('SaldosActuales').value=response[0]['TotalSaldoActual'];
                  	
                  	
                  	var table = $('#dtBasicExample').DataTable();
	
					var ColumnaIndx=sessionStorage.getItem("ColumnaAbono");
				  	var FilaIndx=sessionStorage.getItem("FilaAbono");
					
					sessionStorage.clear();
					
					table.cell(FilaIndx, ColumnaIndx).data(response[0]['MontoAbono']);	
				}              
			}
          });

          return false;
	}
	
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
    else if(document.getElementById('Telefono').value.length<document.getElementById('Telefono').maxLength)
    {
        $("#MSJ").html("El teléfono debe ser de "+document.getElementById('Telefono').maxLength+" dígitos");
        $("#ModalMSJ").modal("show");
    }
    else
    {
    	var TipoCedula= document.getElementById('TipoCedula').value;
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
        
        var EnviarDatos="&cbmTipoCedula="+TipoCedula+"&GuardarModificar="+GuardarModificar+"&btnEnviarCliente="+btnEnvCliente;
        
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


<script>
/*
$('#ModalMSJ').on('hide.bs.modal', function () { 
		
var GuarMod = sessionStorage.getItem("GuarMod");

sessionStorage.clear();	
	
if(GuarMod =='Guardo')
{	
	location.reload();	
}

});	*/
	
$('#ModalMSJ').on('hide.bs.modal', function () 
{   
    window.open('FormularioAbonoMultiple.php', '_self');
});	
</script>

<script>
	
	document.onmousewheel = function(){ stopWheel(); } /* IE7, IE8 */
if(document.addEventListener){ /* Chrome, Safari, Firefox */
    document.addEventListener('DOMMouseScroll', stopWheel, false);
}
 
function stopWheel(e){
    if(!e){ e = window.event; } /* IE7, IE8, Chrome, Safari */
    if(e.preventDefault) { e.preventDefault(); } /* Chrome, Safari, Firefox */
    e.returnValue = false; /* IE7, IE8 */
}
	
</script>

<script type="text/javascript">

/*Cargar datos al abrir la pagina para consultar cuando se pulse el boton de ver*/
window.onload = function() { 

        $.ajax({
              url: 'Logica/ReciboAbono.php',
              type: 'post',
              data: 
              {
                ObtenerNoRecibo:'ObtenerNoRecibo'
              },
              dataType: 'json',
              success:function(response){
                
                  var len = response.length;

                  if(len > 0){
                    document.getElementById('NoRecibo').value = response[0]['NoRecibo'];
				}              
			}
          });

          return false;
}
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
  
  //Moneda con dos decimales)
setInputFilter(document.getElementById("MontoAbono"), function(value) {
  return /^\d*[.]?\d{0,2}$/.test(value); });
  
setInputFilter(document.getElementById("MontoAbonoCancAut"), function(value) {
  return /^\d*[.]?\d{0,2}$/.test(value); });

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

        /*Buscar cliente por cedula*/
        $(document).ready(function(){

			     $(document).on('keydown', '#Cedula', function(e) {
                
                var code = e.keyCode || e.which;
                
			    if (code != '9') {
					document.getElementById('Nombre').value = "";
					
					var FacturasCredito = $('#dtBasicExample').DataTable();
 
					FacturasCredito.clear();
    				FacturasCredito.draw();
				}

            /*Validar nomeros de cedula*/

                $( '#Cedula' ).autocomplete({
                    source: function( request, response ) {
                        $.ajax({
                            url: "Logica/ObtenerDatosClienteRecibo.php",
                            type: 'post',
                            dataType: "json",
                            data: {
                                search: request.term,request:1
                            },
                            success: function( data ) {
                                response( data );
                                
                                document.getElementById('Nombre').value = '';
                                document.getElementById('SaldoActual').value = '';
                                document.getElementById('TotalesVencidos').value = '';
                                document.getElementById('TotalesSinVencer').value = '';
                                document.getElementById('SaldosActuales').value = '';
                                document.getElementById('SaldosAnteriores').value = '';
                                document.getElementById('TotalesAAbonar').value = '';
                            }
                        });
                    },
                    select: function (event, ui) {
                        $(this).val(ui.item.label); // display the selected text
                        var idc = ui.item.value; // selected id to input

                        // AJAX
                        $.ajax({
                            url: 'Logica/ObtenerDatosClienteRecibo.php',
                            type: 'post',
                            data: {IDc:idc,request:2},
                            dataType: 'json',
                            success:function(response){
                                
                                var len = response.length;

                                if(len > 0){
                                    var Cedula = response[0]['Cedula'];
                                    var Nombre = response[0]['Nombre'];
                                    var SaldoActual = response[0]['SaldoActual'];
                                    var FacturasCredito= response[0]['FacturasCredito'];
                                    var TotalesVencidos= response[0]['SaldoVencido'];
                                    var TotalesSinVencer= response[0]['SaldoSinVencer'];
                                    var SaldoAnterior= response[0]['SaldoAnterior'];

                                    document.getElementById('Cedula').value = Cedula;
                                    document.getElementById('Nombre').value = Nombre;
                                    document.getElementById('SaldoActual').value = SaldoActual;
                                    document.getElementById('TotalesVencidos').value = TotalesVencidos;
                                    document.getElementById('TotalesSinVencer').value = TotalesSinVencer;
                                    document.getElementById('SaldosActuales').value = SaldoActual;
                                    document.getElementById('SaldosAnteriores').value = SaldoAnterior;
                                    document.getElementById('TotalesAAbonar').value = '0.00';
                                    
                                    
                                    //$("#dtBasicExample").find('tbody').empty(); //add this line to hide no result data
                                    var t = $('#dtBasicExample').DataTable();


                                    //agregar filas a datatable
                                    
                                    FacturasCredito.forEach((subArr)=>
                                    {
                                    	t.row.add( [
											        	 subArr['TipoDocumento'],	
											        	 subArr['IDFactura'],	
							                             subArr['NoFactura'],	
							                             subArr['Fecha'],	
							                             subArr['Plazo'],	
							                             subArr['Vence'],	
							                             subArr['TotalFactura'],	
							                             subArr['Abono'],	
							                             subArr['Saldo'],
											        ] ).draw( false );	
									})
                                    
                                }
                                else
                                {
									
                                    document.getElementById('Nombre').value = '';
                                    document.getElementById('SaldoActual').value = '';
                                    document.getElementById('TotalesVencidos').value = '';
                                    document.getElementById('TotalesSinVencer').value = '';
                                    document.getElementById('SaldosActuales').value = '';
                                    document.getElementById('SaldosAnteriores').value = '';
                                    document.getElementById('TotalesAAbonar').value = '';
								}
                                
                            }
                        });

                        return false;
                    }
                });
            });
		});
    </script>

</body>
</html>