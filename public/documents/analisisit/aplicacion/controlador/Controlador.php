<?php
class Controller{
//carga el modulo Inicio
	public function inicio(){
		require("aplicacion/vistas/modulos/m.inicio.php");
	} 
	
	public function nosotros(){
		require("aplicacion/vistas/modulos/m.nosotros.php");
	}
	
	public function servicios(){
		require("aplicacion/vistas/modulos/m.servicios.php");
	} 
	
	public function poblacion(){
		require("aplicacion/vistas/modulos/m.poblacion.php");
	} 
	
	public function listarPoblacion(){
		
		echo json_encode($datos);
	}
	
	public function gpoblacion(){
		$sql = new Modelo();
		$poblacion = $sql->consultaPoblacion();
		$alfabetismo = $sql->consultaAlfabetismo();
		$accesot = $sql->consultaAccesoTecnologia();
		$i=0;
		$total=0;
		//////////ARRAY POBLACION///////////
		foreach($poblacion as $pob){
			$esta[$i] = "'".$pob["estado"]."'";
			$pobla[$i] = str_replace(".","",$pob["poblacion1"]);
			$total += $pobla[$i];
			$i++;
		}
		
		////////////ARRAY ALFABETISMO//////////////
		$j=0;
		foreach($alfabetismo as $alf){
			if(substr($alf["rango"],0,2) == 10){
				$porc[$j] = $alf["porcentaje"];
			}elseif(substr($alf["rango"],0,2) == 25){
				$porc1[$j] = $alf["porcentaje"];
			}else{
				$porc2[$j] = $alf["porcentaje"];
			}
			
			$anyo[$j] = $alf["anyo"];
			$j++;
		}
		
		/////////ARRAY TECNOLOGIA//////
		$c=0;
		foreach($accesot as $at){
			if($at["categoria"] !=""){
				$catego[$c]="'".$at["categoria"]."'";
			}
			if($at["anyo"] =="2011"){
				$cifra[$c] = $at["cifra"];
			}else{
				$cifra1[$c] = $at["cifra"];
			}
			$c++;
		}
		////////DATOS POBLACION///////
		$estado = implode(",",$esta);
		$poblacion = implode(",",$pobla);
		////////DATOS ALFABETISMO/////
		$porcentaje = implode(",",$porc);
		$porcentaje1 = implode(",",$porc1);
		$porcentaje2 = implode(",",$porc2);
		///////DATOS TECNOLOGIa//////
		$categoria = implode(",",$catego);
		$anyo = implode(",",$anyo);
		$cifras = implode(",",$cifra);
		$cifras1 = implode(",",$cifra1);
		require("aplicacion/vistas/graficas/g.poblacion.php");
	}
	
	public function contacto(){
		require("aplicacion/vistas/modulos/m.contacto.php");
	}
	
	public function venecifras(){
		require("aplicacion/vistas/modulos/m.venecifras.php");
	}
	
	public function gcifras(){
		$sql = new Modelo();
		$exportaciones = $sql->consultaExportaciones();
		$pib = $sql->consultaPIB();
		$importaciones = $sql->consultaImportaciones();
		$mov_portuario = $sql->consultaMovimientoPortuario();
		$e=0;
		foreach($exportaciones as $exp){
			if($exp["tipo_expo"] == "2"){
				$anyo[$e] = "'".$exp["anyo"]."'";
				$expNoPet[$e] = str_replace(".","",$exp["cifra"]);
			}else{
				$expPet[$e] = str_replace(".","",$exp["cifra"]);
			}
			$e++;
		}
		$c=0;
		foreach($pib as $pb){
			$anio_pib[$c] = "'".$pb["anyo"]."'";
			$cifra_pib[$c] = $pb["cifra"];
			$c++;
		}
		
		$im=0;
		foreach($importaciones as $import){
			$imfe[$im] = "'".$import["anyo"]."'";
			$imcif[$im] = str_replace(",","",$import["cifra"]);
			$im ++;
		}
		
		foreach($mov_portuario as $mp){
			$toneladas[] = str_replace(".","",$mp["teus"]);
			$mov_anio[] = $mp["anyo"];
		}
		
		$anyo = implode(",",$anyo);
		$cifrasP = implode(",",$expPet);
		$cifrasNP = implode(",",$expNoPet);
		
		$pib_cifra = implode(",",$cifra_pib);
		$pib_fecha = implode(",",$anio_pib);
		
		$importCifra = implode(",",$imcif);
		$importfecha = implode(",",$imfe);
		
		$teus = implode(",",$toneladas);
		$fech_mov = implode(",",$mov_anio);
		require("aplicacion/vistas/graficas/g.vencifras.php");
	}
	
	public function seguros(){
		require("aplicacion/vistas/modulos/m.seguros.php");
	}
	
	public function gseguros(){
		require("aplicacion/vistas/graficas/g.seguros.php");
	}
	
	public function itnomina(){
		require("aplicacion/vistas/modulos/m.itnomina.php");
	}
	
	public function graficasServicios1(){
		$sql = new Modelo();
		$exportaciones = $sql->consultaExportaciones();
		$e=0;
		foreach($exportaciones as $exp){
			if($exp["tipo_expo"] == "2"){
				$anyo[$e] = "'".$exp["anyo"]."'";
				$expNoPet[$e] = str_replace(".","",$exp["cifra"]);
			}else{
				$expPet[$e] = str_replace(".","",$exp["cifra"]);
			}
			$e++;
		}
		$anyo = implode(",",$anyo);
		$cifrasP = implode(",",$expPet);
		$cifrasNP = implode(",",$expNoPet);
		$datos[] = array("anyo"=>$anyo, "cifrasNP"=>$cifrasNP, "cifrasP"=>$cifrasP);
		echo json_encode($datos);
	}
	
	public function graficasServicios3(){
		$sql = new Modelo();
		$alfabetismo = $sql->consultaAlfabetismo();
		////////////ARRAY ALFABETISMO//////////////
		$j=0;
		foreach($alfabetismo as $alf){
			if(substr($alf["rango"],0,2) == 10){
				$porc[$j] = $alf["porcentaje"];
			}elseif(substr($alf["rango"],0,2) == 25){
				$porc1[$j] = $alf["porcentaje"];
			}else{
				$porc2[$j] = $alf["porcentaje"];
			}
			
			$anyo[$j] = $alf["anyo"];
			$j++;
		}
		////////DATOS ALFABETISMO/////
		$porcentaje = implode(",",$porc);
		$porcentaje1 = implode(",",$porc1);
		$porcentaje2 = implode(",",$porc2);
		$datos = array("anyo"=>$anyo, "porcentaje"=>$porcentaje, "porcentaje1"=>$porcentaje1, "porcentaje2"=>$porcentaje2);
		echo json_encode($datos);
	}
} 
?>