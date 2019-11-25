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

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


	    <!--Librerias para el modal -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
                    <fieldset class="group-border" style="background-color:white; /*display: none;*/">
                        <legend id="Leyenda" class="group-border">Reportes de Compra</legend>
                        <form role="form" id="frmReporteVentas">
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-2">
                                <label class="control-label" for="Name">Rango de Fechas<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-2">
                                	<input required="true" class="form-control input-sm" type="text" id="RangoFechas" value="" readonly="true" />	
                            </div>
                            <div class="col-lg-1">
                                		
                            </div>
                            <fieldset class="group-border" id="fsEncabezado" style="background-color:white;">
                        	<legend id="Leyenda" class="group-border">Emisor</legend>
	                            <div class="col-lg-2">
	                                <label class="control-label" for="Name">Cédula</label>
	                            </div>
	                        	<div class="col-lg-3">
	                                    <input class="form-control input-sm" id="Cedula" name="txtCedula" placeholder="Cédula" maxlength="12" value="" type="text">
	                            </div>
	                            <div class="col-lg-2">
	                                <label class="control-label" for="Name">Nombre</label>
	                            </div>
	                            <div class="col-lg-5">
                                <input class="form-control input-sm" readonly id="Nombre" name="txtNombreCliente" placeholder="Nombre del Cliente" value="" type="text">
                            </div>
	                        </fieldset>
                            
                        </div>
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Documento<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-2">
                                  <input type="checkbox" name="rbFactura" id="rbFactura" value="Factura">Factura<br>
								  <!--<input type="checkbox" name="rbTiquete" id="rbTiquete" value="Tiquete"> Tiquete<br>-->
								  <input type="checkbox" name="rbNotaCredito" id="rbNotaCredito" value="NotaCredito"> Nota Credito<br>  
								  <input type="checkbox" name="rbNotaDebito" id="rbNotaDebito" value="NotaDebito"> Nota Debito<br>

                            </div>
                            
                        </div>
                        <br>
                        <div style="margin: auto; width: 100%;" class="row">
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Estado<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                                  <input type="radio" required="true" id="rbEstado" name="rbEstado" value="Todo"> Todo<br>
								  <input type="radio" required="true" id="rbEstado" name="rbEstado" value="SoloAceptado"> Solo Aceptado<br>
								  <input type="radio" required="true" id="rbEstado" name="rbEstado" value="SoloNoAceptado"> Solo No Aceptado<br> 
                            </div>
                            <div class="col-lg-2">
                                <label class="control-label" for="Name"><span style="font-size: 150%;  color: red;">*</span>Campos Obligatorios</label>
                            </div>                            
                        </div>
                        <br>

                        <div style="margin: auto; width: 100%;" class="row">
                        	<div class="col-lg-1">
                                <button type="button" onclick="ReportarCompra()" style="display:inline-block; border: none; background: none;"><a title="Exportar a Excel" data-toggle="tooltip"><i class="fa fa-file-excel-o" style="font-size:48px; color:#1f7244;"></i></a><figcaption> Exportar </figcaption></button>
                            </div>
                            
                            <div class="col-lg-1">
                                <button onclick="document.location.href='Pantalla.php';" style='margin-right:16px' type="button" name="btnCancelar" id="Cancelar" class="btn btn-lg btn-default pull-left" >Cancelar</button>
                            </div>                     
                                
                        </div>
                        </form>
                        <div class="modal fade" id="ModalMSJ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Reportes</h4>
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
</footer>

  <!-- Scripts -->
  <script src="js/min/plugins.min.js"></script>
  <script src="js/min/medigo-custom.min.js"></script>
  






<script type="text/javascript">
function ReportarCompra(){
  
  	var cbFact = document.getElementById("rbFactura");
  	var cbTiq = document.getElementById("rbTiquete");
  	var cbNC = document.getElementById("rbNotaCredito");
  	var cbND = document.getElementById("rbNotaDebito");
  	
  	var chEstado = document.querySelector('input[name = "rbEstado"]:checked');
  
  if(document.getElementById('RangoFechas').value=='')
  {
  		$("#MSJ").html('Error: Debe seleccionar un rango de fechas.');
        $("#ModalMSJ").modal("show");
  }
  else if(document.getElementById('Cedula').value!='' && document.getElementById('Nombre').value=='' )
  {
  		$("#MSJ").html('Error: Debe seleccionar un cliente.');
        $("#ModalMSJ").modal("show");
  }
  else if(cbFact.checked != true /*&& cbTiq.checked != true*/ && cbNC.checked != true && cbND.checked != true)
  {
  		$("#MSJ").html('Error: Debe seleccionar al menos un documento.');
        $("#ModalMSJ").modal("show");
  }
  else if(chEstado == null)
  {
  	    $("#MSJ").html('Error: Debe seleccionar un estado.');
        $("#ModalMSJ").modal("show");
  }
  else
  {
  	    var btnGenerarReporteCompras="GenerarReporteCompras";
	    
	    
	    var RangoFechas= document.getElementById('RangoFechas').value;
	    var CedulaCliente= document.getElementById('Cedula').value;
	    var Factura='';
	    //var Tiquete='';
	    var NC='';
	    var ND='';
	    
	    if(cbFact.checked){	Factura=cbFact.value; } /*if(cbTiq.checked){ Tiquete=cbTiq.value; }*/
	    if(cbNC.checked){ NC=cbNC.value; }if(cbND.checked){	ND=cbND.value; }
	    
	    var Estado=$("input:radio[name=rbEstado]:checked").val();
		
	    //var datosReporte = $('#frmReporteVentas').serializeArray();
	    
	    $.post('Logica/Excel/ReporteCompra.php', 
	    							 {RangoFechas,CedulaCliente,Factura/*,Tiquete*/,NC,ND,Estado,
	    							  btnGenerarReporteCompras}, 
	    							  function()
	    							  {
    									window.open('Logica/Excel/ReporteCompra.php');    							
									  }
			  );
  } 
}; 

//funcion para comprobar si todo los elementos de un string son iguales
function allEqual(input) {
    return input.split('').every(char => char === input[0]);
}

</script> 
  
  	<script type="text/javascript">

        /*Buscar cliente por cedula*/
        $(document).ready(function(){

			     $(document).on('keydown', '#Cedula', function(e) {
                
                var code = e.keyCode || e.which;
                
			    if (code != '9') {
					document.getElementById('Nombre').value = "";
				}

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

                                    document.getElementById('Cedula').value = Cedula;
                                    document.getElementById('Nombre').value = Nombre;
                                }
                                
                            }
                        });

                        return false;
                    }
                });
            });
		});
    </script>


<script type="text/javascript">
  
  /*Filtarar campos*/


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
$(function() {

  $('#RangoFechas').daterangepicker({
      autoUpdateInput: false,
      locale:{
            "format": "DD/MM/YYYY",
            "separator": " a ",
            "applyLabel": "Aceptar",
            "cancelLabel": "Cancelar",
            "fromLabel": "Desde",
            "toLabel": "Hasta",
            "customRangeLabel": "Personalizar",
            "daysOfWeek": [
                "Do",
                "Lu",
                "Ma",
                "Mi",
                "Ju",
                "Vi",
                "Sa"
            ],
            "monthNames": [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Setiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            "firstDay": 1
        }
  });

  $('#RangoFechas').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
  });

  $('#RangoFechas').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});
</script>

</body>
</html>