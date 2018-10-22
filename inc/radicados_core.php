<?php

class radicados {
	private $self_file = 'radicados_core.php';
	private $mysqli = false;
	private $session = false;
	
	public function __construct($m) { $this->mysqli = $m; }
	
	public function set_session_obj($obj) { $this->session = $obj; }
	
	public function get_radicados($page, $radicados_per_page) {
		$page = stripslashes($page);
		$radicados_per_page = stripslashes($radicados_per_page);
		
		if($page == 0 || $page == 1)
			$x = 0;
		else
			$x = ($radicados_per_page * ($page-1));
		$y = $radicados_per_page;
		
		$res = $this->query("SELECT * FROM cor_radicado ORDER BY id desc" , 'get_radicados()');
		return $res;
	}


	public function get_cat_proy_radicados($catid) {
		$prepared = $this->prepare("SELECT COUNT(*) as c FROM cor_radicado WHERE id_proyect=?", 'get_cat_proy_radicados()');
		$this->bind_param($prepared->bind_param('i', $catid), 'get_cat_proy_radicados()');
		$this->execute($prepared, 'get_cat_proy_radicados()');
		
		$result = $prepared->get_result();
		$row = $result->fetch_object();
		return $row->c;
	}


	public function get_radicados_checkin($page, $radicados_per_page) {
		$page = stripslashes($page);
		$radicados_per_page = stripslashes($radicados_per_page);
		
		if($page == 0 || $page == 1)
			$x = 0;
		else
			$x = ($radicados_per_page * ($page-1));
		$y = $radicados_per_page;
		
		$res = $this->query("SELECT count(*) as `numero`, remitente   FROM `cor_radicado` group by remitente  
ORDER BY `numero`  ASC", 'get_radicados_checkin()');
		return $res;
	}


	
	public function count_radicados() {
		$res = $this->query("SELECT COUNT(*) as c FROM cor_radicado", 'count_radicados()');
		$obj = $res->fetch_object();
		return $obj->c;
	}

	public function count_radicados2() {
		$res = $this->query("SELECT COUNT(*) as c FROM cor_radicado", 'count_radicados()');
		$obj = $res->fetch_object();
		return $obj->c;
	}


	public function get_radicado() {
		$res = $this->query("SELECT LEFT(nRadicado, 12) as cuenta FROM `cor_radicado` ORDER BY `id` DESC LIMIT 1", 'get_radicado()');
		$obj = $res->fetch_object();
		return $obj->cuenta;
	}
	public function get_radicado2() {
		$res = $this->query("SELECT LEFT(nradicado, 12) as cuenta FROM `cor_radicado` ORDER BY `id` DESC LIMIT 1", 'get_radicado2()');
		$obj = $res->fetch_object();
		return $obj->cuenta;
	}
	
	public function count_radicados_search($string) {
		$s = "%$string%";
		$prepared = $this->prepare("SELECT COUNT(*) as c FROM cor_radicado WHERE id LIKE ? OR archivo LIKE ? OR caras LIKE ? OR tamaño LIKE ? OR desde LIKE ? OR hasta LIKE ? OR descripcion LIKE ? OR date_added LIKE ? OR id_proyect LIKE ?", 'count_radicados_search()');
		$this->bind_param($prepared->bind_param('sssssssss', $s, $s, $s, $s, $s, $s, $s, $s, $s), 'count_radicados_search()');
		$this->execute($prepared, 'count_radicados_search()');
		
		$result = $prepared->get_result();
		$row = $result->fetch_object();
		return $row->c;
	}
	
	public function search($string, $page, $radicados_per_page) {
		$s = "%$string%";
		if($page == 0 || $page == 1)
			$x = 0;
		else
			$x = ($radicados_per_page * ($page-1));
		$y = $radicados_per_page;
		
		$prepared = $this->prepare("SELECT * FROM cor_radicado WHERE id LIKE ? OR archivo LIKE ? OR caras LIKE ? OR tipo LIKE ? OR desde LIKE ? OR hasta LIKE ? OR descripcion LIKE ? OR date_added LIKE ? OR id_proyect LIKE ? ORDER BY id ASC LIMIT $x,$y", 'search()');
		$this->bind_param($prepared->bind_param('ssssssssss', $s, $s, $s, $s, $s, $s, $s, $s, $s), 'search()');
		$this->execute($prepared, 'search()');
		
		$result = $prepared->get_result();
		return $result;
	}


		public function get_users_name($id) {
		$prepared = $this->prepare("SELECT username FROM cor_users WHERE id=?", 'get_users_name()');
		$this->bind_param($prepared->bind_param('i', $id), 'get_users_name()');
		$this->execute($prepared, 'get_users_name()');
		
		$result = $prepared->get_result();
		$row = $result->fetch_object();
		
		return $row->username;
	}
	public function get_correo($id) {
		$prepared = $this->prepare("SELECT correo FROM cor_receptor WHERE receptor=?", 'get_correo()');
		$this->bind_param($prepared->bind_param('s', $id), 'get_correo()');
		$this->execute($prepared, 'get_correo()');
		
		$result = $prepared->get_result();
		$row = $result->fetch_object();
		
		return $row->correo;
	}
	
		public function new_radicado($receptor, $remitente, $guia) {	
	$receptor= ucwords($receptor);
	$remitente= ucwords($remitente);
	$fecha= date('Y-m-d');
	$mes= date('m');
	$año= date('Y');
	$hora = date_default_timezone_set('America/Bogota'); 
	$hora= date('H:i:s');
	$radicado = $this->get_radicado();
	$radicado = $radicado+1;
	$numeroConCeros = str_pad($radicado, 5, "0", STR_PAD_LEFT);

		$prepared = $this->prepare("INSERT INTO `cor_radicado`(`nRadicado`, `receptor`, `remitente`, `nGuia`, `fecha`, `hora`)  VALUES (?,?,?,?,?,?)", 'new_radicado()');
		$this->bind_param($prepared->bind_param('ssssss', $numeroConCeros, $receptor, $remitente, $guia, $fecha, $hora), 'new_radicado()');
		$this->execute($prepared, 'new_radicado()');
		
		return true;
	}
	// 		public function new_radicado($asunto, $radicado) {	
	// $fecha= date('Y-m-d');
	// $hora = date_default_timezone_set('America/Bogota'); 
	// $hora= date('H:i:s');
	// $radicado = $this->get_radicado2();
	// $radicado = $radicado+1;
	// $numeroConCeros = str_pad($radicado, 5, "0", STR_PAD_LEFT);

	// 	$prepared = $this->prepare("INSERT INTO `cor_radicado`(`asunto`, `nradicado`, `fecha`, `hora`)  VALUES (?,?,?,?)", 'new_radicado()');
	// 	$this->bind_param($prepared->bind_param('ssss', $asunto, $numeroConCeros, $fecha, $hora), 'new_radicado()');
	// 	$this->execute($prepared, 'new_radicado()');
		
	// 	return true;
	// }
	
	// public function get_radicado($radicadoid) {
	// 	$prepared = $this->prepare("SELECT * FROM cor_radicado WHERE id=?", 'get_radicado()');
	// 	$this->bind_param($prepared->bind_param('i', $radicadoid), 'get_radicado()');
	// 	$this->execute($prepared, 'get_radicado()');
		
	// 	$result = $prepared->get_result();
	// 	$row = $result->fetch_object();
		
	// 	return $row;
	// }

	public function get_radicadou($radicadoid) {
		$res= $this->query("SELECT * FROM cor_radicado WHERE usuario=$radicadoid", 'get_radicadou()');

		return $res;

	}
	public function get_radicadop($remitente) {
		$res= $this->query("SELECT * FROM cor_radicado WHERE remitente='$remitente'", 'get_radicadop()');

		return $res;

	}

	public function update_estado($id) {

		// First, update the radicado
			$prepared = $this->prepare("UPDATE cor_radicado SET estado = 1 WHERE nRadicado=?", 'update_estado()');
			$this->bind_param($prepared->bind_param('i', $id), 'update_estado()');
			$this->execute($prepared, 'update_estado()');

		return true;
	}

	public function update_radicado($radid, $asunto) {
		$prepared = $this->prepare("UPDATE cor_radicado SET asunto=? WHERE id=?", 'update_radicado()');
		$this->bind_param($prepared->bind_param('si', $asunto, $radid), 'update_radicado()');
		$this->execute($prepared, 'update_radicado()');
		return true;
	}

	public function get_radicadoss($itemid) {
		$prepared = $this->prepare("SELECT * FROM cor_radicado WHERE id=?", 'get_radicadoss()');
		$this->bind_param($prepared->bind_param('i', $itemid), 'get_radicadoss()');
		$this->execute($prepared, 'get_radicadoss()');
		
		$result = $prepared->get_result();
		$row = $result->fetch_object();
		
		return $row;
	}
	
	public function parse_price($p) {
		return $p;
	}
	
	
	/***
	  *  Private functions
	  *
	***/
	private function prepare($query, $func) {
		$prepared = $this->mysqli->prepare($query);
		if(!$prepared)
			die("Couldn't prepare query. inc/{$this->self_file} - $func");
		return $prepared;
	}
	private function bind_param($param, $func) {
		if(!$param)
			die("Couldn't bind parameters. inc/{$this->self_file} - $func");
		return $param;
	}
	private function execute($prepared, $func) {
		$exec = $prepared->execute();
		if(!$exec)
			die("Couldn't execute query. inc/{$this->self_file} - $func");
		return $exec;
	}
	private function query($query, $func) {
		$q = $this->mysqli->query($query);
		if(!$q)
			die("Couldn't run query. inc/{$this->self_file} - $func");
		return $q;
	}
	public function __destruct() {
		if(is_resource($this->mysqli) && get_resource_type($this->mysqli) == 'mysql link')
			$this->mysqli->close();
	}
}

$_radicados = new radicados($mysqli);