<?php
class MySQLServer{
	private $hostname;
	private $usuario;
	private $password;
	private $base;

	private $conexion;
	public $error;

	//public function __construct($hostaname, $usuario, $password, $base){
	public function __construct($hostname="localhost", $usuario="root", $password="", $base="analisisit"){
		$this->hostname = $hostname;
		$this->usuario = $usuario;
		$this->password = $password;
		$this->base = $base;
		
		$this->connect();
	}

	private function connect(){
		$this->conexion = mysqli_connect($this->hostname, $this->usuario, $this->password)or die("MALO");
		mysqli_select_db($this->conexion, $this->base);
	}

	public function filtrar($valor){
		$valor = stripslashes($valor);
		$valor = ltrim($valor);
		$valor = rtrim($valor);
		return mysql_real_escape_string($valor);
	}

	public function enviarQuery($query){
		$tipo = strtoupper(substr($query,0,6));
	switch($tipo){
		case 'SELECT':
		$resultado = mysqli_query($this->conexion, $query);
		if($resultado){			
			if(mysqli_num_rows($resultado)==0){
				return false;
			}else{
				while($f = mysqli_fetch_assoc($resultado)){
					$r[] = $f;
				}
				mysqli_free_result($resultado);
				return $r;
			}
		}
		break;

		case 'INSERT':
		$resultado = mysqli_query($this->conexion, $query);
		if(!$resultado){
			$this->error = mysql_error();
		}else {
				mysql_insert_id();
		}
		break;

		case 'UPDATE':
			case 'DELETE':
				$resultado = mysqli_query($this->conexion, $query);
				if(!$resultado){
					$this->error = mysql_error();
				}else{
					return mysql_affected_rows();
				}
		break;

		default:
		$this->error = "consulta no permitida";
		}
	}
	public function __destruct(){
		mysqli_close($this->conexion);
	}
}
?>
		
	