<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php
require 'config.php';
require 'inc/session.php';
require 'inc/radicados_core.php';

if($_session->isLogged() == false)
	header('Location: index.php');
$_radicados->set_session_obj($_session);

$_page = 5;


$role = $_session->get_user_role();



if(isset($_POST['act'])) {
	// Search count
	if($_POST['act'] == '1') {
		if(!isset($_POST['val']) || $_POST['val'] == '')
			die('wrong');
		$search_string = $_POST['val'];
		if($_radicados->count_radicados_search($search_string) == 0)
			die('2');
		die('3');
	}
	
	// Update radicado quantity (check-in/check-out)
	if($_POST['act'] == '3') {
		if(!isset($_POST['id'])  || $_POST['id'] == ''  )
			die('wrong');

		
		if($_radicados->update_estado($_POST['id']) == true)
			die('1');
		die('wrong');
	}
}

if(!isset($_GET['page']) || $_GET['page'] == 0 || !is_numeric($_GET['page']))
	$page = 1;
else
	$page = $_GET['page'];

	
if(!isset($_GET['pp']) || !is_numeric($_GET['pp'])) {
	$pp = 25;
}else{
	$pp = $_GET['pp'];
	if($pp != 25 && $pp != 50 && $pp != 100 && $pp != 150 && $pp != 200 && $pp != 300 && $pp != 500)
		$pp = 25;
}

// Search query
if(isset($_GET['search']) && ($_GET['search'] != '')){
	$s = urldecode($_GET['search']);
	$radicados = $_radicados->search($s, $page, $pp);
	$c_radicados = $_radicados->count_radicados_search($s);
}else{
	$s = false;
	$radicados = $_radicados->get_radicados($page, $pp);
	$c_radicados = $_radicados->count_radicados();
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="bootstrap/css/bootstrap.min.css" rel ="stylesheet"/>


<?php require 'inc/head.php'; ?>
</head>
<body>
	<div id="main-wrapper">
		<?php require 'inc/header.php'; ?>
		
		<div class="wrapper-pad">
			<h2>Radicados</h2>
 			<div id="table-head">

				<div class="fright" style="height:5px; margin-right:55px;"></div>
				<?php
				if($role == 1 || $role == 2 || $role == 3 )
					echo '<a href="nuevo-radicado.php" name="new-cat" class="btn blue fright"><i class="fa fa-plus"></i>Nuevo Radicado</a>';
				?>
			</div>
			
			<?php
			if($c_radicados == 0)
				echo '<br /><br />Sin Radicados';
			else{
			?>
			
			<table  id="radicados">
				<thead >
					<tr ><div>
						<td width="4%">#Radicado</td>
						<td width="40%">Asunto</td>

						<td width="14%">Fecha</td>
						<td width="12%">Hora</td>	
						<td width="11%">Tipo </td>
						<td width="10">Usuario</td>
						<td width="9%">Acciones </td>
						</div>
					</tr>
				</thead>

				
				<tbody>
<?php

					while($radicado = $radicados->fetch_object()) {
?>


					<tr data-type="element" data-id="<?php echo $radicado->id; ?>">
						
						<td class="hover" data-type="nradicado"><input type="hidden" name="nradicado" value="<?php echo $radicado->nradicado; ?>" /><?php echo $radicado->nradicado; ?></td>
						<td class="hover" data-type="asunto"><input type="hidden" name="asunto" value="<?php echo $radicado->asunto; ?>" /><?php echo $radicado->asunto; ?></td>
						<td class="hover" data-type="fecha"><input type="hidden" name="fecha" value="<?php echo $radicado->fecha; ?>" /><?php echo $radicado->fecha; ?></td>
						<td class="hover" data-type="hora"><input type="hidden" name="hora" value="<?php echo $radicado->hora; ?>" /><?php echo $radicado->hora; ?></td>
						<td class="hover" data-type="estado" id="estado<?php echo $radicado->tipo; ?>"><input type="hidden" name="estado" value="<?php echo $radicado->tipo; ?>" /> <?php if($radicado->tipo==1){ echo "<span class='label label-default'>  FÍSICO.</span>";}else{ echo "<span class='label label-default'> WEB.</span>";}?></td>
						<td class="hover" data-type="usuario"><input type="hidden" name="usuario" value="<?php echo $radicado->usuario; ?>" /><?php echo $_radicados->get_users_name($radicado->usuario); ?></td>
						<td>

							<?php
							
							if($role == 1 || $role == 2 || $role == 3)
								echo '<a href="editar-radicado.php?id='.$radicado->id.'" name="c3" title="Editar"><i class="fa fa-pencil"></i></a>';
							?>
						</td> 
					</tr>
<?php
					}
					?>
				</tbody>
			</table>
			
			<?php } ?>
			
		</div>

		
		<div class="clear" style="margin-bottom:10px;"></div>
		<div class="border" style="margin-bottom:0px;"></div>
	</div>
</body>
</html>

<script type="text/javascript">
	 $ (document).ready(function (){
	 		$('#radicados').DataTable({
	 			order:[[0,"desc"]]}
	 			 
	 		);
	 }); 
	 </script>