<?php
$headrole = $_session->get_user_role();
$headuser =$_session->get_user_id();
if($headrole == 1)
	$as = 'Administrador';
elseif($headrole == 2 and $headuser == 3)
	$as = 'Recepcion';
elseif($headrole == 2)
	$as = 'General Supervisor';

elseif($headrole == 3)
	$as = 'Supervisor';
elseif($headrole == 4)
	$as = 'Usuario';
?>
<div id="header">
			<div class="left">
				<a href="http://cispcolombia.org/" target='_blank'><img src="media/img/cropped-logo2.png" width="150" height="50" alt="Inventario App" /></a>
				<div style="font-size:12px; font-style:italic;color:#bbb;"><?php echo $as;?></div>
			</div>
			<div class="right">
				<?php
				if($headrole == 1)
					echo '<a href="users.php" title="Users">Usuarios</a>|';
				echo '<a href="settings.php" title="Settings">Configuración</a>|';
				?>
				
				<a href="logout.php" title="Logout">Salir</a>
			</div>
			<div class="clear"></div>
		</div>
		
		<input type="checkbox" class="toggle" id="opmenu" style="display:none"/>
		<label for="opmenu" id="open-menu"><i class="fa fa-align-justify"></i> Menu</label>
		<div id="menu">
			<ul id="menuli">
				<?php
				// Home only for Admin and General Supervisor (Stats)
if($headrole == 1 || $headrole == 2) {
				?>
					<li<?php if($_page == 1) { ?> class="active"<?php } ?>><a href="home.php" title="Home"><i class="fa fa-home"></i> Inicio</a></li>
					<li<?php if($_page == 2) { ?> class="active"<?php } ?>><a href="nueva_correspondencia.php" title="Nueva correspondencia"><i class="fa fa-plus"></i>Nueva Correspondencia</a></li>
					<li<?php if($_page == 3) { ?> class="active"<?php } ?>><a href="corres.php" title="Correspondencia"><i class="fa fa-list-ul"></i> Correspondencia</a></li>
					<li<?php if($_page == 4) { ?> class="active"<?php } ?>><a href="remitentes.php" title="Remitentes"><i class="fa fa-arrow-down"></i> Remitentes</a></li>



				<?php
				}
				?>

				<?php
				// Home only for Admin and General Supervisor (Stats)
if($headrole == 1 || $headrole == 2 || $headrole == 3 || $headrole == 4 ) {
				?>
					<li<?php if($_page == 5) { ?> class="active"<?php } ?>><a href="radicados.php" title="Radicados"><i class="fa fa-barcode"></i> Radicados</a></li>	
					<?php
				}
				?>
			</ul>
		</div>