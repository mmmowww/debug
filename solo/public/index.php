<?php
//echo 123;
include '../vendor/autoload.php';




try {
	/** YES 1
	use Fabfuel\Prophiler\Profiler ;
	use Fabfuel\Prophiler\Toolbar;
	$profiler = new \Fabfuel\Prophiler\Profiler();
	$toolbar = new \Fabfuel\Prophiler\Toolbar($profiler);
	echo $toolbar->render();
	*/
	
	///Ну от части....
	/*
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
	throw new Exception('Деление на ноль.');
	*/
	
	
	
	

	 echo 999;
} catch (\Exeption $e) {
	var_dump($e->getMessage());
}
