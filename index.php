<?php


//include_once "config.php"


include_once "View.php";
include_once "Controller.php";
include_once "Model.php";

//Model
$dominio                
	= new Object();
$dominio
	->model
	->processamento
        = new Model();
//View
$dominio
	->view 
        = new Object();

$dominio
	->view
	->processamento 
        = new View();

$view = $dominio
        	->view
        	->processamento;
  
$model = $dominio
         	 ->model
        	 ->processamento;
        
//Controller
$dominio
	->controller
	->processantoController 
        = new Controller($view,$model);



$global         = new Object();


$global->config = new Object();
$global->kernel = new Object();
$global->kernel->imagick = new Imagick();



$global->rota = new Object();
$global->rota->processamento = 
	[
		"/processamento" =>
                           [ 
                  	    "controller" => $dominio->controller->processamentoController,
			    "GET"        => "index",
			    "POST        => "create",
			    "PUT"        => "update",
			    "DELETE"     => "delete"
            		  ]
	];






