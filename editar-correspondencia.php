<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php
require 'config.php';
require 'inc/session.php';
require 'inc/items_core.php';
if($_session->isLogged() == false)
	header('Location: index.php');
$_items->set_session_obj($_session);

$_page = 13;

$role = $_session->get_user_role();
if($role != 1 && $role != 2)
	header('Location: corres.php');

if(isset($_POST['act'])) {
	if($_POST['act'] == '1') {
		if(!isset($_POST['itemid']) || !isset($_POST['remitente']) || !isset($_POST['receptor']) || !isset($_POST['guia']))
			die('wrong');
		if($_POST['itemid'] == '' || $_POST['remitente'] == '' || $_POST['receptor'] == '')
			die('wrong');
		
		$itemid = $_POST['itemid'];
		$receptor = $_POST['receptor'];
		$remitente = $_POST['remitente'];
		$guia = $_POST['guia'];
		if(empty($guia)){
			$guia="Sin guia";
		}
		// Fix price
		
		if($_items->update_item($itemid, $receptor, $remitente, $guia) == false)
			die('wrong');
		die('1');
	}
}

if(!isset($_GET['id']))
	header('Location: corres.php');
$itemid = $_GET['id'];

$item = $_items->get_item($itemid);
?>	
<!DOCTYPE HTML>
<html>
<head>
<?php require 'inc/head.php'; ?>
</head>
<body>
	<div id="main-wrapper">
		<?php require 'inc/header.php'; ?>
		
		<div class="wrapper-pad">
			<h2>Editar Correspondencia (ID <?php echo $itemid; ?>)</h2>
			<div class="center">
				<div class="new-item form">
					<form method="post" action="" name="edit-item" data-id="<?php echo $itemid; ?>">
						Receptor:<br />
						<div class="ni-cont">
							<input type="text" id="item-receptor" name="item-receptor" class="ni" value="<?php echo $item->receptor; ?>" />
						</div>
						Remitente:<br />
						<div class="ni-cont">
							<input type="text" id="item-remitente" name="item-remitente" class="ni" value="<?php echo $item->remitente; ?>" />
						</div>
						
						Guia:<br />
						<div class="ni-cont">
							<input type="text" name="item-guia" class="ni" value="<?php echo $item->nGuia; ?>" />
						</div>
						
						<input type="submit" name="item-submit" class="ni btn blue" value="Guardar datos" />


					</form>
				</div>
			</div>
		</div>
		<img src="<?php echo $item->firma; ?>">
		<div class="clear" style="margin-bottom:40px;"></div>
		<div class="border" style="margin-bottom:30px;"></div>
	</div>
</body>
</html>

<?php
$connection = mysqli_connect("192.168.20.5", "correspondencia_cisp", "kDVzc2oq8fzym3oV");
mysqli_select_db($connection, "correspondencia_cisp");
$result= mysqli_query($connection, "SELECT remitente FROM cor_correspondencia group by remitente");
$result1= mysqli_query($connection, "SELECT receptor FROM cor_receptor group by receptor");
$array= array();
$array1= array();

if($result){
	while ($row = mysqli_fetch_array($result)){
		$remitente=utf8_encode($row['remitente']);
		array_push ($array, $remitente);
	}	
}
if($result1){
	while ($row1 = mysqli_fetch_array($result1)){
		$remitente1=utf8_encode($row1['receptor']);
		array_push ($array1, $remitente1);
	}
}
 ?>
	<script type="text/javascript">
		$(document).ready(function () {
			var items = <?= json_encode($array) ?>
			

			$("#item-remitente").autocomplete({
				source: items
			});
		})
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
			var items1 = <?= json_encode($array1) ?>
			

			$("#item-receptor").autocomplete({
				source: items1
			});
		})
	</script>