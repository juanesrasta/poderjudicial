<?php
ob_start();
?>
<div class="divPanel notop nobottom">
	<div class="row-fluid">
		<div class="span12">
			<div id="headerSeparator"></div>
			<div class="camera_full_width">
				<div id="camera_wrap">
					<!--<div data-src="aplicacion/vistas/slider-images/esta1.png" ><div class="camera_caption fadeFromBottom cap2">Acceso a tus datos desde cualquier dispostivo tecnológico.</div></div>-->
					<div data-src="aplicacion/vistas/slider-images/img11.jpg" ><div class="camera_caption fadeFromBottom cap2">Acceso a tus datos desde cualquier dispostivo tecnológico.</div></div>
					<div data-src="aplicacion/vistas/slider-images/img3.jpg" ><div class="camera_caption fadeFromBottom cap2">El trabajo en equipo es la mayor garantia de exito.</div></div>
					<div data-src="aplicacion/vistas/slider-images/img5.png" ><div class="camera_caption fadeFromBottom cap2">más conocimientos, mayor productividad, mejores resultados.</div></div>
					<!--<div data-src="aplicacion/vistas/slider-images/img4.jpg" >
						<div class="camera_caption fadeFromBottom cap2">
							toma tu mejor decisión, forma parte de análisis it y olvídate de las incertidumbres.
						</div>
					</div>-->
				</div>
				<br style="clear:both"/><div style="margin-bottom:40px"></div>
			</div>               
			<div id="headerSeparator2"></div>
		</div>
	</div>
</div>
<div class="contentArea">
    <div class="divPanel notop page-content">
		<div class="row-fluid">
			<div class="span12" id="divMain">
				<div class="row-fluid">
					<div class="span12" style="text-align: justify;">
						<p>A medida que avanza la complejidad de nuestro  mundo, se hace cada vez más difícil tomar decisiones inteligentes y 
						bien documentadas. Con frecuencia tales decisiones deben tomarse con mucho menos que un conocimiento adecuado,
						lo que deriva en una gran incertidumbre. Sin embargo las soluciones a estos problemas son esenciales para lograr mayor bienestar.  
						<i>La estadística y la Informática</i>
							son ciencias que han tenido gran auge en los ultimos tiempos, por la gran
							variedad de aplicaciones que tienen en el campo de la ingeniería, administración, economía, biología, 
							en el ambito financiero y en el área de los costos, además de ser un valioso soporte para la toma de decisiones en
							situaciones de incertidumbre, la automatización de la información y difusión de la misma.
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span7" style="text-align: justify;">
						<p><i>En una forma práctica, </i>
							la ESTADISTICA nos proporciona los metodos cientificos necesarios para la recopilación,
							organización, resumen, representación y ANÁLISIS de DATOS, o hechos que se presenten a una necesaria evaluación numérica;
							tales como: Caracteristicas biológicas o sociológicas, fenómenos físicos, producción, calidad, población, riqueza,
							impuestos, cosechas, rendimientos, ect. Por otra parte, los grandes avances que se han dado en el área Informática 
							nos brinda la posibilidad de hacer de dominio o conocimiento publico, es decir, de difundir los resultados obtenidos
							de los hechos, fenómenos o actividades estudiadas, por tal razón en <i>Análisis IT</i>
							nos hemos propuesto combinar ambas técnicas, a fin de brindar conocimientos de interés fundamental, que contribuyan
							a una mejor toma decisiones y ofrecer soluciones de Negocios que impulsen al Empresario o emprendedor en su incursión al mundo de la Internet, 
							a través de un servicio de alta calidad, tecnología confiable, con diseño de vanguardia, y un Equipo de Trabajo con espíritu de servicio. <!--y por consiguiente al bienestar común-->
						</p>
					</div>
					<div class="span5" style="text-align:justify;">
						<div id="myCarousel" class="carousel slide"  >
							<div class="carousel-inner" >
								<div class="item active">
									<img  style="width:100%;height: 250px;"class="img-polaroid" src="aplicacion/vistas/slider-images/mia1.png"  />
								</div>
								<div class="item">
									<img style="width:100%;height: 250px;" src="aplicacion/vistas/slider-images/img6.png" class="img-polaroid" alt="">
								</div>
								<div class="item">
									<img style="width:100%;height: 250px;" src="aplicacion/vistas/slider-images/tec1.png" class="img-polaroid" alt="">
								</div>
							</div>
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
						</div>
						<!--<img class="img-responsive" src="aplicacion/vistas/slider-images/mia1.png"  />
						<br />
						<br />
						<video id="medio" width="100%" height="260" preload controls
							loop poster="aplicacion/vistas/img/videstad.MP4">
							<source src="aplicacion/vistas/img/videstad.MP4">
							<source src="aplicacion/vistas/img/videstad.MP4">
						</video>-->
					</div>
				</div>				
				<div id="footerInnerSeparator"></div>				  
			</div>
            <!--End Main Content-->
		</div>
        <div id="footerInnerSeparator"></div>
    </div>
	<script type="text/javascript">
		$(document).ready(function(){
			removerClass();
			addClass(0);
		});
		
		function startCamera() {
			$('#camera_wrap').camera({ 
				fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true 
			});
		}
		$(function(){
			startCamera();
		});		
	</script>
</div>
<?php 
	$contenido = ob_get_clean()
?>
<?php include("aplicacion/vistas/layout.php");
?>	