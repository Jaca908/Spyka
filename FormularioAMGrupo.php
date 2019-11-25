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
                        <legend id="Leyenda" class="group-border">Grupos de Productos</legend>
                        <form role="form" id="frmGrupo">
                        <div style="margin: auto; width: 100%;" class="row">
						              <div class="col-lg-1">
                                <label class="control-label" for="Name">ID.Grupo<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                        	<div class="col-lg-2">
                                    <input type="text" class="form-control input-sm" maxlength="3" id="IDGrupo" name="txtIDGrupo" required>
                            </div>
                            <div class="col-lg-1">
                                <label class="control-label" for="Name">Grupo<span style="font-size: 150%;  color: red;">*</span>:</label>
                            </div>
                            <div class="col-lg-3">
                              <input type="text" class="form-control input-sm" maxlength="40" id="Grupo" name="txtGrupo" required>
                            </div>
                            <div class="col-lg-2">
                                <label class="control-label" for="Name"><span style="font-size: 150%;  color: red;">*</span>Campos Obligatorios</label>
                            </div>
                          </div>
                        <br> 
                        <div class="col-sm-12 form-group" align="left">
                                <button type="submit" name="btnEnviarGrupo" id="EnviarGrupo" style='margin-right:16px' class="btn btn-lg btn-default pull-right" >Enviar &rarr;</button>
                                <button onclick="document.location.href='FormularioVerGrupos.php';" style='margin-right:16px' type="button" name="btnCancelar" id="Cancelar" class="btn btn-lg btn-default pull-right" >Cancelar</button>
                            </div>
                        </form>
                        <div class="modal fade" id="ModalMSJ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h4 class="modal-title" style="font-weight: bold; color:black;" id="exampleModalLabel">Grupo</h4>
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
$("#frmGrupo").submit(function(e){
    e.preventDefault();
  var btnEnvGrupo="EnviarGrupo";
  var GuardarModificar="";
  
  if ( $('#IDGrupo').is('[readonly]') ) 
  { 
    GuardarModificar="Modificar";
  }
  else
  {
    GuardarModificar="Guardar";
  }
  
  var EnviarDatos="&GuardarModificar="+GuardarModificar+"&btnEnviarGrupo="+btnEnvGrupo;
  
    $.ajax({
        type : 'POST',
        data: $("#frmGrupo").serialize()+EnviarDatos,
        url : 'Logica/Grupo.php',
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
}); 
</script>

<script type="text/javascript">

/*Cargar datos al abrir la pagina para consultar cuando se pulse el boton de ver*/
window.onload = function() { 

var CodigoGrupo=sessionStorage.getItem("CodigoGrupo");
var Modificar=sessionStorage.getItem("Modificar");

  if(CodigoGrupo!=null && Modificar!=null)
  {
    sessionStorage.clear();

    document.getElementById('IDGrupo').readOnly = true;

    $.ajax({
            url: 'Logica/Grupo.php',
            type: 'post',
            data: 
            {
              MostrarDatos:'MostrarDatos',
              CodigoGrupo:CodigoGrupo
            },
            dataType: 'json',
            success:function(response){
              
                var len = response.length;

                if(len > 0){
                  document.getElementById('IDGrupo').value = response[0]['IDGrupo'];
                  document.getElementById('Grupo').value = response[0]['Grupo'];  
        }
              
            }
        });

        return false;
  }
  else
  {
    document.getElementById('IDGrupo').readOnly = false;
  }

}
  </script> 
  
  <script>
	
$('#ModalMSJ').on('hide.bs.modal', function (e) {
		
	var GuarMod = sessionStorage.getItem("GuarMod");
	
	sessionStorage.clear();	
		
	if(GuarMod =='Guardo')
	{
		window.open('FormularioAMGrupo.php', '_self');	
	}
	else if(GuarMod =='Modifico')
	{
		window.open('FormularioVerGrupos.php', '_self');	
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

</body>
</html>