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

$_page = 14;

$role = $_session->get_user_role();
if($role != 1 && $role != 2)
	header('Location: radicados.php');

if(isset($_POST['act'])) {
	if($_POST['act'] == '1') {
		if(!isset($_POST['radid']) || !isset($_POST['asunto']))
			die('wrong');
		if($_POST['radid'] == ''  || $_POST['asunto'] == '')
			die('wrong');
		$radid = $_POST['radid'];
		$asunto = $_POST['asunto'];

		if($_radicados->update_radicado($radid, $asunto) == false)
			die('wrong');
		die('1');
	}
}

if(!isset($_GET['id']))
	header('Location: radicados.php');
$itemid = $_GET['id'];

$item = $_radicados->get_radicadoss($itemid);
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
						RADICADO:<br />
						<div class="ni-cont">
							<input disabled type="text" id="radicado" name="radicado" class="ni" value="<?php echo $item->nradicado; ?>" />
						</div>
						Asunto:<br />
						<div class="ni-cont">
							<textarea id="asunto" name="asunto" class="ni" value="<?php echo $item->asunto; ?>"><?php echo $item->asunto; ?></textarea> 
						</div>
						<input type="submit" name="item-submit" class="ni btn blue" value="Guardar datos" />
					</form>
				</div>
			</div>
		</div>
		
		<div class="clear" style="margin-bottom:40px;"></div>
		<div class="border" style="margin-bottom:30px;"></div>
	</div>
</body>
</html>