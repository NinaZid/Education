<?php

class View
{
	
	function __construct()
	{
		// echo "This is the view ";
	}

	public function render($name, $noInclude = false, $data = [])
	{	
		if ($noInclude == true) {
			require 'views/' .$name. '.php';	
		}
		else {
				require 'views/header.php';
				require 'views/' .$name. '.php';
				require 'views/footer.php';	
		}
	}
}