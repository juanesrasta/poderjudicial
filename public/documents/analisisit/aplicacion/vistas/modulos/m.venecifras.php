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
						<h3>Venezuela en Cifras 2015</h3>
						<hr>
						<ul class="nav nav-tabs">
							<li class="active"><a href="#home" data-toggle="tab"><i class="icon-star">Evolución de las Exportaciones</i></a></li>
							<li><a href="#home1" data-toggle="tab"><i class="icon-star">Evolución de las Importaciones</i></a></li>
							<li><a href="#profile" data-toggle="tab"><i class="icon-star"></i>Evolución del PIB</a></li>
							<li><a href="#settings" data-toggle="tab"><i class="icon-star"></i>Movimientos Portuarios</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="home">
								<div class="span4" style="text-align: justify; margin-top:8%;">
									<p>
										La dependencia del petróleo ha aumentado progresivamente.
										Las exportaciones no-petroleras en 1998 eran 31.2% del total,
										mientras que en 2007 fueron 9.2%, 6.3% en 2008, 5.9% en 2009,
										5.2% en 2010, 5.0% en 2011, 3.9% en 2012, 3.8% en 2013, 4.0% 
										en 2014 y 5.7% en ene-sept 2015
									</p>
								</div>
								<div class="span8" style="text-align: justify;" id="venexport">
									
								</div>
							</div>
							<div class="tab-pane fade" id="home1">
									<div class="span4" style="text-align: justify; margin-top:6%;">
										<p>
											Las importaciones en 2009 fueron de 41.611 MM$, 19% menores que en 2008, mientras que en 2010 
											fueron similares a las de 2009
											En 2011 fueron 26% mayores que las de 2010 (52.575 MM$ vs. 41.734 M$)
											En 2012 alcanzaron un record histórico de 65.951 MM$ !!! (25% mayores que en 2011)
											En 2013 disminuyeron en 13% vs. 2012. En 2014 fueron 17% menores que en 2013. En 2015 fueron 22% inferiores vs. 2014
										</p>
									</div>
									<div class="span7" style="text-align: justify;" id="venimport">
										
									</div>
							</div>
							<div class="tab-pane fade" id="profile">
								<div class="span4" style="text-align: justify; margin-top:8%;">
									<p>
										En 2011 el PIB del sector fue de 2.053 millardos de Bs (2.053 millones BsF),
										cifra superior en 5.8% a la de 2010.
										En 2012 alcanzó un record histórico de 2.188 millardos de Bs (2.188 millones BsF), 
										cifra superior en 6.6% a la de 2011.
										En 2013 disminuyó 3.3% respecto a 2012; en 2014 fue 7.2% inferior respecto a 2013
										y en ene-sept 2015 fue 6.9% inferior a ene-sept 2014
									</p>
								</div>
								<div class="span7" style="text-align: justify;" id="evol_pib">
									
								</div>
							</div>
							<div class="tab-pane fade" id="settings">
									<div class="span4" style="text-align: justify; margin-top:6%;">
										<p>
											Comprende los movimientos de mercancia en los puertos de Venezuela
											durante el periódo 1998-2007, expresado en miles de toneladas.
											<br />
											<br />
											<small><strong><i>Datos de la CEPAL</i></strong></small>
										</p>
									</div>
									<div class="span7" style="text-align: justify;" id="mov_port">
										
									</div>
							</div>
						</div>
						<br />                   
						<br />
				</div>	
				<div id="footerInnerSeparator"></div>
				<div class="span12">
					<small><strong><i>Datos del Banco Central de Venezauela</i></strong></small>
				</div>
			</div>
            <!--End Main Content-->
		</div>
		</div>
        <div id="footerInnerSeparator"></div>
    </div>
	<script>
		$(document).ready(function(){
			$("#venexport").load("index.php?ctl=gcifras");
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