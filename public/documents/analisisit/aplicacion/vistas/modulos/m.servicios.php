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
            <a href="index.php?ctl=inicio">Inicio</a> &nbsp;/&nbsp; <span>Servicios</span>
        </div>
		<div class="row-fluid">
			<div class="span12" id="divMain">
				<h3>Servicios</h3>
				<hr />				
				<div class="row-fluid">
					<div class="span12" style="text-align: justify;">
						<p><span>En <i>Análisis IT, </i>
							Ponemos a su disposición
							nuestra experiencia en:</span>
						</p>
						<p>
							<i class="icon-star"></i>&nbsp;&nbsp;Desarrollo de Aplicaciones Web.<br />
							Nuestro servcio de <i>Desarrollo de Aplicaciones Web</i> está orientado a la construccion de 
							sistemas complejos, bajo la implementación de las técnicas (DAS), con el fin hallar soluciones a problemas específicos.
							Nos adaptamos a sus necesidades corporativas permitiéndole agilizar los procesos internos, realizar un marketing directo con
							nuevos mercados o crear la fidelización de sus clientes manteniendo siempre el contacto con ellos.

							<br />
							<br />
							<i class="icon-star"></i>&nbsp;&nbsp;Sistemas de Gestión Empresarial.<br />
							Con nuestros productos <i>Gestión empresarial IT, Nómina IT</i> , contribuimos en la mejora de los procesos administrativos de las 
							empresas, poniendo a su disposición una serie módulos funcionales que le permitira realizar operaciones de:
							Bancos, Facturación, Cuentas por Cobrar, Cuentas por Pagar, Cobranza, Pagos, Inventario y demas operaciones relacionadas a pago de nómina.
						</p>
					</div>
					<br />
				</div>
				
				<div class="row-fluid">
					<div class="span4" style="text-align:justify; margin-top:5%;">
						<p><i class="icon-star"></i>&nbsp;&nbsp;Análisis de Datos.<br />
							Nuestro servicio de <i>Anális de Datos: </i>lo fundamentamos en la aplicación de un conjunto
							de técnicas o métodos estadísticos cuya finalidad es analizar simultáneamente información relativa 
							a una o varias variables para cada individuo o elemento estudiado. 
							Entre los propósitos de estas técnicas, podemos citar, por ejemplo:
							Describir información de forma resumida.
							Agrupar observaciones o variables en subconjuntos homogéneos, 
							Explorar la existencia de asociaciones entre variables,
							Explicar (o probar) comportamientos. ect.
						</p>
					</div>
					<div class="span8" style="">
						<section class="rw-wrapper">
							<div class="span12" style="min-width: 310px; height: 400px; margin: 0 auto" id="graficar">
								<!--<img src="aplicacion/vistas/slider-images/serv1.png" alt="" />-->
							</div>
						</section>
					</div>
				</div>
				<div id="footerInnerSeparator"></div>
			</div>
            <!--End Main Content-->
		</div>
        <div id="footerInnerSeparator"></div>
    </div>
	<script src="aplicacion/vistas/graficas/g.servicios.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
			//$("#venexport").load("index.php?ctl=GCifras");
			removerClass();
			addClass(2);
			var i=0;
			graficasServicios3();
			for(var a=0; a<4; a++){
				setInterval(function () {
					i ++;
					if(i<4){
						graficasServicios0();
					}else if(i > 4 && i<=8){
						graficasServicios1();
					}else if(i > 4 && i<=12 ){
						graficasServicios2();
					}else if(i > 12 ){
						graficasServicios3();
					}
					if(i>=16){
						 i=0;
					}
					console.log(i);
				}, 1000*3);
			}
		});		
	</script>
</div>
<?php 
	$contenido = ob_get_clean()
?>
<?php include("aplicacion/vistas/layout.php");
?>	