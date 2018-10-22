<?php

class Home {
	private $self_file = 'home_core.php';
	private $mysqli = false;
	private $session = false;
	
	public function __construct($m) { $this->mysqli = $m; }
	
	public function set_session_obj($obj) { $this->session = $obj; }


public function get_report($interval) {
		if($interval == 'hoy')
			$q = "SELECT * FROM cor_correspondencia WHERE DATE(fecha) = DATE(NOW())";
		elseif($interval == 'Esta Semana')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha > DATE_SUB(NOW(), INTERVAL 1 WEEK)";
		elseif($interval == 'Este Mes')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha > DATE_SUB(NOW(), INTERVAL 1 MONTH)";
		elseif($interval == 'Este Año')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha > DATE_SUB(NOW(), INTERVAL 1 YEAR)";

		elseif($interval == 'enero')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha LIKE'%-01-%'";
		elseif($interval == 'febrero')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha LIKE'%-02-%'";
		elseif($interval == 'marzo')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha LIKE'%-03-%'";
		elseif($interval == 'abril')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha LIKE'%-04-%'";
		elseif($interval == 'mayo')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha LIKE'%-05-%'";
		elseif($interval == 'junio')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha LIKE'%-06-%'";
		elseif($interval == 'julio')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha LIKE'%-07-%'";
		elseif($interval == 'agosto')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha LIKE'%-08-%'";
		elseif($interval == 'septiembre')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha LIKE'%-09-%'";
		elseif($interval == 'octubre')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha LIKE'%-10-%'";
		elseif($interval == 'noviembre')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha LIKE'%-11-%'";
		elseif($interval == 'diciembre')
			$q = "SELECT * FROM cor_correspondencia WHERE fecha LIKE'%-12-%'";

		elseif($interval == 'Todo')
			$q = "SELECT * FROM cor_correspondencia";
		
		else
			$q="SELECT * FROM cor_correspondencia";
		return $q;
	}
	public function fechar($fecha1, $fecha2) {
		$res= "SELECT * from `cor_correspondencia` where fecha between '2018-$fecha1-01' And '2018-$fecha2-31'";
		return $res;
	}
	
	public function get_new_items($interval) {
		if($interval == 'hoy')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE DATE(fecha) = DATE(NOW())";
		elseif($interval == 'Esta Semana')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha > DATE_SUB(NOW(), INTERVAL 1 WEEK)";
		elseif($interval == 'Este Mes')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha > DATE_SUB(NOW(), INTERVAL 1 MONTH)";
		elseif($interval == 'Este Año')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha > DATE_SUB(NOW(), INTERVAL 1 YEAR)";


		elseif($interval == 'enero')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha LIKE'%-01-%'";
		elseif($interval == 'febrero')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha LIKE'%-02-%'";
		elseif($interval == 'marzo')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha LIKE'%-03-%'";
		elseif($interval == 'abril')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha LIKE'%-04-%'";
		elseif($interval == 'mayo')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha LIKE'%-05-%'";
		elseif($interval == 'junio')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha LIKE'%-06-%'";
		elseif($interval == 'julio')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha LIKE'%-07-%'";
		elseif($interval == 'agosto')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha LIKE'%-08-%'";
		elseif($interval == 'septiembre')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha LIKE'%-09-%'";
		elseif($interval == 'octubre')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha LIKE'%-10-%'";
		elseif($interval == 'noviembre')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha LIKE'%-11-%'";
		elseif($interval == 'diciembre')
			$q = "SELECT count(*) as c FROM cor_correspondencia WHERE fecha LIKE'%-12-%'";


		elseif($interval == 'Todo')
			$q = "SELECT count(*) as c FROM cor_correspondencia";
		else
			$q = "SELECT count(*) as c FROM cor_correspondencia";
		
		$res = $this->query($q, 'get_new_items()');
		$obj = $res->fetch_object();
		return $obj->c;
	}
	
	
	public function get_checked_in($interval) {
		if($interval == 'hoy')
			$q = "SELECT count(id) as s FROM cor_correspondencia WHERE DATE(fecha) = DATE(NOW())";
		elseif($interval == 'Esta Semana')
			$q = "SELECT count(id) as s FROM cor_correspondencia WHERE DATE(fecha) > DATE_SUB(NOW(), INTERVAL 1 WEEK)";
		elseif($interval == 'Este Mes')
			$q = "SELECT count(id) as s FROM cor_correspondencia WHERE DATE(fecha) > DATE_SUB(NOW(), INTERVAL 1 MONTH)";
		elseif($interval == 'Este Año')
			$q = "SELECT count(id) as s FROM cor_correspondencia WHERE DATE(fecha) > DATE_SUB(NOW(), INTERVAL 1 YEAR)";


		elseif($interval == 'enero')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-01-%'";
		elseif($interval == 'febrero')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-02-%'";
		elseif($interval == 'marzo')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-03-%'";
		elseif($interval == 'abril')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-04-%'";
		elseif($interval == 'mayo')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-05-%'";
		elseif($interval == 'junio')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-06-%'";
		elseif($interval == 'julio')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-07-%'";
		elseif($interval == 'agosto')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-08-%'";
		elseif($interval == 'septiembre')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-09-%'";
		elseif($interval == 'octubre')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-10-%'";
		elseif($interval == 'noviembre')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-11-%'";
		elseif($interval == 'diciembre')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-12-%'";



		elseif($interval == 'Todo')
			$q = "SELECT count(id) as s FROM cor_correspondencia";

		else
			$q = "SELECT count(id) as s FROM cor_correspondencia";
		
		$res = $this->query($q, 'get_checked_in()');
		$obj = $res->fetch_object();
		if($obj->s == '')
			return 0;
		return $obj->s;
	}
	
	public function get_checked_out($interval) {
		if($interval == 'hoy')
			$q = "SELECT count(id) as s FROM cor_correspondencia WHERE  DATE(fecha) = DATE(NOW())";
		elseif($interval == 'Esta Semana')
			$q = "SELECT count(id) as s FROM cor_correspondencia WHERE  DATE(fecha) > DATE_SUB(NOW(), INTERVAL 1 WEEK)";
		elseif($interval == 'Este Mes')
			$q = "SELECT count(id) as s FROM cor_correspondencia WHERE  DATE(fecha) > DATE_SUB(NOW(), INTERVAL 1 MONTH)";
		elseif($interval == 'Este Año')
			$q = "SELECT count(id) as s FROM cor_correspondencia WHERE  DATE(fecha) > DATE_SUB(NOW(), INTERVAL 1 YEAR)";


		elseif($interval == 'enero')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-01-%'";
		elseif($interval == 'febrero')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-02-%'";
		elseif($interval == 'marzo')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-03-%'";
		elseif($interval == 'abril')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-04-%'";
		elseif($interval == 'mayo')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-05-%'";
		elseif($interval == 'junio')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-06-%'";
		elseif($interval == 'julio')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-07-%'";
		elseif($interval == 'agosto')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-08-%'";
		elseif($interval == 'septiembre')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-09-%'";
		elseif($interval == 'octubre')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-10-%'";
		elseif($interval == 'noviembre')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-11-%'";
		elseif($interval == 'diciembre')
			$q = "SELECT count(*) as s FROM cor_correspondencia WHERE fecha LIKE'%-12-%'";
		
		elseif($interval == 'Todo')
			$q = "SELECT count(id) as s FROM cor_correspondencia";
		else
			$q = "SELECT count(id) as s FROM cor_correspondencia";

		$res = $this->query($q, 'get_checked_out()');
		$obj = $res->fetch_object();
		if($obj->s == '')
			return 0;
		return $obj->s;
	}
	
	
	
	
	public function general_registered_items() {
		$res = $this->query("SELECT COUNT(*) as c FROM cor_correspondencia", 'general_registered_items()');
		$obj = $res->fetch_object();
		return $obj->c;
	}
	
	

	
	
	public function general_warehouse_value() {
		$res = $this->query("SELECT SUM(qty*price) as s FROM cor_correspondencia", 'general_warehouse_value()');
		$obj = $res->fetch_object();
		if($obj->s == '')
			return 0;
		return $this->parse_cost($obj->s);
	}
	
	public function general_warehouse_checked_out() {
		$res = $this->query("SELECT SUM((fromqty-toqty)*fromprice) as s FROM invento_logs WHERE `type`=2", 'general_warehouse_checked_out');
		$obj = $res->fetch_object();
		if($obj->s == '')
			return 0;
		return $this->parse_cost($obj->s);
	}
	
	public function parse_cost($p) {
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

$_home = new Home($mysqli);