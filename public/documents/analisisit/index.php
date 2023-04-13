<?php
require_once ("aplicacion/controlador/Controlador.php");
require_once ("aplicacion/modelo/conexion.class.php");
require_once ("aplicacion/modelo/consultas.class.php");

$map = array(
    'inicio' => array('controller' =>'Controller', 'action' =>'inicio'),
    'nosotros' => array('controller' =>'Controller', 'action' =>'nosotros'),
    'servicios' => array('controller' =>'Controller', 'action' =>'servicios'),
    'poblacion' => array('controller' =>'Controller', 'action' =>'poblacion'),
    'listarPoblacion' => array('controller' =>'Controller', 'action' =>'listarPoblacion'),
    'gpoblacion' => array('controller' =>'Controller', 'action' =>'gpoblacion'),
    'gcifras' => array('controller' =>'Controller', 'action' =>'gcifras'),
    'venecifras' => array('controller' =>'Controller', 'action' =>'venecifras'),
    'seguros' => array('controller' =>'Controller', 'action' =>'seguros'),
    'gseguros' => array('controller' =>'Controller', 'action' =>'gseguros'),
    'contacto' => array('controller' =>'Controller', 'action' =>'contacto'),   
    'itnomina' => array('controller' =>'Controller', 'action' =>'itnomina'),   
    'graficasServicios1' => array('controller' =>'Controller', 'action' =>'graficasServicios1'),   
    'graficasServicios3' => array('controller' =>'Controller', 'action' =>'graficasServicios3'),   
);
 // Parseo de la ruta
if (isset($_GET['ctl'])) {
    if (isset($map[$_GET['ctl']])) {
        $ruta = $_GET['ctl'];
    } else {
         header('Status: 404 Not Found');
         echo '<html><body><h1>Error 404: No existe la ruta <i>' .
				'</p></body></html>';
         exit;
     }
 } else {
     $ruta = 'inicio';
 }

 $controlador = $map[$ruta];
 // Ejecución del controlador asociado a la ruta

 if (method_exists($controlador['controller'],$controlador['action'])) {
     call_user_func(array(new $controlador['controller'], $controlador['action']));
 } else {

     header('Status: 404 Not Found');
     echo '<html><body><h1>Error 404: El controlador <i>' .
            
             '</i> no existe</h1></body></html>';
 }
