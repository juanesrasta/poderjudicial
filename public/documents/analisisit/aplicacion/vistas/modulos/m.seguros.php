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
						<h3>Seguros en Cifras</h3>
						<hr>
						<ul class="nav nav-tabs">
							<li class="active"><a href="#home" data-toggle="tab"><i class="icon-star">Primas Cobradas</i></a></li>
							<li><a href="#profile" data-toggle="tab"><i class="icon-star"></i>Actividad Aseguradora e Inflaión</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="home">
								<div class="span4" style="text-align: justify; margin-top:8%;">
									<p>
										La producción de Primas Netas Cobradas durante el año 2014, incluyendo el Reaseguro
										Aceptado, se ubicó en 142.544.673 miles de Bs., lo cual representa un incremento en
										valores nominales de 65.05% con respecto al año anterior.
										La composición porcentual de la cartera del sector para los 7 últimos años, se muestra en la
										gráfica siguiente:
									</p>
								</div>
								<div class="span8" style="height:400px; margin-top:1%;" id="primas">
									
								</div>
								<div class="span11" style="text-align: justify; margin-top:5%;">
									Los siguientes gráficos ilustran la participación de las empresas de seguros del mercado
									asegurador venezolano en la producción de Primas Netas Cobradas, destacando las 10
									primeras empresas en el ranking medido a través de la captación de Primas Netas Cobradas,
									para los ramos de: Seguros de Personas, Seguros Patrimoniales y Seguros Obligacionales
									y/o de Responsabilidad:
								</div>
								<div class="span5" style="height:350px; margin-top:1%;" id="primas1">
									
								</div>
								<div class="span6" style="height:350px; margin-top:1%;" id="primas2">
									
								</div>
								<div class="span5" style="height:350px; margin-top:3%;" id="primas3">
									
								</div>
								<div class="span6" style="height:350px; margin-top:3%;" id="primas4">
									
								</div>
								<div class="span7" style="height:400px; margin-top:4%;" id="primas5">
									
								</div>
								<div class="span4" style="text-align: justify; margin-top:5%;">
									<p>
										<h4>Siniestros Pagados</h4>
									Los siguientes gráficos ilustran la participación de las empresas de seguros del mercado
									asegurador venezolano en la producción de Primas Netas Cobradas, destacando las 10
									primeras empresas en el ranking medido a través de la captación de Primas Netas Cobradas,
									para los ramos de: Seguros de Personas, Seguros Patrimoniales y Seguros Obligacionales
									y/o de Responsabilidad:
									</p>
								</div>
							</div>
							<div class="tab-pane fade" id="profile">
								<div class="span11" style="text-align: justify;" id="seginf">
									
								</div>
							</div>
						</div>
						<br />                   
						<br />
				</div>	
				<div id="footerInnerSeparator"></div>
				<div class="span12">
					<small><strong><i>Datos de la Superintendencia de la Actividad Aseguradora</i></strong></small>
				</div>
			</div>
            <!--End Main Content-->
		</div>
		</div>
        <div id="footerInnerSeparator"></div>
    </div>
	<script>
		$(document).ready(function(){
			$("#primas").load("index.php?ctl=gseguros");
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