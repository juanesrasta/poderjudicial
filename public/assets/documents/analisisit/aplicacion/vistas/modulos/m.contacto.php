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
                <a href="index.php?ctl=inicio">Inicio</a> &nbsp;/&nbsp; <span>Contáctenos</span>
            </div>
            <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Contáctenos</h1>
                   	<h3 style="color:#FF6633;"><?php echo @$_GET['msg'];?></h3>
					<hr>
					<form >
					  <fieldset>
						
						<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Su Nombre" />
						<input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Su Email" />
						<textarea rows="8" name="message" id="message" class="input-block-level" placeholder="Su Mensaje"></textarea>
						<div class="actions">
							<button type="button" name="submit" id="submitButton" class="btn btn-info pull-right">Enviar Mensaje</button>
						</div>
						
						</fieldset>
					</form>  				 
                </div>
				<div class="span4 sidebar" style="margin-top:7%;">
                    <div class="sidebox">
                        <h3 class="sidebox-title">Información de Contacto</h3>
						<p>
							<address><strong>Análisis IT</strong><br />
							dirección:<br />
							Caracas, Venezuela<br />
							<abbr title="Phone"><strong>Teléfonos:</strong></abbr> 
								<span class="field">(0426)3196107 / </span>                                                                                             
								<span class="field">(0424)1345485 </span>
							</address> 
							<address>  <strong>Email</strong><br />
							<a href="mailto:#">infoanalisis@ait.com</a></address>  
						</p>     
						 <!--
						<h4 class="sidebox-title">Sidebar Categories</h4>-->
						<ul>
							<!--<li><a href="#">Quisque diam lorem sectetuer adipiscing</a></li>
							<li><a href="#">Interdum vitae, adipiscing dapibus ac</a></li>
							<li><a href="#">Scelerisque ipsum auctor vitae, pede</a></li>
							<li><a href="#">Donec eget iaculis lacinia non erat</a></li>
							<li><a href="#">Lacinia dictum elementum velit fermentum</a></li>
							<li><a href="#">Donec in velit vel ipsum auctor pulvinar</a></li>-->
						</ul>
						<!-- End Side Categories -->
                    </div>
				</div>				
            </div>			
            <div id="footerInnerSeparator"></div>
        </div>
		<script>
		$(document).ready(function(){
			removerClass();
			addClass(5);
		});
	</script>
    </div>
<?php 
	$contenido = ob_get_clean()
?>
<?php include("aplicacion/vistas/layout.php");
?>	