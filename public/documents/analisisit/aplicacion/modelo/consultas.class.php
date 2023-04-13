<?php
class Modelo{
	//metodo de consulta a usuarios registrados en usuarios 2(ES una tabla de pruebas)
	public function consultaPoblacion(){
		$sql = new MySQLSERVER();
		$poblacion=$sql->enviarQuery('SELECT estado, 
		ROUND((REPLACE(poblacion,".","")/(SELECT SUM(REPLACE(poblacion,".","")) FROM poblacion_ven)*100),2) as poblacion, 
		poblacion as poblacion1 FROM poblacion_ven GROUP BY estado ORDER BY estado ASC ');
		return $poblacion;
		$sql->__destruct();
	}
	
	public function consultaAlfabetismo(){
		$sql = new MySQLSERVER();
		$alfabetismo=$sql->enviarQuery('SELECT rango, alfabeta, poblacion, anyo, 
		ROUND((REPLACE(alfabeta,".","")/REPLACE(poblacion,".","")*100),2) as porcentaje 
		FROM alfabetismo');
		return $alfabetismo;
		$sql->__destruct();
	}
	
	public function consultaAccesoTecnologia(){
		$sql = new MySQLSERVER();
		$acceso=$sql->enviarQuery('select DISTINCT ct1.categoria, ROUND(REPLACE(ct.cifra,".","")/REPLACE(ct.total,".","")*100,2) as cifra, ct.anyo 
		FROM censos_tecnologia as ct 
		LEFT JOIN categorias_tecnologia as ct1 USING(id)');
		return $acceso;
		$sql->__destruct();
	}
	
	public function consultaExportaciones(){
		$sql = new MySQLSERVER();
		$exportaciones=$sql->enviarQuery('SELECT *FROM exportven');
		return $exportaciones;
		$sql->__destruct();
	}
	
	public function consultaPIB(){
		$sql = new MySQLSERVER();
		$pib=$sql->enviarQuery('SELECT *FROM pib');
		return $pib;
		$sql->__destruct();
	}
	
	public function consultaImportaciones(){
		$sql = new MySQLSERVER();
		$import=$sql->enviarQuery('SELECT *FROM importven');
		return $import;
		$sql->__destruct();
	}
	
	public function consultaMovimientoPortuario(){
		$sql = new MySQLSERVER();
		$import=$sql->enviarQuery('SELECT *FROM mov_portuario');
		return $import;
		$sql->__destruct();
	}
}
?> 