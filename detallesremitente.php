<?php
require 'config.php';
require 'inc/session.php';
require 'inc/items_core.php';

$headuser =$_session->get_user_id();
if($_session->isLogged() == false)
	header('Location: index.php');

$_page = 16;
$role = $_session->get_user_role();
if($role != 1 && $role != 2 && $role)
	header('Location: nueva_correspondencia.php');

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
if (!isset($_GET['remitente'])) {
$remitente='000';
}else{
$remitente=$_GET['remitente'];
}
$items1 = $_items->get_itemp($remitente);

// Search query
if(isset($_GET['search']) && ($_GET['search'] != '')){
	$s = urldecode($_GET['search']);
	$items = $_items->search($s, $page, $pp);
	$c_items = $_items->count_items_search($s);
}else{
	$s = false;
	$items = $_items->get_items_checkin($page, $pp);
	$c_items = $_items->count_items();
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="bootstrap/css/bootstrap.min.css" rel ="stylesheet"/>
<link href="Demo.css" rel="stylesheet" />
<?php require 'inc/head.php'; ?>
</head>
<body>
	<div id="main-wrapper">
		<?php require 'inc/header.php'; ?>
		
		<div class="wrapper-pad">
			<h2>DETALLES DEL REMITENTE </h2>

		<table  id="items2">
				<thead >
					<tr ><div>

						<td width="6%">#Regitro</td>
						<td width="10%">Remitente</td>
						<td width="10%">Receptor</td>
						
						<td width="15%" align="center">Guia</td>
						<td width="6%">Fecha</td>
						<td width="6%">Hora</td>	
		
						</div>
					</tr>
				</thead>

				<tbody>
<?php

					while($item1 = $items1->fetch_object()) {
?>


					<tr data-type="element" data-id="<?php echo $item->id; ?>">

						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item1->nRadicado; ?></td>
						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item1->remitente; ?></td>
						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item1->receptor; ?></td>
						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item1->nGuia; ?></td>

						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item1->fecha; ?></td>
						<td class="hover" data-type="archivo"><input type="hidden" name="archivo" value="<?php echo $item->nRadicado; ?>" /><?php echo $item1->hora; ?></td>
					</tr>
<?php
					}
					?>
				</tbody>
			</table>
		</div>
		
		<div class="clear" style="margin-bottom:40px;"></div>
		<div class="border" style="margin-bottom:30px;"></div>
	</div>
</body>
</html>
<script type="text/javascript">
	 $ (document).ready(function (){
	 		$('#items2').DataTable({
	 			 responsive: true
	 		});
	 }); 
	 </script>