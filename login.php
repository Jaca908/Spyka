<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.ico">
<link rel="icon" type="image/png" href="./assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Spyka</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,800" rel="stylesheet">
    
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
<!-- Main CSS -->
<link href="./assets/css/main.css" rel="stylesheet"/>
    
<!-- Animation CSS -->
<link href="./assets/css/vendor/aos.css" rel="stylesheet"/>
    
</head>
    
<body> 
    
<!-- Main -->
<div class="d-md-flex h-md-100 align-items-center">

	<div class="col-md-6 p-0 bg-white h-md-100 loginarea">
		<div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
			<form class="border rounded p-5" action="Logica/Usuario.php" method="post">
				<h3 class="mb-4 text-center">Ingresar</h3>
				<div class="form-group">
					<input type="text" class="form-control" name="txtCedula" maxlength="12" id="Cedula" placeholder="Cédula" required>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="txtClave" required>
				</div>
				<div class="form-group form-check">
					<label id="Errores" for="exampleCheck1"style="color: red"><?php 
	
																				if (isset($_SESSION['msj']))
																			{
																			    echo $_SESSION['msj'];
																			    unset($_SESSION['msj']);
																			}
																				
																				?></label>
				</div>
				<button type="submit" name="btnLogin" value="Login" class="btn btn-success btn-round btn-block shadow-sm">Ingresar</button>
				<!--<small class="d-block mt-4 text-center"><a class="text-gray" href="#">¿Olvidó su contraseña?</a></small>-->
			</form>
		</div>
	</div>

		<div style="background-color:lightblue" class="col-md-6 p-0 bg-indigo h-md-100">
		<div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
			<div class="logoarea pt-5 pb-5">
				<p>
					<img src="images\Spyka1.png" width="50%" height="50%">
					<!--<i class="fa fa-anchor fa-3x"></i><!-- Cambiar logo aqui -->
				</p>
				<!--<h1 class="mb-0 mt-3 display-4">Spyka</h1>-->
				<!--<h5 class="mb-4 font-weight-light">Free Bootstrap UI Kit with <i class="fab fa-sass fa-2x text-cyan"></i></h5>-->
			</div>
		</div>
	</div>
</div>
<!-- End Main -->
    
    
   
<!--------------------------------------
JAVASCRIPTS
--------------------------------------->    
<script src="./assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/functions.js" type="text/javascript"></script>
    
<!-- Animation -->
<script src="./assets/js/vendor/aos.js" type="text/javascript"></script>
<noscript>
    <style>
        *[data-aos] {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }
    </style>
</noscript>
<script>
    AOS.init({
        duration: 700
    });
</script>
 
<!-- Disable animation on less than 1200px, change value if you like -->
<script>
AOS.init({
  disable: function () {
    var maxWidth = 1200;
    return window.innerWidth < maxWidth;
  }
});
</script>

<script>
	
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
	
</script>

</body>
</html>