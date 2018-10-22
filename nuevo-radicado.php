<?php
require 'config.php';
require 'inc/session.php';
require 'inc/items_core.php';

if($_session->isLogged() == false)
	header('Location: index.php');
$headuser =$_session->get_user_id();
$usuario =$headuser;

$_page = 8;

$role = $_session->get_user_role();
if($role==0)
	header('Location: home.php');

if(isset($_POST['act'])) {
	if($_POST['act'] == '1') {
		if(!isset($_POST['asunto']) || !isset($_POST['tipor1']))
			die('wrong');
		if($_POST['asunto'] == '')
			die('wrong');
		
		$asunto = $_POST['asunto'];
		$tipor1 = $_POST['tipor1'];

		if($_items->new_radicado($asunto, $tipor1, $usuario) == false)
			die('wrong');
		die('1');
	}
}
$radicado = $_items->get_radicado2();
	$radicado = $radicado+1;
	$numeroConCeros = str_pad($radicado, 5, "0", STR_PAD_LEFT);
?>
<!DOCTYPE HTML>
<html>
<head>
<?php require 'inc/head.php'; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
	<div id="main-wrapper">
		<?php require 'inc/header.php'; ?>
		<div class="wrapper-pad">
			<h2>Nuevo Radicado</h2>
			<div class="center">
				<div class="new-item form">
					<form method="post" action="" name="new-radicado">

						NÚMERO DE RADICADO:
						<div class="ni-cont">
						<input name="cor-radicado" id="cor-radicado" class="ni" value="<?php echo $numeroConCeros;?>" placeholder="<?php echo $numeroConCeros;?>" disabled>  
						</div>
						ASUNTO:<br />
						<div class="ni-cont">
							 <textarea name="cor-asunto" id="cor-asunto" class="ni"></textarea> 
						</div>
						<label >TIPO DE RADICADO:  (*)</label>
						<div class="ni-cont">
						 <input type="radio" id="tipor1" name="tipor" value="1" required>
						 <label >Físico</label>
				<br />
						 <input type="radio" id="tipor2" name="tipor" value="2" required>

						 <label >Web</label>
						</div>

						<input type="submit" name="item-submit" id="cor-submit" class="ni btn blue" value="Guardar datos" onclick=this.form.action="reportes/pdf/tickets.php">


					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

		