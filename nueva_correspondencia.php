<?php
require 'config.php';
require 'inc/session.php';
require 'inc/items_core.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
if($_session->isLogged() == false)
	header('Location: index.php');

$_page = 2;

$role = $_session->get_user_role();
if($role != 1 && $role != 2)
	header('Location: index.php');


if(isset($_POST['act'])) {
	if($_POST['act'] == '1') {
		if(!isset($_POST['receptor']) || !isset($_POST['remitente']) || !isset($_POST['guia']))
			die('wrong');
		if($_POST['receptor'] == '' || $_POST['remitente'] == '')
			die('wrong');
		
		$receptor = $_POST['receptor'];
		$remitente = $_POST['remitente'];
		$guia = $_POST['guia'];
		if(empty($guia)){
			$guia="Sin guia";
		}

		$receptores= $_items->get_correo($receptor);
if($receptores=="-" or empty($receptores)){
	$receptores = 'noreply@cispcolombia.org';
}
$contenido= "Buen día ".$receptor.",

Ha recibido correspondencia física la cual se encuentra en la recepción.

El remitente es: ".$remitente."

Cordialmente:

-Recepción Cisp Colombia.";
$contenido= utf8_decode($contenido);
		
	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host  = 'smtp.gmail.com'; 
	$mail->SMTPAuth = true;
	$mail->SMTPDebug = 2;
	$mail->SMTPSecure  =  'ssl'; 
	$mail->Port  =  465; 
	
	$mail->Username = 'noreply@cispcolombia.org';
	$mail->Password = 'C1sp2018*';

	//Configuracion del correo a Enviar

	$mail->setFrom('noreply@cispcolombia.org');
	$mail->addAddress($receptores, 'Receptor');
	$mail->AddAddress('santos@cisp-ngo.org', 'Alvaro Santos');
	$mail->AddAddress('transversales@cispcolombia.org', 'Equipo Transversal');
	
	$mail->Subject = 'Nueva Correspondencia';
	$mail->Body = $contenido;

	//envio

 if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
     	header("Location:home.php");
        echo "Message has been sent";
     }
		if($_items->new_item($receptor, $remitente, $guia) == false)
			die('wrong');
		die('1');
	}
}
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
		<?php
				$query = "SELECT remitente from cor_correspondencia group by remitente";
				$resultado=$mysqli->query($query);
				if ($resultado->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
				{$combobit="";
    				while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) 
    					{
        				$combobit .=" <option value='".$row['remitente']."'>".$row['remitente']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    					}
				}
						else
						{
    					echo "No hubo resultados";
						}
							$mysqli->close();

				?>
		<div class="wrapper-pad">
			<h2>Nueva correspondencia</h2>
			<div class="center">
				<div class="new-item form">
					<form method="post" action="" name="new-cor">
						Receptor/es: (Quien recibe)<br />
						<div class="ni-cont">
							<input type="text" id="cor-receptor" name="cor-receptor" class="ni" />
						</div>
						Remitente: (Quien envia)<br />
						<div class="ni-cont">
				
							<input type="text" id="cor-remitente" name="cor-remitente" class="ni" />

						</div>
						Guia: <br />
						<div class="ni-cont">
							<input type="text" name="cor-guia" class="ni" placeholder="(Dejar este campo vacío si no tiene guia) Máximo 40 caracteres" />

						</div>

						<input type="submit" name="item-submit" id="cor-submit" class="ni btn blue" value="Guardar datos" />


					</form>
				</div>
			</div>
		</div>
		
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
			

			$("#cor-remitente").autocomplete({
				source: items,
				minLength: 2
			});
		})
	</script>

		<script type="text/javascript">
		$(document).ready(function () {
			var items1 = <?= json_encode($array1) ?>
			

			$("#cor-receptor").autocomplete({
				source: items1,
				minLength: 2
			});
		})
	</script>