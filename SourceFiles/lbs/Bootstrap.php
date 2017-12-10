<?php

class Bootstrap
{
	
	function __construct()
	{
		//if there is url, get it, otherwise is null 
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		// $url = explode('/', $_GET['url']);


		//printing the urls
		// print_r($url);

		// echo $url;

		if(empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index();
			$controller->index();
			return false;
		}



		$file = 'controllers/' .$url[0] . '.php';
		if (file_exists($file)) {
			require $file;
		}
		else {
				$this->error();
		}

		// if($url[0]=='error')
		// 	$url[0]="myerror";
		$controller = new $url[0];
		$controller->loadModel($url[0]);



		//calling methods
		if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
			$controller->{$url[1]}($url[2]);
		}

	 else {
			$this->error();
		}
		

		} else {
				if(isset($url[1])) {
					if(method_exists($controller, $url[1])) {
						$controller->{$url[1]}();
				}
				else {
					$this->error();
				}
			 } 
			 else {
			 		$controller->index();
			 }

		}
	}

	function error() {
		require 'controllers/error.php';
		$controller = new myError();
		$controller->index();

		return false;
	}
}