<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>An&aacute;lisis IT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">
	<link rel="icon" href="aplicacion/vistas/img/icon.png" >
	<link rel="shortcut icon" href="aplicacion/vistas/img/icon.png">
	
    <link href="aplicacion/vistas/scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="aplicacion/vistas/scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="aplicacion/vistas/scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="aplicacion/vistas/scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="aplicacion/vistas/scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="aplicacion/vistas/scripts/carousel/style.css" rel="stylesheet" type="text/css" />
    <link href="aplicacion/vistas/scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />
	<link href="aplicacion/vistas/styles/custom.css" rel="stylesheet" type="text/css" />
	<link href="aplicacion/vistas/styles/demo.css" rel="stylesheet" type="text/css" />
	<link href="aplicacion/vistas/styles/style.css" rel="stylesheet" type="text/css" />
	
	<link href="aplicacion/vistas/scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" />
	<link href="aplicacion/vistas/scripts/yoxview/yoxview.css" rel="stylesheet" type="text/css" />
	
	<script src="aplicacion/vistas/scripts/jquery.min.js" type="text/javascript"></script> 
	<script src="aplicacion/vistas/scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="aplicacion/vistas/scripts/default.js" type="text/javascript"></script>
	<script src="aplicacion/vistas/scripts/highcharts.js" type="text/javascript"></script>
	<script src="aplicacion/vistas/scripts/highcharts-3d.js"></script>


	<script src="aplicacion/vistas/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
	<script src="aplicacion/vistas/scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
	<script src="aplicacion/vistas/scripts/modernizr.custom.72111.js" type="text/javascript"></script>
	<script src="aplicacion/vistas/scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
	
	<script>
		$(document).ready(function(){
			removerClass();
			//addClass(0);
		});
		
		function removerClass(){
			for(var i=0; i<5; i++){
				$("#inicio"+i).removeClass('active');
			}
		}
		function addClass(id){
			$('#inicio'+id).addClass('active');
		}
	</script>
</head>
<body id="pageBody">

<div id="divBoxed" class="container">
    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>
	<div class="divPanel notop nobottom">
		<div class="row-fluid">
			<div class="span12">
				<div id="divLogo" class="pull-left" >
					<img style="width:25%" src="aplicacion/vistas/img/icon.png" /><a  href="#" id="divSiteTitle" style="font-size:24px;"><!--&nbsp;&nbsp;&nbsp;&nbsp;-->AN&Aacute;LISIS IT</a><br />
					<p  style="margin-top:0%;"><a href="#" id="divTagLine">Transformamos la información </a></p>
				</div>
				<div id="divMenuRight" class="pull-right">
					<div class="navbar">
						<button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
							MENU <span class="icon-chevron-down icon-white"></span>
						</button>
						<div id="menu_nav" class="nav-collapse collapse">
							<ul class="nav nav-pills ddmenu">
								<li id="inicio0"><a href="index.php?ctl=inicio">Inicio</a></li>
								<li id="inicio1"><a href="index.php?ctl=nosotros">Nosotros</a></li>
								<li id="inicio2"><a href="index.php?ctl=servicios">Servicios</a></li>
								<li id="inicio3"class="dropdown">
									<a href="" class="dropdown-toggle">Trabajos <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="index.php?ctl=poblacion">Distribuci&oacute;n Poblacional (Ven)</a></li>
										<li><a href="index.php?ctl=venecifras">Venezuela en Cifras 2016</a></li>
										<li><a href="index.php?ctl=seguros">Seguros en Cifras 2014</a></li>
										<!--<li><a href="#">Análisis Financiero</a></li>-->
									</ul>
								</li>
								<li id="inicio4" class="dropdown">
									<a href="" class="dropdown-toggle">Productos <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Gestión Empresarial IT</a></li>
										<li><a href="index.php?ctl=itnomina">Nómina IT</a></li>
									</ul>
								</li>
								<li id="inicio5"><a href="index.php?ctl=contacto">Contacto</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo $contenido;?>
    <div id="footerOuterSeparator"></div>

    <div id="divFooter" class="footerArea">

        <div class="divPanel">
            <div class="row-fluid">
                <div class="span3" id="footerArea1">
                    <h3>Nosotros</h3>
					Somos una empresa constituida por jovenes especialistas en el &aacute;rea de las Tecnolog&iacute;as de Informaci&oacute;n 
					e investigadores que trabajan en los campos de las Ciencias Sociales y Experimentales.
                </div>
                <div class="span3" id="footerArea2">
                    <h3>Servicios</h3> 
					<span class="field">Ofrecemos Soluciones en &aacute;reas como:</span>
					An&aacute;lis de Datos, Desarrollo Web y Sistemas de Gesti&oacute;n Empresarial.
					Teniendo como principio fundamental difundir conomientos que permitan obtener mejores resultados.
                </div>
                <div class="span3" id="footerArea3">
                    <h3>Investigaci&oacute;n</h3> 
					Ponemos a su disposici&oacute;n una serie de trabajos, los cuales han sido desarrollados a partir
					de informaci&oacute;n procedente de diversas fuentes, pero que hemo decidido: An&aacute;lizar, Depurar y Procesar
					para mejorar e incrementar el nivel de Conocimiento que queremos difundir.
				</div>
                <div class="span3" id="footerArea4">

                    <h3>Cont&aacute;ctanos</h3>  
                                                               
                    <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon">Teléfonos</i><br /><br />
                    </li>
					<li>
						<span class="field">(0426)3196107 / </span>                                                                                             
                        <span class="field">(0424)1345485 </span> 
					</li>
					<br />
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">Email: infoanalisis@ait.com</span>
                        <!--<a href="mailto:info@yourdomain.com" title="Email">info@yourdomain.com</a>-->
                    </li>
					<br />
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Dir: Caracas, Venezuela</span>
                    </li>
                    </ul>

                </div>
            </div>
            <div class="row-fluid">
                <div class="span12" style="text-align:center;">
					<p class="social_bookmarks">
                        <a href="#"><i class="social foundicon-facebook"></i> Facebook</a>
					<a href=""><i class="social foundicon-twitter"></i> Twitter</a>
                    </p>
                    <span class="copyright">
                        Copyright © 2016 Análisis IT. Derechos Reservados.
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>

