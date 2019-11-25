  <div class="nav-container">

    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="Pantalla.php">INICIO</a>
        </li>
        <?php
        if(isset($_SESSION['Perfil']) AND $_SESSION['Perfil']=='A')
        {
			echo '<li id="LIUsuarios">';
	         echo '<a href="#!">Usuarios</a>';
	          echo '<ul class="nav-dropdown">';
	           echo '<li>';
	             echo '<a href="FormularioVerUsuarios.php" target="_self">Ver Usuarios</a>';
	            echo '</li>';
	            echo '<li>';
	             echo '<a href="FormularioAMUsuario.php" target="_self">Ingresar Usuarios</a>';
	           echo '</li>';
	          echo '</ul>';
        	echo '</li>';	
		}   
        ?>
        <li>
          <a href="#!">Clientes</a>
          <ul class="nav-dropdown">
            <li>
              <a href="FormularioVerClientes.php" target="_self">Ver Clientes</a>
            </li>
            <?php
            if(isset($_SESSION['Perfil']) AND $_SESSION['Perfil']!='C')
        	{
            	echo '<li id="LIIngClientes">';
                echo '<a href="FormularioAMCliente.php" target="_self">Ingresar Clientes</a>';
            	echo '</li>';
			}
            ?>
          </ul>
        </li>
        <li>
          <a href="#!">Facturas</a>
          <ul class="nav-dropdown">
            <li>
              <a href="FormularioVerFacturas.php" target="_self">Ver Documentos</a>
            </li>
            <?php
            if(isset($_SESSION['Perfil']) AND $_SESSION['Perfil']!='C')
        	{
            	echo '<li id="LIGenDocs">';
                echo '<a href="FormularioFactura.php" target="_self">Generar Documentos</a>';
            	echo '</li>';
			}
            ?>
            <li style="border-top: 5px solid #ffffff;">
              <a href="FormularioReporteVenta.php">Generar Reportes</a>
            </li>
            <li style="border-top: 5px solid #ffffff;">
              <a href="FormularioAbonoMultiple.php">Cuentas por Cobrar</a>
            </li>
            <li>
              <a href="FormularioImpresionComprobantesPago.php">Impresión de Recibos/Notas de Débito o Crédito</a>
            </li>
            <li>
              <a href="FormularioEstadoCuentaCliente.php">Estados de Cuenta Por Clientes</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#!">Compras</a>
          <ul class="nav-dropdown">
            <li>
              <a href="FormularioVerCompras.php" target="_self">Ver/Reportar Compras</a>
            </li>
            <li style="display:none;">
              <a href="#" target="_self"> Compras</a>
            </li>
            <li style="border-top: 5px solid #ffffff;">
              <a href="FormularioReporteCompra.php">Generar Reportes</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#!">Productos</a>
          <ul class="nav-dropdown">
            <li>
              <a href="FormularioVerProductos.php" target="_self">Ver Productos</a>
            </li>
            <?php
            if(isset($_SESSION['Perfil']) AND $_SESSION['Perfil']!='C')
        	{
            	echo '<li id="LIIngProductos">';
                echo '<a href="FormularioAMProducto.php" target="_self">Ingresar Productos</a>';
            	echo '</li>';
			}
            ?>
          </ul>
        </li>
        <li>
          <a href="#!">Grupos</a>
          <ul class="nav-dropdown">
            <li>
              <a href="FormularioVerGrupos.php" target="_self">Ver Grupos</a>
            </li>
            <?php
            if(isset($_SESSION['Perfil']) AND $_SESSION['Perfil']!='C')
        	{
            	echo '<li id="LIIngGrupos">';
                echo '<a href="FormularioAMGrupo.php" target="_self">Ingresar Grupos</a>';
            	echo '</li>';
			}
            ?>
          </ul>
        </li>
        <li>
          <a href="FormularioPerfil.php"><label style="color: #563d7c; font-weight:bold;">Perfil</label></a>
        </li>
        <li>
          <a href="logout.php" target="_self"><label style="color: #ffc107; font-weight:bold;">Salir</label></a>
        </li>
      </ul>
    </nav>
  </div>