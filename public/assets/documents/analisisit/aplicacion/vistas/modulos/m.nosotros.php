<?php
ob_start();
?>
<div class="row-fluid">
    <div class="span12">
        <div id="contentInnerSeparator"></div>
    </div>
</div>
<div class="contentArea">
    <div class="divPanel notop page-content">
		<div class="breadcrumbs">
            <a href="index.php?ctl=inicio">Inicio</a> &nbsp;/&nbsp; <span>Nosotros</span>
        </div>
		<div class="row-fluid">
			<div class="span12" id="divMain">
			<h3>Nosotros</h3>
						<hr>
				<div class="row-fluid">
					<div class="span12" style="text-align: justify;">
						<section class="rw-wrapper">
							<h6 class="rw-sentence">
								<div class="rw-words rw-words-1">
									<span>Análisis de Datos</span>
									<span>Desarrollo Web</span>
									<span>Gestión Empresarial</span>
									<span>Organización</span>
									<span>Desarrollo</span>
									<span>Producción</span>
								</div>
							</h6>
						</section>
						<br />
						<br />
						<p><i>Somos una empresa:</i>
							constituida por jovenes especialistas en el área de las Tecnologías de Información
							e investigadores que trabajan en los campos de las Ciencias Sociales y Experimentales.
							En Análisis IT tenemos la misión de generar soluciones que impacten de manera positiva en la toma de decisiones,
							el desarrollo y mejora de los procesos productivos y/o empresariales de nuestros aliados. 
							Haciendo uso de los distintos métodos, técnicas y herramientas que nos brindan la estadistica y la informática.
						</p>
						<p>
							<i>Nuestros valores</i> se fundamentan en la calidad, fiabilidad, capacidad de respuesta, credibilidad,  
							profesionalismo, compromiso y ética. Nos esforzamos a diario por mantener la fidelidad de nuestros 
							aliados lo cual es una garantía de calidad y de satisfacción mutua. 
						</p>
						<h2><i>Nuestros métodos se basan en:</i></h2>
					</div>
				</div>
				<!--<div class="span12" id="divMain">
					<h1>Nuestros métodos se basan en</h1>
				</div>-->
				<br />
				<div class="row-fluid">
					<div class="span4" >
						<div class="box">
							<i class="icon-group"></i>
							<h4 class="title"><b>Organización</b></h4> <hr/>
							<p style="text-align: justify;" >
								Determinar los requerimientos del cliente.
								Definición de estrategias.
								Conformar el equipo de trabajo.
								Controlar el trabajo en equipo para garantizar el cumplimiento del plan de trabajo previamente acordado.
								Identificar los datos potencialmente útiles.
								Diseñar y crear bases de datos y  de recogida de datos.
								Depurar y validar las bases de datos.
								Asumir compromiso.
							</p>
						</div>
					</div>
					<div class="span4" >
						<div class="box">
							<i class="icon-cog"></i>
							<h4 class="title"><b>Desarrollo</b></h4> <hr/>
							<p style="text-align: justify;">
								Realizar estudios exploratorios con el objetivo de describir, identificar, clasificar y explotar la información contenida en la base de datos.
								Aplicar los métodos estadísticos para analizar e interpretar datos cuantitativos y cualitativos provenientes de bases de datos o de datos a introducir.
								Desarrollar prototipos que cumplan de forma integra con los requrimientos y compromisos asumidos.
							</p>
						</div>
					</div>
					<div class="span4">
						<div class="box">
							<i class="icon-share"></i>
							<h4 class="title"><b>Producción o Presentación</b></h4> <hr/>
							<p style="text-align: justify;">
								Realizar la implementación de la solución alcanzada.
								Mostrar los resultados en tablas y gráficos.
								Presentar, evaluar y discutir los objetivos alcanzados.
								Hacer seguimiento con el fin de detectar posibles fallas.
								Elaborar y desarrollar planes de trabajo a largo plazo.
								Brindar soporte y mantenimiento a la solución tecnológica realizada. 
							</p>
						</div>
					</div>
				</div>	
			</div>
            <!--End Main Content-->
		</div>
        <div id="footerInnerSeparator"></div>
    </div>
	<script>
		$(document).ready(function(){
			removerClass();
			addClass(1);
		});
	</script>
</div>
<?php 
	$contenido = ob_get_clean()
?>
<?php include("aplicacion/vistas/layout.php");
?>	