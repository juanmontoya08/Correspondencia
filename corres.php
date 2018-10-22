<?php
require 'config.php';
require 'inc/session.php';
require 'inc/items_core.php';

if($_session->isLogged() == false)
	header('Location: index.php');
$_items->set_session_obj($_session);

$_page = 3;


$role = $_session->get_user_role();
if($role != 1 && $role != 2)
	header('Location: index.php');


if(isset($_POST['act'])) {
	// Search count
	if($_POST['act'] == '1') {
		if(!isset($_POST['val']) || $_POST['val'] == '')
			die('wrong');
		$search_string = $_POST['val'];
		if($_items->count_items_search($search_string) == 0)
			die('2');
		die('3');
	}
	if($_POST['act'] == '3') {
		if(!isset($_POST['id']) || $_POST['id'] == '')
			die('wrong');
	if($_items->update_estado($_POST['id']) == true);
	// Update item quantity (check-in/check-out)
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
	$items = $_items->search($s, $page, $pp);
	$c_items = $_items->count_items_search($s);
}else{
	$s = false;
	$items = $_items->get_items($page, $pp);
	$c_items = $_items->count_items();
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
			<h2>Correspondencia</h2>

			
			<?php
			if($c_items == 0)
				echo '<br /><br />Sin correspondencia';
			else{
			?>
			
			<table  id="items">
				<thead >
					<tr ><div>
						<td width="1%"></td>
						<td width="2%">#Registro</td>
						<td width="17%">Receptor</td>
						<td width="17%">Remitente</td>
						
						<td width="17%" align="center">Guia</td>
						<td width="17%">Fecha</td>
						<td width="14%">Hora</td>	
						<td width="14%">Estado </td>
						<td width="2%">Acciones </td>
						</div>
					</tr>
				</thead>

				
				<tbody>
<?php

					while($item = $items->fetch_object()) {
?>


					<tr data-type="element" data-id="<?php echo $item->id; ?>">
						<td class="hover" data-type="ids"><input type="hidden" id="ids" name="ids" value="<?php echo $item->id; ?>" /></td>
						<td class="hover" data-type="nRadicado"><input type="hidden" name="nRadicado" value="<?php echo $item->nRadicado; ?>" /><?php echo $item->nRadicado; ?></td>
						<td class="hover" data-type="receptor"><input type="hidden" name="receptor" value="<?php echo $item->receptor; ?>" /><?php echo $item->receptor; ?></td>
						<td class="hover" data-type="remitente"><input type="hidden" name="remitente" value="<?php echo $item->remitente; ?>" /><?php echo $item->remitente; ?></td>
						<td class="hover" data-type="nGuia"><input type="hidden" name="nGuia" value="<?php echo $item->nGuia; ?>" /><?php echo $item->nGuia; ?></td>
						<td class="hover" data-type="fecha"><input type="hidden" name="fecha" value="<?php echo $item->fecha; ?>" /><?php echo $item->fecha; ?></td>
						<td class="hover" data-type="hora"><input type="hidden" name="hora" value="<?php echo $item->hora; ?>" /><?php echo $item->hora; ?></td>
						<td class="hover" data-type="estado" id="estado<?php echo $item->nRadicado; ?>"><input type="hidden" name="estado" value="<?php echo $item->estado; ?>" /> <?php if($item->estado==0){ echo "<span class='label label-default'>  PENDIENTE.</span>";}else{ echo "<span class='label label-danger'> ENTREGADO.</span>";}?></td>

						<td>

							<?php
							
							if($role == 1 || $role == 2)
								echo '<a href="editar-correspondencia.php?id='.$item->id.'" name="c3" title="Editar"><i class="fa fa-pencil"></i>      </a>';
								//echo '<a href="firma.php?ids='.$item->nRadicado.'" name="c4" title="Check" ><i class="fa fa-check"></i></a>';
								echo '<a href="" name="c4" title="Check" ><i class="fa fa-check"></i></a>';
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
	 		$('#items').DataTable({
	 			order:[[0,"desc"]]}
	 			 
	 		);
	 }); 
	 </script>