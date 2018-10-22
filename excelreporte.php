<?php
	 header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="reportecorrespondencia.xls"');

include "config.php";
include 'inc/home_core.php';

?>
<html>
    <head>
        <title>REPORTE EXCEL</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <table width="50%" border="1" cellspacing="0" cellpadding="0">
				
					<tr align="center"  >
						<td width="15%" bgcolor="#C1C1C1">#</td>
						<td width="15%" bgcolor="#C1C1C1">Receptor</td>
						<td width="15%" bgcolor="#C1C1C1">Remitente</td>
						<td width="4%" bgcolor="#C1C1C1">Guia</td>
						<td width="10%" bgcolor="#C1C1C1">Fecha</td>
						<td width="10%" bgcolor="#C1C1C1">Hora</td>
					</tr>
				<?php
if($_POST){

		if(!empty($_POST['mes1']) and !empty($_POST['mes2'])){
		$fecha1= $_POST['mes1'];
		$fecha2= $_POST['mes2'];
			$query=$_home->fechar($fecha1, $fecha2);
		}
		else if (empty($_POST['mes1']) and empty($_POST['mes2']) and !empty($_POST['box1'])){
	$fecha= $_POST['box1'];
	$query=$_home->get_report($fecha);
	}
	else if(empty($_POST['mes1']) and empty($_POST['mes2']) and empty($_POST['box1'])){ $query="SELECT * FROM cor_correspondencia";}

	}


else $query="SELECT * FROM cor_correspondencia";



	$resultado = $mysqli->query($query);

while($row = mysqli_fetch_array($resultado))
	{

?>
	<tr >
		<td align="center" > <?php echo $row['nRadicado'];?> </td>
		<td align="center" > <?php echo $row['receptor'];?> </td>
		<td align="center" > <?php echo $row['remitente'];?></td>
		<td align="center" > <?php echo $row['nGuia'];?> </td>	
		<td align="center" > <?php echo $row['fecha'];?> </td>	
		<td align="center" > <?php echo $row['hora'];?> </td>	
	</tr>

	<?php
}
?>	
</table>
    </body>
</html>
