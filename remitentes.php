<?php
require 'config.php';
require 'inc/session.php';
require 'inc/items_core.php';
if($_session->isLogged() == false)
	header('Location: index.php');
$_items->set_session_obj($_session);

$_page = 4;

$role = $_session->get_user_role();
if($role != 1 && $role != 2)
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
if (!isset($_POST['remitente'])) {
$remitente='000';
}else{
$remitente=$_POST['remitente'];
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
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link href="bootstrap/css/bootstrap.min.css" rel ="stylesheet"/>

<?php require 'inc/head.php'; ?>

</head>

<body>
	<div id="main-wrapper">
		<?php require 'inc/header.php'; ?>
		
		<div class="wrapper-pad">
			<h2 class="noborder">REMITENTES</h2>			
			<?php
			if($c_items == 0)
				echo '<br /><br />No se encontró datos';
			else{
			?>
			
			<table id="items-check">
				<thead >
					<tr ><div>

						<td width="33% "style="text-align: center" >Remitente</td>
						<td width="33%" style="text-align: center">Numero de correspondencia</td>
						<td width="33%" style="text-align: center">Acciones</td>
						
						</div>
					</tr>
				</thead>
				<tbody>
<?php
					while($item = $items->fetch_object()) {
?>
					<tr data-type="element" data-id="<?php echo $item->id; ?>">
						<form method="post" onsubmit="return enviar()">
						<td class="hover" data-type="archivo" align="center"><input type="hidden" name="remitente"value="<?php echo $item->remitente; ?>"><?php echo $item->remitente; ?></td>

						<td class="hover" data-type="users" align="center"><?php echo $item->numero; ?></td>
						<td align="center">

							<?php
							if($role == 1 || $role == 2 || $role == 3 || $role == 4)
								echo '<a href="detallesremitente.php?remitente='.$item->remitente.'" class="btn btn-info" title="DETALLES" target="_blank">Mostrar detalles</a>';
								
?>
</td>
</form>
<p id="respa" ></p>
				
					</tr>
<?php
					}
					?>
				</tbody>
			</table>
			<?php
			}
			?>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	 $ (document).ready(function (){
	 		$('#items-check').DataTable({
	 			 responsive: true
	 		});
	 }); 
	 </script>

<script >
	function enviar(){
		var remitente= document.getElementById('remitente').value;
		var dataen='remitente='+remitente;

		$.ajax({
			type: 'post',
			url: 'remitentes.php',
			data:dataen,
			success:function(resp){
			$('#respa').html(resp);
			}

		});
		return false;
	}
</script>
