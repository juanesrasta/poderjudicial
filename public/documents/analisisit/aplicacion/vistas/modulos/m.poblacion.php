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
            <a href="index.php?ctl=inicio">Inicio</a> &nbsp;/&nbsp; <span>Trabajos</span>
        </div>
		<div class="row-fluid">
		<div class="span12" id="divMain">
				<div class="row-fluid">
					<div class="span12" style="text-align: justify;">
						<h3>Población</h3>
						<hr>
						<ul class="nav nav-tabs">
							<li class="active"><a href="#home" data-toggle="tab"><i class="icon-star">Distribución Poblacional</i></a></li>
							<li><a href="#profile" data-toggle="tab"><i class="icon-star"></i> 
								Población alfabeta</a>
							</li>
							<li><a href="#settings" data-toggle="tab"><i class="icon-star"></i> Acceso a la Tecnología</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="home">
								<div class="span4" style="text-align: justify; margin-top:8%;">
									<p>
										Venezuela exhibe una larga tradición censal. Así puede establecerse que en el
										último cuarto del siglo XIX se levantaron 3 censos; durante el siglo XX se realizan
										9 censos y en el presente siglo se han realizado 2 censos. La historia estadística
										documental del país, desde la colonia hasta 1873, se sostiene sobre opiniones y
										estimaciones de expertos funcionarios gubernamentales y reconocidos viajeros,
										quienes proporcionaban para la época referencias demográficas sobre el estado
										de la población del país.
									</p>
								</div>
								<div class="span8" style="text-align: justify;" id="gpoblacion">
									
								</div>
							</div>
							<div class="tab-pane fade" id="profile">
								<div class="span4" style="text-align: justify; margin-top:8%;">
									<p>
										La población censada de 10 a 24 años, presentó una tasa de alfabetismo de
										97,5%; el alfabetismo de la población empadronada entre 25 y 54 años, se ubicó
										en 96,2% y la población mayor de 54 años presenta una tasa de alfabetismo de
										86,4%. Al observar el Gráfico 4.1. la tendencia de cambios en las tasas de
										alfabetismo encontramos un aumento de personas alfabetas en todas las edades y
										de manera especial en la población mayor de 55 años.
									</p>
								</div>
								<div class="span7" style="text-align: justify;" id="alfab">
									
								</div>
							</div>
							<div class="tab-pane fade" id="settings">
								<div class="tab-pane fade in active" id="home">
									<div class="span4" style="text-align: justify; margin-top:6%;">
										<p>
											En el Censo 2011 fueron empadronados un total de 7.162.117 hogares en
											Venezuela, 1.900.915 hogares más que los registrados en 2001. Con respecto a la
											disponibilidad de tecnologías en el hogar para los dos últimos censos, se puede
											observar que en 2011 se presentan avances importantes en relación al censo
											2001.
											El número de hogares con disponibilidad de Computadora en 2001 era
											aproximadamente de 700 mil hogares, para 2011 este número aumento en 2.2
											millones de hogares más.
										</p>
									</div>
									<div class="span7" style="text-align: justify;" id="gacceso_tec">
										
									</div>
								</div>
							</div>
						</div>
						<br />                   
						<br />
				</div>	
				<div id="footerInnerSeparator"></div>
				<div class="span12">
					<small><strong><i>Datos del Instituto Nacional de Estadísticas</i></strong></small>
				</div>
			</div>
            <!--End Main Content-->
		</div>
		</div>
        <div id="footerInnerSeparator"></div>
    </div>
	<script>
		$(document).ready(function(){
			$("#gpoblacion").load("index.php?ctl=gpoblacion");
			removerClass();
			addClass(3);
		});
	</script>
</div>
<?php 
	$contenido = ob_get_clean()
?>
<?php include("aplicacion/vistas/layout.php");
?>	