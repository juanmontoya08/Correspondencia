<?php
require 'config.php';
require 'inc/session.php';
require 'inc/items_core.php';

$headuser =$_session->get_user_id();
if($_session->isLogged() == false)
	header('Location: index.php');

$role = $_session->get_user_role();
$_page = 21;

if(!isset($_GET['id']))
header('Location: items.php');
// $item = $_items->get_item($_GET['id']);
// if(!$item->id)
// 	header('Location: items.php');
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
	$items = $_items->search($s, $page, $pp);
	$c_items = $_items->count_items_search($s);
}else{
	$s = false;
	$items = $_items->get_itemp($_GET['id']);
	$c_items = $_items->count_items();
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
<link href="bootstrap/css/bootstrap.min.css" rel ="stylesheet"/>
<link href="Demo.css" rel="stylesheet" />
<?php require 'inc/head.php'; ?>
</head>
<body>
	<div id="main-wrapper">
		<?php require 'inc/header.php'; ?>
		
		<div class="wrapper-pad">
			<h2>Items</h2>
			<div id="table-head">

				<div class="fright" style="height:5px; margin-right:55px;"></div>
				<?php
				if($role == 1 || $role == 2)
					echo '<a href="" name="delete-all" class="btn red fright"><i class="fa fa-close"></i>Eliminar</a>';
				?>
				<a href="check-in.php" name="check-out-all" class="btn blue  fright"><i class="fa fa-arrow-up"></i>Pendientes</a>
				<a href="check-out.php" name="check-in-all" class="btn green fright"><i class="fa fa-arrow-down"></i>Terminados</a>
			</div>
			
			<?php
			if($c_items == 0)
				echo '<br /><br />Sin productos';
			else{
			?>
			
			<table  id="items">
				<thead >
					<tr ><div>
						<td width="1%"></td>
						<td width="2%">ID</td>
						<td width="13%">#Radicado</td>
						<td width="4%">remitente</td>
						<td width="13%">receptor</td>
						
						<td width="4%"> asunto</td>
						<td width="12%" align="center">guia</td>
						<td width="10%">Fecha</td>
						<td width="10%">Hora</td>	
						<td width="10%">Acciones </td>

						
						</div>
					</tr>
				</thead>

				
				<tbody>
<?php

					while($item = $items->fetch_object()) {
?>


					<tr data-type="element" data-id="<?php echo $item->id; ?>">
						<td><input type="hidden" name="id" value="<?php echo $item->id; ?>" /></td>
						<td class="hover" data-type="id"><?php echo $item->id; ?></td>
						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item->nRadicado; ?></td>
						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item->remitente; ?></td>
						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item->receptor; ?></td>
						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item->nGuia; ?></td>
						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item->asunto; ?></td>
						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item->fecha; ?></td>
						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item->hora; ?></td>
						<td>
							<?php
							
							if($role == 1 || $role == 2)
								echo '<a href="" name="c4" title="Check" ><i class="fa fa-check"></i></a>';
							if($role == 1)
								echo '<a href="" name="c5" title="Eliminar"><i class="fa fa-close"></i></a>';
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