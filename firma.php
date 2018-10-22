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

$_page = 19;
$headuser =$_session->get_user_id();
$usuario =$headuser;
$hora = date_default_timezone_set('America/Bogota'); 
$fecha= date('Y-m-d');
$hora= date('H-i');
$ruta= "firmas/".$fecha;

        if(!file_exists($ruta)){
            mkdir($ruta, 0777);
        }


    if(!isset($_GET['ids'])  || $_GET['ids'] == '' ){
  header('Location: corres.php');
    }else{

    $idss= $_GET['ids'];
    
};

if (!empty($_POST['base64'])){

$baseFromJavascript = $_POST['base64'];
$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $baseFromJavascript));
$ruta = $ruta."/a".$_GET['ids'].".png";
file_put_contents($ruta, $data, FILE_APPEND | LOCK_EX);

if($_items->update_firma($_GET['ids'], $ruta, $data) == true);

if($_items->update_estado($_GET['ids']) == true);



$caratula_base = imagecreatefrompng($ruta);
 
// Creamos las dos imágenes a utilizar
 
$tapa_caratula= imagecreatefrompng("firmas/LOGO-CISP-NEGRISS1.png");
 
// Copiamos una de las imágenes sobre la otra.
// imagecopyresampled( "img_origen", "imagen_que_nueva", pos x imagen_que_nueva, pos y imagen_que_nueva, pos_x_img_origen, pos_y_img_origen, largo_para_imagen_nueva, ancho_para_imagen_nueva, largo_para_imagen_origen, largo_para_imagen_origen);
imagecopymerge(
  $tapa_caratula,
  $caratula_base,
  0, 0, 0, 0,
  imagesx($tapa_caratula),
  imagesy($tapa_caratula),
62
);
 
 
// Damos salida a la imagen final a un archivo
imagepng($tapa_caratula, $ruta);
 
// Destruimos las imágenes
imagedestroy($tapa_caratula);
imagedestroy($caratula_base);
}
else{
$baseFromJavascript = 0;
}

?>

<!DOCTYPE HTML>
<html>
  <link rel="stylesheet" href="media/signature_pad-master/docs/css/signature-pad.css">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="bootstrap/css/bootstrap.min.css" rel ="stylesheet"/>


<?php require 'inc/head.php'; ?>
</head>
<body>

 <div id="signature-pad" class="signature-pad">
    <div class="signature-pad--body">
      <canvas id="canvas"></canvas>
    </div>
    <div class="signature-pad--footer">
      <div class="description"></div>

      <div class="signature-pad--actions">
        <div>
          <button type="button" class="btn btn-danger" data-action="clear">Vaciar</button>
<!--           <button type="button" class="button" data-action="change-color">Change color</button> -->
          <button type="button" class="btn btn-default" data-action="undo">Undo</button>
        </div>
        <div>
          <input  hidden="hidden" type="text" name="b64" id="b64" value="<?php echo $_GET['ids']; ?>">
          <button type="button" class="btn btn-primary" data-action="save-png" id="png" class="btn green fright" >GUARDAR</button>
        </div>
      </div>
    </div>
    <form method="post" action="" name="new-item" >
    <button id="png" hidden="hidden">Generar PNG</button><br>
          <br>
          <br>
          <br>
          <textarea hidden="hidden" name="base64" id="base64" ></textarea>
          </form>
  </div>
<script src="media/signature_pad-master/docs/js/signature_pad.umd.js"></script>
<script src="media/signature_pad-master/docs/js/app.js"></script>

</body>
</html>
