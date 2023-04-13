<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <!--<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Actualizacion de registros">
	<meta name="keywords" content="" />
    <meta name="author" content="Juan Carlos Villegas">
	<link href="aplicacion/vistas/css/css/bootstrap.css" rel="stylesheet">
	<link href="aplicacion/vistas/css/bootstrap.js" rel="stylesheet">
	<link rel="stylesheet" href="aplicacion/vistas/css/estiloActualiza.css" media="all">
	<script src="aplicacion/vistas/js/AjaxAsinc.js"></script>	
	<script src="aplicacion/vistas/js/validate.js"></script>	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script>
	/*	$(document).ready(function(){
			$("#btn-actualiza").click(function(){
				var matricula = $("#matricula").attr('value');
				var nomb_estudiante = $("#nombE").attr('value');
				var apellido_estudiante = $("#apellidoE").attr('value');
				var sexo = $("#sexo").attr('value');
				var ci_estudiante = $("#cedula").attr('value');
				var ciudad_nacimiento = $("#ciudad").attr('value');
				var estado = $("#estado").attr('value');
				var fecha_nacimiento = $("#fecha").attr('value');
				var grado = $("#grado").val();
				var seccion = $("#seccion").attr('value');
				var ci_representante = $("#cedulaR").attr('value');
				var nomb_representante = $("#representante").attr('value');
				var direccion = $("#direccion").attr('value');
				var tlf1 = $("#tlf1").attr('value');
				var tlf2 = $("#tlf2").attr('value');
				var tlf3 = $("#tlf3").attr('value');
				var correo = $("#correo").attr('value');
				alert(seccion);
			//	evento.preventDefault();
				//$("#contenido").load("index.php?ctl=Actualizar", {
					//matricula:matricula, nomb_estudiante:nomb_estudiante, apellido_estudiante:apellido_estudiante,
					//sexo:sexo, ci_estudiante:ci_estudiante, ciudad_nacimiento:ciudad_nacimiento, estado:estado, fecha_nacimiento:fecha_nacimiento,
					//grad:grad, seccion:seccion, ci_representante:ci_representante, nomb_representante:nomb_representante, direccion:direccion,
					//tlf1:tlf1, tlf2:tlf2, tlf3:tlf3, correo:correo}, function(){
				//});
			});
		})*/
	</script>
	<!-- se emplea para traducir los del calendario incluido en el fornmulario -->
	<script>
		$.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: '<Ant',
		nextText: 'Sig>',
		currentText: 'Hoy',
		monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
		dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
		dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
		weekHeader: 'Sm',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''
		};
		$.datepicker.setDefaults($.datepicker.regional['es']);
		$(function () {
		$("#fecha").datepicker();
		});
	</script>
    <title>Sistema de Actualizacion de datos</title>
</head>
<body>
<div class="container" id="contenedor">
	<div class="col-sm-12">
		<!--<img src="aplicacion/vistas/img/header.png" width="300" class="img-responsive" />-->
	</div>
	<br>
	<div class="col-sm12" id="tituloheader">
		<p>Sistema de Actualizaci&oacute;n de Datos</p>
	</div>
	<div class="col-sm-12" id="contenido">
		<?php echo $contenido;?>
		
	</div>
	<div class="col-sm-12" id="footer">
		<p>
			<strong>Colegio Fray Luis de Le&oacute;n</strong>
		</p>
	</div>
</div>
</body>

</html>
